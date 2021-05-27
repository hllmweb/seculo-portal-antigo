<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registro_diario extends CI_Controller {

    function __construct() {
        parent::__construct();
        //model sem procedure
        $this->load->model('sica/turma_professor_model', 'turmaProfessor', true);
        $this->load->model('sica/aluno_disciplina_model', 'alunoDisciplina', true);
        $this->load->model('professor/registro_diario_model', 'registroDiario', true);
       
        $this->load->helper(array('form', 'url', 'html', 'funcoes'));
        $this->load->library(array('form_validation', 'session'));
    }

   
    /**
     * Redireciona para tela que selecionará qual turma e disciplina deseja 
     * visualizar o resultado do semestre corrente.
     */
    function index() {
        $professor = $this->session->userdata('SCL_SSS_USU_PCODIGO');
        $periodo = $this->session->userdata('SCL_SSS_USU_PERIODO');

        $data = array(
            'titulo' => '<h1> Diário de Classe <i class="fa fa-angle-double-right"></i> Registro Diário</h1>',
            'turmas' => $this->turmaProfessor->listaTurmasRegularDoDia($professor, $periodo),
        );
        
        $this->load->view("professor/diario/registro_diario/registro_diario", $data);
    }

    /**
     * Retorna a view que gera a grid com o resultado do semestre.
     */
    function gridResultadoRegistro() {
        $periodo = $this->session->userdata('SCL_SSS_USU_PERIODO');
        $turma = $this->input->post("turma");
        $aluno = $this->input->post("aluno");

        $registros = $this->registroDiario->listaRegistrosDiarios($periodo, $aluno);
        

        $data = array(
            'registros' => $registros
        );
  
        $this->load->view("professor/diario/registro_diario/grid-resultado-registros", $data);
    }
    
    function cadastrar(){
        //PARAMENTROS PARA CARREGAR A LISTA DE TURMAS DO PROFESSOR
        $professor = $this->session->userdata('SCL_SSS_USU_PCODIGO');
        $periodo = $this->session->userdata('SCL_SSS_USU_PERIODO');
           
        $data = array(
            //'turmas' => $this->turmaProfessor->listaDisciplinasRegular($professor, $periodo)
            'turmas' => $this->turmaProfessor->listaTurmasRegularDoDia($professor, $periodo)
        );
        $this->load->view('professor/diario/registro_diario/novo_registro', $data);
    }

    function editar(){
        
        $cd_registro = $this->input->get("id");
        $professor = $this->session->userdata('SCL_SSS_USU_PCODIGO');
        $periodo = $this->session->userdata('SCL_SSS_USU_PERIODO');
            
        $data = array('registro' => $this->registroDiario->registroByID($cd_registro),
                'turmas' => $this->turmaProfessor->listaTurmasRegular($professor, $periodo),);
        
        $this->load->view('professor/diario/registro_diario/novo_registro', $data);
    }

    function visualizar(){
        
        $cd_registro = $this->input->get("id");
            
        $data = array('registro' => $this->registroDiario->registroByID($cd_registro));
        
        $this->load->view('professor/diario/registro_diario/visualizar_registro', $data);
    }

    
    function do_salvar() {
        
        $item = $this->input->post('aluno');
        
        echo 'item '.$item;
        
        
        $cd_registro = (($this->input->post('cd_registro')=='')? 0 : $this->input->post('cd_registro')); 
        
        foreach ($item as $l) {
            $dados = array(
            'aluno' => $l,
            'periodo' => $this->input->post('periodo'),
            'turma' => $this->input->post('turma'), 
            'descricao' => $this->input->post('descricao'),
            'professor' => $this->session->userdata('SCL_SSS_USU_CODIGO'),
            'cd_registro' => $cd_registro);
             
            echo 'string 1';
                //var_dump($dados);exit();

            if($cd_registro==0){
                $registro = $this->registroDiario->cadastrarRegistro($dados);
                $this->send_email($dados);  
            }else{   
                echo 'string 2';             
                $registro = $this->registroDiario->editarRegistro($dados);
                $this->send_email($dados);  
            }
            if($registro == 'erro'){
                $this->session->set_flashdata('msgRegistro', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>O registro não pôde ser salvo!</div>');

                //set_msg('msgRegistro', 'O registro não pôde ser salvo', 'erro');
            } else{
                $this->session->set_flashdata('msgRegistro', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Registro salvo com sucesso!</div>');

              //  set_msg('msgRegistro', 'Registro salvo com sucesso', 'sucesso');
            }
        }
       
        //redirect(base_url('index.php/professor/registro_diario'), 'refresh');
    }

    
    
    function send_email($dados)
    {            
        $registros = $this->registroDiario->verificaCoordenacao($dados);
        $professor = $registros['PROFESSOR'];
        $alunoNome = $registros['ALUNO'];

		$mensagem = "CENTRO EDUCACIONAL SÉCULO".br().br();        
        $mensagem .= "Menagem: "."Informamos a abertura de novo registro diário".br().br();
        $mensagem .= "Professor(a): ".$professor.br().br();
        $mensagem .= "Aluno(a): ".$alunoNome.br().br();
        $mensagem .= "Turma: ".$dados['turma'].br().br();
        $mensagem .= "Atenciosamente,".br().br();
        $mensagem .= "Departamento de T.I.".br().br();
        $mensagem .= "E-mail: "."sistema.ti@seculomanaus.com.br".br().br();

		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'sistema.ti@seculomanaus.com.br';
		$config['smtp_pass'] = 'sistema@2018*';
		$config['protocol'] = 'smtp';
		$config['validate'] = TRUE;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";


		$this->load->library('email', $config);

		$this->email->from('sistema.ti@seculomanaus.com.br', 'Século');
        
        if(isset($registros))
        {
            
            $pedagogico = $registros['PEDAGOGICO'];
            $extra =  $registros['EXTRA'];            
            $to='';

            if($pedagogico == 33 || $pedagogico == 3)
            {
                //$to='coordenacao.fund2medio@seculomanaus.com.br';                
                $to='leon.junior@seculomanaus.com.br,klinger.santos@seculomanaus.com.br';                
            }else if($pedagogico == 1 ){
                $to='coordenacao.infantil@seculomanaus.com.br';
            }else if($pedagogico == 2){
                $to='coordenacao.fund1@seculomanaus.com.br';
            }

            if($row->extra == 19){ $to = $to.',coordenacao.esportes@seculomanaus.com.br,coordenacao.musica@seculomanaus.com.br';}

            $this->email->to($to);
        }
        
		$this->email->subject('Novo Registro Diário');
		$this->email->message($mensagem);
		
		if ($this->email->send()) 
		{
			redirect(base_url('index.php/professor/registro_diario'), 'refresh');
		}
		else {
		 print_r($this->email->print_debugger());
		}  
        
    }

}
