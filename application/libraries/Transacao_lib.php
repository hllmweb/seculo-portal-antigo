<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 *
 * VISA ELECTRON :Banco Bradesco,
 *                Banco do Brasil,
 *                Santander,
 *                HSBC,
 *                Itaú,
 *                Mercantil,
 *                Sicredi,
 *                Banco de Brasília,
 *                Banco da Amazônia,
 *                Banco Espírito Santo
 *                Banco do Nordeste.
 *
 * MAESTRO: Banco Santander,
 *          Banco de Brasília,
 *          Bancoob.
 *
 *
 */

class Transacao_lib {

    private $logger;

    //PRODUÇÃO
    private $dadosEcNumero = '1051047860';
    private $dadosEcChave  = 'dd8b9b4c3fa1ed6594afff1fa2d4473924153eb01a04e4f9f3c873fe44245512';

    private $log_file = "/application/logs/xml.log";
    private $fp = null;
    private $formaPagamentoParcelas = 1;
    private $dadosPedidoMoeda = "986";
    private $dadosPedidoIdioma = "PT";

    public $dadosPortadorNumero;
    public $dadosPortadorVal;
    public $dadosPortadorInd;
    public $dadosPortadorCodSeg;
    public $dadosPortadorNome;
    public $dadosPedidoNumero;
    public $dadosPedidoValor;
    public $dadosPedidoData;
    public $dadosPedidoDescricao;
    public $formaPagamentoBandeira;
    public $formaPagamentoProduto;


    public $urlRetorno;
    public $autorizar = 3;
    public $capturar = 'true';
    public $tid;
    public $status;
    public $urlAutenticacao;

    const ENCODING = "ISO-8859-1";
    const VERSAO   = "1.1.0";

    // PRODUÇÃO
    const ENDERECO = "https://ecommerce.cbmp.com.br/servicos/ecommwsec.do";

    function __construct() {
        //$this->logger = new Logger();
    }

    public function logOpen() {

            $this->fp = fopen(getcwd() . $this->log_file, 'a') ;
    }

    public function logWrite($strMessage, $transacao) {

        $obj = & get_instance();

        if (!$this->fp)
            $this->logOpen();

        $path = $_SERVER["REQUEST_URI"];
        $data = date("Y-m-d H:i:s:u (T)");

        $log = "***********************************************" . "\n";
        $log .= $data . "\n";
        $log .= "CD USUARIO: " . $obj->session->userdata('SCL_SSS_USU_CODIGO') . "\n";
        $log .= "DO ARQUIVO: " . $path . "\n\t";
        $log .= "OPERAÇÃO: " . $transacao . "\n\t";
        $log .= $strMessage . "\n\n";

        fwrite($this->fp, $log);
    }

    // Envia requisição
    function httprequest($paEndereco, $paPost) {

        $sessao_curl = curl_init();
        curl_setopt($sessao_curl, CURLOPT_URL, $paEndereco);

        curl_setopt($sessao_curl, CURLOPT_FAILONERROR, true);

        //  CURLOPT_SSL_VERIFYPEER
        //  verifica a validade do certificado
        curl_setopt($sessao_curl, CURLOPT_SSL_VERIFYPEER, true);
        //  CURLOPPT_SSL_VERIFYHOST
        //  verifica se a identidade do servidor bate com aquela informada no certificado
        curl_setopt($sessao_curl, CURLOPT_SSL_VERIFYHOST, 2);

        //  CURLOPT_SSL_CAINFO
        //  informa a localização do certificado para verificação com o peer
         curl_setopt($sessao_curl, CURLOPT_CAINFO, getcwd() . "/assets/ssl/VeriSignClass3PublicPrimaryCertificationAuthority-G5.crt");

        curl_setopt($sessao_curl, CURLOPT_SSLVERSION, 6);

        //  CURLOPT_CONNECTTIMEOUT
        //  o tempo em segundos de espera para obter uma conexão
        curl_setopt($sessao_curl, CURLOPT_CONNECTTIMEOUT, 10);

        //  CURLOPT_TIMEOUT
        //  o tempo máximo em segundos de espera para a execução da requisição (curl_exec)
        curl_setopt($sessao_curl, CURLOPT_TIMEOUT, 40);

        //  CURLOPT_RETURNTRANSFER
        //  TRUE para curl_exec retornar uma string de resultado em caso de sucesso, ao
        //  invés de imprimir o resultado na tela. Retorna FALSE se há problemas na requisição
        curl_setopt($sessao_curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($sessao_curl, CURLOPT_POST, true);
        curl_setopt($sessao_curl, CURLOPT_POSTFIELDS, $paPost);

        $resultado = curl_exec($sessao_curl);

        curl_close($sessao_curl);

        if ($resultado) {
            return $resultado;
        } else {
            return curl_error($sessao_curl);
        }
    }

    function VerificaErro($vmPost, $vmResposta) {
        $error_msg = null;

        try {
            if (stripos($vmResposta, "SSL certificate problem") !== false) {
                throw new Exception("CERTIFICADO INVÁLIDO - O certificado da transação não foi aprovado", "099");
            }

            $objResposta = simplexml_load_string($vmResposta, null, LIBXML_NOERROR);
            if ($objResposta == null) {
                throw new Exception("HTTP READ TIMEOUT - o Limite de Tempo da transação foi estourado", "099");
            }
        } catch (Exception $ex) {
            $error_msg = "     Código do erro: " . $ex->getCode() . "\n";
            $error_msg .= "     Mensagem: " . $ex->getMessage() . "\n";

            // Gera página HTML
            //echo '<html><head><title>Erro na transação</title><meta charset="UTF-8" /></head><body>';
            //echo '<span style="color:red;, font-weight:bold;">Ocorreu um erro em sua transação!</span>' . '<br />';
            //echo '<span style="font-weight:bold;">Detalhes do erro:</span>' . '<br />';
            //echo '<pre>' . $error_msg . '<br /><br />';
            //echo "     XML de envio: " . "<br />" . htmlentities($vmPost);
            //echo '</pre>';
            //echo '</body></html>';
            $error_msg .= "     XML de envio: " . "\n" . $vmPost;

            // Dispara o erro
            trigger_error($error_msg, E_USER_ERROR);
            return true;
        }

        if ($objResposta->getName() == "erro") {
            $error_msg = "     Código do erro: " . $objResposta->codigo . "\n";
            $error_msg .= "     Mensagem: " . utf8_decode($objResposta->mensagem) . "\n";
            // Gera página HTML
            //echo '<html><head><title>Erro na transação</title><meta charset="UTF-8" /></head><body>';
            //echo '<span style="color:red;, font-weight:bold;">Ocorreu um erro em sua transação!</span>' . '<br />';
            //echo '<span style="font-weight:bold;">Detalhes do erro:</span>' . '<br />';
            //echo '<pre>' . $error_msg . '<br /><br />';
            //echo "     XML de envio: " . "<br />" . htmlentities($vmPost);
            //echo '</pre>';
            //echo '</body></html>';
            $error_msg .= "     XML de envio: " . "\n" . $vmPost;

            // Dispara o erro
            trigger_error($error_msg, E_USER_ERROR);
        }
    }

    function ReturnURL() {

        $pageURL = 'http';

	if ($_SERVER["SERVER_PORT"] == 443) // protocolo https
	{
		$pageURL .= 's';
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80")
	{
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"]. substr($_SERVER["REQUEST_URI"], 0);
	}
	// ALTERNATIVA PARA SERVER_NAME -> HOST_HTTP

	$file = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

	$ReturnURL = str_replace($file, "home/retorno", $pageURL);

	return $ReturnURL;
    }

    // Grava erros no arquivo de log
    function Handler($eNum, $eMsg, $file, $line, $eVars) {

        $obj = & get_instance();
        $obj->load->helper('url');
        $obj->load->library('session');


        $logFile = getcwd() . "/application/logs/log.log";
        $e = "";
        $Data = date("Y-m-d H:i:s (T)");

        $errortype = array(
            E_ERROR => 'ERROR',
            E_WARNING => 'WARNING',
            E_PARSE => 'PARSING ERROR',
            E_NOTICE => 'RUNTIME NOTICE',
            E_CORE_ERROR => 'CORE ERROR',
            E_CORE_WARNING => 'CORE WARNING',
            E_COMPILE_ERROR => 'COMPILE ERROR',
            E_COMPILE_WARNING => 'COMPILE WARNING',
            E_USER_ERROR => 'ERRO NA TRANSACAO',
            E_USER_WARNING => 'USER WARNING',
            E_USER_NOTICE => 'USER NOTICE',
            E_STRICT => 'RUNTIME NOTICE',
            E_RECOVERABLE_ERROR => 'CATCHABLE FATAL ERROR'
        );

        $e .= "**********************************************************\n";
        $e .= $eNum . " " . $errortype[$eNum] . " - ";
        $e .= $Data . "\n";
        $e .= "     ARQUIVO: " . $file . "(Linha " . $line . ")\n";
        $e .= "     MENSAGEM: " . "\n" . $eMsg . "\n\n";

        error_log($e, 3, $logFile);
    }

    // Geradores de XML
    private function XMLHeader() {
        return '<?xml version="1.0" encoding="' . self::ENCODING . '" ?>';
    }

    private function XMLDadosEc() {
        $msg = '<dados-ec>' . "\n      " .
                '<numero>'
                . $this->dadosEcNumero .
                '</numero>' . "\n      " .
                '<chave>'
                . $this->dadosEcChave .
                '</chave>' . "\n   " .
                '</dados-ec>';

        return $msg;
    }

    private function XMLDadosPortador() {
        $msg = '<dados-portador>' . "\n      " .
                '<numero>'
                . $this->dadosPortadorNumero .
                '</numero>' . "\n      " .
                '<validade>'
                . $this->dadosPortadorVal .
                '</validade>' . "\n      " .
                '<indicador>'
                . $this->dadosPortadorInd .
                '</indicador>' . "\n      " .
                '<codigo-seguranca>'
                . $this->dadosPortadorCodSeg .
                '</codigo-seguranca>' . "\n   ";

        // Verifica se Nome do Portador foi informado
        if ($this->dadosPortadorNome != null && $this->dadosPortadorNome != "") {
            $msg .= '   <nome-portador>'
                    . $this->dadosPortadorNome .
                    '</nome-portador>' . "\n   ";
        }

        $msg .= '</dados-portador>';

        return $msg;
    }

    private function XMLDadosCartao() {
        $msg = '<dados-cartao>' . "\n      " .
                '<numero>'
                . $this->dadosPortadorNumero .
                '</numero>' . "\n      " .
                '<validade>'
                . $this->dadosPortadorVal .
                '</validade>' . "\n      " .
                '<indicador>'
                . $this->dadosPortadorInd .
                '</indicador>' . "\n      " .
                '<codigo-seguranca>'
                . $this->dadosPortadorCodSeg .
                '</codigo-seguranca>' . "\n   ";

        // Verifica se Nome do Portador foi informado
        if ($this->dadosPortadorNome != null && $this->dadosPortadorNome != "") {
            $msg .= '   <nome-portador>'
                    . $this->dadosPortadorNome .
                    '</nome-portador>' . "\n   ";
        }

        $msg .= '</dados-cartao>';

        return $msg;
    }

    private function XMLDadosPedido() {
        $this->dadosPedidoData = date("Y-m-d") . "T" . date("H:i:s");
        $msg = '<dados-pedido>' . "\n      " .
                '<numero>'
                . $this->dadosPedidoNumero .
                '</numero>' . "\n      " .
                '<valor>'
                . $this->dadosPedidoValor .
                '</valor>' . "\n      " .
                '<moeda>'
                . $this->dadosPedidoMoeda .
                '</moeda>' . "\n      " .
                '<data-hora>'
                . $this->dadosPedidoData .
                '</data-hora>' . "\n      ";
        if ($this->dadosPedidoDescricao != null && $this->dadosPedidoDescricao != "") {
            $msg .= '<descricao>'
                    . $this->dadosPedidoDescricao .
                    '</descricao>' . "\n      ";
        }
        $msg .= '<idioma>'
                . $this->dadosPedidoIdioma .
                '</idioma>' . "\n   " .
                '</dados-pedido>';

        return $msg;
    }

    private function XMLFormaPagamento() {
        $msg = '<forma-pagamento>' . "\n      " .
                '<bandeira>'
                . $this->formaPagamentoBandeira .
                '</bandeira>' . "\n      " .
                '<produto>'
                . $this->formaPagamentoProduto .
                '</produto>' . "\n      " .
                '<parcelas>'
                . $this->formaPagamentoParcelas .
                '</parcelas>' . "\n   " .
                '</forma-pagamento>';

        return $msg;
    }

    private function XMLUrlRetorno() {
        $msg = '<url-retorno>' . $this->urlRetorno . '</url-retorno>';

        return $msg;
    }

    private function XMLAutorizar() {
        $msg = '<autorizar>' . $this->autorizar . '</autorizar>';

        return $msg;
    }

    private function XMLCapturar() {
        $msg = '<capturar>' . $this->capturar . '</capturar>';

        return $msg;
    }

    // Envia Requisição
    public function Enviar($vmPost, $transacao) {

        $this->logWrite("ENVIO: " . $vmPost, $transacao);
        // ENVIA REQUISIÇÃO SITE CIELO
        $vmResposta = $this->httprequest(self::ENDERECO, "mensagem=" . $vmPost);

        $this->logWrite("RESPOSTA: " . $vmResposta, $transacao);

        $this->VerificaErro($vmPost, $vmResposta);
        return simplexml_load_string($vmResposta);
    }

    // Requisições
    public function RequisicaoTransacao($incluirPortador) {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-transacao id="' . md5(date("YmdHisu")) . '" versao="' . self::VERSAO . '">' . "\n   "
                . $this->XMLDadosEc() . "\n   ";
        if ($incluirPortador == true) {
            $msg .= $this->XMLDadosPortador() . "\n   ";
        }
        $msg .= $this->XMLDadosPedido() . "\n   "
                . $this->XMLFormaPagamento() . "\n   "
                . $this->XMLUrlRetorno() . "\n   "
                . $this->XMLAutorizar() . "\n   "
                . $this->XMLCapturar() . "\n";

        $msg .= '</requisicao-transacao>';

        $objResposta = $this->Enviar($msg, "Transacao");
        return $objResposta;
    }

    public function RequisicaoTid() {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-tid id="' . md5(date("YmdHisu")) . '" versao ="' . self::VERSAO . '">' . "\n   "
                . $this->XMLDadosEc() . "\n   "
                . $this->XMLFormaPagamento() . "\n" .
                '</requisicao-tid>';

        $objResposta = $this->Enviar($msg, "Requisicao Tid");
        return $objResposta;
    }

    public function RequisicaoAutorizacaoPortador() {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-autorizacao-portador id="' . md5(date("YmdHisu")) . '" versao ="' . self::VERSAO . '">' . "\n"
                . '<tid>' . $this->tid . '</tid>' . "\n   "
                . $this->XMLDadosEc() . "\n   "
                . $this->XMLDadosCartao() . "\n   "
                . $this->XMLDadosPedido() . "\n   "
                . $this->XMLFormaPagamento() . "\n   "
                . '<capturar-automaticamente>' . $this->capturar . '</capturar-automaticamente>' . "\n" .
                '</requisicao-autorizacao-portador>';

        $objResposta = $this->Enviar($msg, "Autorizacao Portador");
        return $objResposta;
    }

    public function RequisicaoAutorizacaoTid() {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-autorizacao-tid id="' . md5(date("YmdHisu")) . '" versao="' . self::VERSAO . '">' . "\n  "
                . '<tid>' . $this->tid . '</tid>' . "\n  "
                . $this->XMLDadosEc() . "\n" .
                '</requisicao-autorizacao-tid>';

        $objResposta = $this->Enviar($msg, "Autorizacao Tid");
        return $objResposta;
    }

    public function RequisicaoCaptura($PercentualCaptura, $anexo) {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-captura id="' . md5(date("YmdHisu")) . '" versao="' . self::VERSAO . '">' . "\n   "
                . '<tid>' . $this->tid . '</tid>' . "\n   "
                . $this->XMLDadosEc() . "\n  "
                . '<valor>' . $PercentualCaptura . '</valor>' . "\n";
        if ($anexo != null && $anexo != "") {
            $msg .= '   <anexo>' . $anexo . '</anexo>' . "\n";
        }
        $msg .= '</requisicao-captura>';

        $objResposta = $this->Enviar($msg, "Captura");
        return $objResposta;
    }

    public function RequisicaoCancelamento() {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-cancelamento id="' . md5(date("YmdHisu")) . '" versao="' . self::VERSAO . '">' . "\n   "
                . '<tid>' . $this->tid . '</tid>' . "\n   "
                . $this->XMLDadosEc() . "\n" .
                '</requisicao-cancelamento>';

        $objResposta = $this->Enviar($msg, "Cancelamento");
        return $objResposta;
    }

    public function RequisicaoConsulta() {
        $msg = $this->XMLHeader() . "\n" .
                '<requisicao-consulta id="' . md5(date("YmdHisu")) . '" versao="' . self::VERSAO . '">' . "\n   "
                . '<tid>' . $this->tid . '</tid>' . "\n   "
                . $this->XMLDadosEc() . "\n" .
                '</requisicao-consulta>';

        $objResposta = $this->Enviar($msg, "Consulta");
        return $objResposta;
    }

    // Transforma em/lê string
    public function ToString() {
        $msg = $this->XMLHeader() .
                '<objeto-pedido>'
                . '<tid>' . $this->tid . '</tid>'
                . '<status>' . $this->status . '</status>'
                . $this->XMLDadosEc()
                . $this->XMLDadosPedido()
                . $this->XMLFormaPagamento() .
                '</objeto-pedido>';

        return $msg;
    }

    public function FromString($Str) {
        $DadosEc = "dados-ec";
        $DadosPedido = "dados-pedido";
        $DataHora = "data-hora";
        $FormaPagamento = "forma-pagamento";
        $XML = simplexml_load_string($Str);

        $this->tid = $XML->tid;
        $this->status = $XML->status;
        $this->dadosEcChave = $XML->$DadosEc->chave;
        $this->dadosEcNumero = $XML->$DadosEc->numero;
        $this->dadosPedidoNumero = $XML->$DadosPedido->numero;
        $this->dadosPedidoData = $XML->$DadosPedido->$DataHora;
        $this->dadosPedidoValor = $XML->$DadosPedido->valor;
        $this->formaPagamentoProduto = $XML->$FormaPagamento->produto;
        $this->formaPagamentoParcelas = $XML->$FormaPagamento->parcelas;
    }

    // Traduz cógigo do Status
    public function getStatus() {
        $status;

        switch ($this->status) {
            case "0": $status = "Criada";
                break;
            case "1": $status = "Em andamento";
                break;
            case "2": $status = "Autenticada";
                break;
            case "3": $status = "Não autenticada";
                break;
            case "4": $status = "Autorizada";
                break;
            case "5": $status = "Não autorizada";
                break;
            case "6": $status = "Capturada";
                break;
            case "8": $status = "Não capturada";
                break;
            case "9": $status = "Cancelada";
                break;
            case "10": $status = "Em autenticação";
                break;
            default: $status = "n/a";
                break;
        }

        return $status;
    }

    public function bandeira($bandeira) {
        // TRANSFORMA O NOME DA BANDEIRA NO CODIGO POSTO NO BANCO
        $codigo = '';
        switch ($bandeira) {
            case "amex":       $codigo = 1;   break;
            case "mastercard": $codigo = 2;   break;
            case "visa":       $codigo = 4;   break;
            case "credicard":  $codigo = 5;   break;
            case "elo":        $codigo = 7;   break;
            case "diners":     $codigo = 8;   break;
        }
        return $codigo;
    }

    public function tPagamento($tipo) {
        $codigo = '';
        // TRANSFORMA O TIPO DE PAGAMENTO POR EXTENSO
        switch ($tipo) {
            case "A": $codigo = 'DEBITO';
                break;
            case "1": $codigo = 'CRÉDITO';
                break;
        }
        return $codigo;
    }

    public function Retorno() {

        $obj = & get_instance();
        $obj->load->helper('url');
        $obj->load->model('pagamento_model', 'pagamento', TRUE);


        if ($_SESSION["transacao"]) {

            // Resgata último pedido feito da SESSION
            $ultimoPedido = $_SESSION["transacao"]->count();
            $ultimoPedido -= 1;

            $this->FromString($_SESSION["transacao"]->offsetGet($ultimoPedido));
            // Consulta situação da transação
            $objResposta = $this->RequisicaoConsulta();
            // Atualiza status

            $this->status = $objResposta->status;
            if ($this->status == '4' || $this->status == '6')
                $finalizacao = true;
            else
                $finalizacao = false;
            // Atualiza Pedido da SESSION
            $StrPedido = $this->ToString();
            $_SESSION["transacao"]->offsetSet($ultimoPedido, $StrPedido);

            $codigo = strval($this->dadosPedidoNumero);
            $tid = strval($this->tid);
            htmlentities($objResposta->asXML());

            $data['dadosPedidoNumero'] = $this->dadosPedidoNumero;   // PEGA O CODIGO DO PEDIDO
            $data['tid'] = $this->tid;                             // PEGA O NUMERO DA TRANSAÇÃO DO PEDIDO CIELO
            $data['finalizacao'] = $finalizacao ? "sim" : "não";     // PEGA O STATUS DE FECHAMENTO DA TRANSAÇÃO
            $data['status'] = $this->getStatus();                  // PEGA O STATUS DA TRANSAÇÃO CIELO

            // Não autenticada || Capturado
            if ($this->getStatus() == 'Não autenticada') {
                $at = array(
                    'operacao' => 'UPD',
                    'codigo' => $codigo,
                    'autenticacao' => $tid,
                    'status' => 'AUTORIZADO'
                );
                print_r($at);
                //$op = $obj->pagamento->transacao($at);


                foreach ($obj->session->userdata('FRM_PRODUTO') as $item) {
                    $row = base64_decode($item);
                    $r = explode(':', $row);
                    $params = array(
                        'operacao' => 'LANCAR',
                        'codigo' => $codigo,
                        'autenticacao' => $tid,
                        'aluno' => $r[0],
                        'produto' => $r[1],
                        'mes' => $r[2],
                        'parcela' => $r[3],
                        'ordem' => $r[4],
                        'responsavel' => $this->session->userdata('SCL_SSS_USU_CODIGO'),
                        'cartao' => $this->bandeira($obj->session->userdata('FRM_BANDEIRA')),
                        'tipo' => $this->tPagamento($obj->session->userdata('FRM_FORMA_PAGAMENTO')),
                        'status' => 'AUTORIZADO',
                        'recebido' => $r['5'],
                        'historico' => "Pagto. ONLINE com Cartão (" . strtoupper($obj->session->userdata('FRM_BANDEIRA')) . '/' . $this->cielo->tPagamento($this->session->userdata('FRM_FORMA_PAGAMENTO')) . ") || (" . $r[7] . '-' . $r[2] . ") do Aluno(a) " . $r[6] . "",
                    );
                    PRINT_R($params);
                    //$this->pagamento->lancar_pagamento($params);
                }
            } else {
                $at = array(
                    'operacao' => 'UPD',
                    'codigo' => $codigo,
                    'autenticacao' => $tid,
                    'status' => 'CANCELADO'
                );
                print_r($at);
                //$op = $this->pagamento->transacao($at);
            }
        } else {
            echo $ultimoPedido = $obj->session->userdata('transacao')->count();
            echo $ultimoPedido -= 1;
            return( 'Erro de sessão | Entre em contato com o Administrador do Sistema | 92 3211-0191');
        }
    }


}

?>
