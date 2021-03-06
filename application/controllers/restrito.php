<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
class Restrito extends CI_Controller {

    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model('login_model', 'login', TRUE);
        $this->load->model('sms_model', 'sms', TRUE);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session','encrypt'));
    }

    function index() {

        $this->session->unset_userdata('SCL_SSS_USU_ID');
        $this->session->unset_userdata('SCL_SSS_USU_NOME');
        $this->session->unset_userdata('SCL_SSS_USU_SENHA');
        $this->session->unset_userdata('SCL_SSS_USU_TIPO');
        $this->session->unset_userdata('SCL_SSS_USU_TURMA');
        $this->session->unset_userdata('SCL_SSS_USU_PERIODO');

        $this->form_validation->set_rules('sclusuario', 'usuário', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sclsenha', 'senha', 'trim|required|xss_clean|callback_check_database');


        if ($this->form_validation->run() == FALSE) {

            $data = array('sms' => '');

            $this->load->view('login/index',$data);


        } else {
            // vá para a primeira página
            if ($this->input->post('sclusuario') == $this->input->post('sclsenha')) {
                redirect('inicio', 'refresh');
            } else {
                redirect('inicio', 'refresh');
            }
        }
    }

    function check_database($sclsenha) {

        $sclusuario = $this->input->post('sclusuario');
        $parametro = array(
            'operacao' => 'L',
            'usuario' => $sclusuario,
            'senha' => $sclsenha,
            'pessoa' => '',
        );


        //query the database
        $result = $this->login->acesso($parametro);

        if ($result[0]['USU_LOGIN'] <> strtoupper($sclusuario)) {
            //if form validate false
            $this->form_validation->set_message('check_database', "<div class='alert alert-danger'><span class='fa fa-remove-circle'></span> usuário/senha inválidos</div>");

            return FALSE;
        } else {

            $sess_array = array();
            $this->session->set_userdata('SCL_SSS_USU_LOGIN', $result[0]['USU_LOGIN']);
            $this->session->set_userdata('SCL_SSS_USU_NOME', $result[0]['USU_NOME']);
            $this->session->set_userdata('SCL_SSS_USU_PERIODO', $result[0]['PERIODO_ATUAL']);
            $this->session->set_userdata('SCL_SSS_USU_TIPO_TEXTO', $result[0]['TIPO_TEXTO']);
            $this->session->set_userdata('SCL_SSS_USU_PASS', $result[0]['PASS']);
            $this->session->set_userdata("VISUALIZOU_AVISO", false);

            if ($result[0]['TIPO'] == 10) { // VISAO DO ALUNO
                $this->session->set_userdata('SCL_SSS_USU_CODIGO', $result[0]['USU_LOGIN']);
                $this->session->set_userdata('SCL_SSS_USU_TURMA', $result[0]['TURMA']);
                $this->session->set_userdata('SCL_SSS_USU_CURSO', $result[0]['CD_CURSO']);
                $this->session->set_userdata('SCL_SSS_USU_SERIE', $result[0]['ORDEM_SERIE']);
                $this->session->set_userdata('SCL_SSS_USU_TIPO', '10');
            }

            elseif ($result[0]['TIPO'] == 20) { // VISAO DO RESPONSAVEL
                $this->session->set_userdata('SCL_SSS_USU_CODIGO', $result[0]['USU_LOGIN']);
                $this->session->set_userdata('SCL_SSS_USU_TIPO', '20');
            }

            elseif ($result[0]['TIPO'] == 30) { // VISAO DO COLABORADOR

                $this->session->set_userdata('SCL_SSS_USU_CODIGO', $result[0]['USU_CODIGO']);
                $this->session->set_userdata('SCL_SSS_USU_FUNCIONARIO', $result[0]['USU_FUNCIONARIO']);
                $this->session->set_userdata('SCL_SSS_USU_PCODIGO', $result[0]['USU_PROFESSOR']);
                $this->session->set_userdata('SCL_SSS_USU_RHCODIGO', $result[0]['USU_PESSOA']);

                if (!empty($result[0]['USU_PROFESSOR'])) { // VISAO DO COLABORADOR
                    // PROFESSORES
//                    $sessao = $this->session->userdata;
//                    $ips = explode('.',$sessao['ip_address']);
//                    if($ips[0] != '10' ){
//                       $this->form_validation->set_message('check_database', "<div class='alert alert-danger'><span class='fa fa-remove-circle'></span>Não é permitido o acesso fora da escola</div>");
//                       return false;
//                    }
                    $this->session->set_userdata('SCL_SSS_USU_TIPO', 30);
                }else{
                    // COLABORADOR
                    $this->session->set_userdata('SCL_SSS_USU_TIPO', 40);
                }
            }

            return TRUE;
        }
    }

    function logout() {

        //remove all session data
        $this->session->unset_userdata('SCL_SSS_USU_CODIGO');
        $this->session->unset_userdata('SCL_SSS_USU_NOME');
        $this->session->unset_userdata('SCL_SSS_USU_TIPO');
        $this->session->unset_userdata('SCL_SSS_USU_TURMA');
        $this->session->unset_userdata('SCL_SSS_USU_PERIODO');
        $this->session->unset_userdata('SCL_SSS_USU_CODIGO');

        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }

    function error() {
        $this->load->view('layout/error');
    }

    function foto() {

         $parametro = array(
            'operacao' => 'FT',
            'usuario' => $this->input->get('codigo'),
        );
        $result = $this->login->acesso($parametro);
        header_remove("Content-Type: image/jpg'");
        $img = $result[0]['FOTO'];
        if($img == ''){
            echo "".SCL_IMG."user.png";
        }else{
            header("Content-Type: image/jpg'");
            echo $img;
        }
        exit();
    }

    function gerarToken() {

        $sms = new Soapsms();

        $parametro = array(
            'operacao' => 'R',
            'usuario' => $this->input->post('LoginRecuperar'),
        );
        $dado = $this->login->acesso($parametro);
        $dado = $dado[0];

        $fone = strlen($dado['FONE']);
        switch($fone){
            case 9:
                $fone_valido = FALSE;
            break;
            case 10:
                $fone_valido = FALSE;
            break;
            case 11:
                $fone_valido = TRUE;
            break;
        }



        if ($dado['FONE'] != '' && $fone_valido == TRUE) {
            // Gera o Token para validação
            $senha = $sms->geraSenha(5,false,true,false);
            // MUDA A SENHA DO USUÁRIO
            $parametro = array(
                'operacao' => 'A',
                'usuario' => $this->input->post('LoginRecuperar'),
                //'nova_senha' => $this->encrypt->encode($senha),
                'nova_senha' => $senha,
            );

            $result = $this->login->acesso($parametro);

            $id = $dado['FONE'].date('Yi').'01';
            $sms->celular = $dado['FONE'];
            $sms->mensagem = 'NOVO TOKEN PARA MUDAR SUA SENHA AO PORTAL SECULO '.$senha.'';
            $sms->codigo = $id;

            $sms->enviar();

             $retorno = array(
                'titulo' => 'Parabéns',
                'texto'  => 'Sr.(a) '.$dado['NOME'].' o token foi enviado para o Celular número '.substr($dado['FONE'],0,3).'****-'.substr($dado['FONE'],7,4).'.',
                'tipo'   => 'success'
            );
            print_r(json_encode($retorno));

        }else{
            $retorno = array(
                'titulo' => 'Error',
                'texto'  => 'Não encontramos seu Cadastro ou o número do seu celular está incorreto. Dirija-se à Secretaria da Escola para atualização de cadastro',
                'tipo'   => 'error'
            );
            print_r(json_encode($retorno));
        }
    }

    function recuperar_token() {

        $parametro = array(
            'operacao' => 'R',
            'usuario' => $this->input->post('LoginRecuperar'),
        );
        $dado = $this->login->acesso($parametro);
        $dado = $dado[0];

        if ($dado['SENHA'] == $this->input->post('RCPToken')) {
            // MUDA A SENHA DO USUÁRIO
            $parametro = array(
                'operacao' => 'A',
                'usuario' => $this->input->post('LoginRecuperar'),
                'nova_senha' => $this->input->post('RCPSenha'),
            );
            $result = $this->login->acesso($parametro);

            $retorno = array(
                'titulo' => 'Parabéns',
                'texto'  => 'Sr.(a) '.$dado['NOME'].' sua senha foi alterada.',
                'tipo'   => 'success'
            );
            print_r(json_encode($retorno));

        }else{
            $retorno = array(
                'titulo' => 'Error',
                'texto'  => 'O Token não é válido ou seu Usuário não foi encontrado.',
                'tipo'   => 'error'
            );
            print_r(json_encode($retorno));
        }
    }

}
