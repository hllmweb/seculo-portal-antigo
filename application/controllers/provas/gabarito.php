<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gabarito extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("sica/aluno_model", "aluno", true);
        $this->load->model("gabarito/aval_prova_aluno_questao_model", "provaAlunoQuestao", true);
        $this->load->model('gabarito/prova_model', 'banco', TRUE);

        $this->load->helper(array('url'));
        $this->load->library(array('session', 'prova_lib'));
    }

    function prova_impressa() {
        $codigo = $this->session->userdata("SCL_SSS_USU_CODIGO");

        $data = array(
            "titulo" => "GABARITOS DE PROVAS",
            "token" => base64_encode($codigo)
        );

        $this->load->view("provas/gabarito/prova_impressa", $data);
    }

    function prova_online() {
        $codigo = $this->session->userdata("SCL_SSS_USU_CODIGO");

        $data = array(
            "titulo" => "GABARITOS DE PROVAS ONLINE",
            "token" => base64_encode($codigo)
        );

        $this->load->view("provas/gabarito/prova_online", $data);
    }
    
    function grid_prova_impressa() {
        $token = $this->input->post("token");
        $bimestre = $this->input->post("bimestre");
        $aluno = base64_decode($token);

        $data = array(
            'aluno' => $this->aluno->consultar($aluno),
            'provas' => $this->aluno->listaGabaritosProvas($aluno, $bimestre)
        );

        $this->load->view('provas/gabarito/grid_prova_impressa', $data);
    }

    function grid_prova_online() {
        $token = $this->input->post("token");
        $bimestre = $this->input->post("bimestre");
        $aluno = base64_decode($token);

        $aux = $this->aluno->listaGabaritosProvasOnline($aluno, $bimestre);

        //montar um vetor de provas em que um dos elementos é um vetor com todas
        //as resposta, gabarito e tempo de resolução
        $provas = array();
        $codigoProva = null;
        $i = -1;
        foreach ($aux as $row) {
            if ($codigoProva != $row['CD_PROVA']) {
                $i++;
                $codigoProva = $row['CD_PROVA'];
                $provas[$i] = $row;
            }

            if ($codigoProva == $row['CD_PROVA']) {
                $provas[$i]['QUESTOES'][] = array(
                    'POSICAO' => $row['POSICAO'],
                    'CORRETA' => $row['CORRETA'],
                    'RESPOSTA' => $row['RESPOSTA'],
                    'NR_TEMPO_RESPOSTA' => $row['NR_TEMPO_RESPOSTA']
                );
            }
        }

        $data = array(
            'aluno' => $this->aluno->consultar($aluno),
            'provas' => $provas,
            'token' => $token
        );

        $this->load->view('provas/gabarito/grid_prova_online', $data);
    }

    function avaliacao_online() 
    {
        $prova = base64_decode($this->input->get_post("prova"));
        $aluno = base64_decode($this->input->get_post("aluno"));

        $lib = new Prova_lib();

        //obter questoes, gabarito e alternativa que o aluno marcou        
        $dados = $this->provaAlunoQuestao->filtrar(array(
            array("campo" => 'CD_PROVA_VERSAO', "valor" => $prova),
            array("campo" => 'CD_ALUNO', "valor" => $aluno),
        ));

        //preparar vetor de questoes
        $questoes = array();
        foreach ($dados as $row) {
            //obter as opcoes da questao
            $aux = $this->provaAlunoQuestao->opcoes($row->CD_PROVA_VERSAO, $row->CD_QUESTAO);

            //formatar cada opcao
            $opcoes = array();
            $letra = "A";
            foreach ($aux as &$rowOpcao) {
                $opcoes[] = array(
                    'letra' => $letra,
                    'descricao' => $lib->formata_texto_com_richtext_alternativa($rowOpcao->DC_OPCAO->load())
                );

                $letra++;
            }

            //formatar cada questao e passar dados da prova
            $questoes[] = array(
                'titulo' => $row->TITULO,
                'disciplinas' => $row->DISCIPLINAS,
                'tema' => strip_tags($row->DC_TEMA),
                'conteudo' => strip_tags($row->DC_CONTEUDO->load()),
                'posicao' => $row->POSICAO,
                'questao' => $lib->formata_texto_com_richtext($row->DC_QUESTAO->load()),
                'opcoes' => $opcoes,
                'correta' => $row->CORRETA,
                'resposta' => $row->RESPOSTA,
                'tempo' => $row->NR_TEMPO_RESPOSTA,
                'anulada' => $row->FLG_ANULADA,
                'cancelada' => $row->FLG_CANCELADA
            );
        }

        $data = array(
            'aluno' => $this->banco->cabecalho(array('prova' => $prova, 'aluno' => $aluno )),
            'questoes' => $questoes
        );

        //gerar PDF da prova
        include_once APPPATH . '/third_party/mpdf/mpdf.php';
        $mpdf = new mPDF('', 'A4', 9, 'Arial Narrow');

        $mpdf->SetHTMLHeader($this->load->view('provas/imprimir/header', $data, true));
        $mpdf->SetHTMLFooter($this->load->view('provas/imprimir/footer', $data, true));

        $mpdf->AddPage('P', // L - landscape, P - portrait
                'A4', '', '', '', 10, // margin_left
                10, // margin right
                30, // margin top
                29, // margin bottom
                0, // margin header
                5); // margin footer
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->SetDefaultBodyCSS('line-height', 1.5);
        $mpdf->SetDefaultBodyCSS('text-align', 'justify');
        $mpdf->WriteHTML($this->load->view("provas/imprimir/avaliacao_online", $data, true));

        $mpdf->Output('Prova Online.pdf', 'I');
    }

}
