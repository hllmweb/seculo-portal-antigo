<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Impressao extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('desenvolvimento/acesso_model', 'acesso', TRUE);
        $this->load->model('administrativo/administrativo_model', 'admin', TRUE);

        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session','encrypt'));
    }

    function usuario() {

        $parametro = array('usuario' => base64_decode($this->input->get_post('token')),
                           'operacao' => 'LP'
        );
        $data = array(
                      'titulo' => "Relatório de Permissões de Usuário",
                      'listar' => $this->acesso->usuario($parametro),
                      );
        $html = $this->load->view('impressao/acesso/usuario', $data, true);
        // include_once APPPATH . '/third_party/mpdf/mpdf.php';
        // $mpdf = new mPDF();

            $configPage = [
                        'mode' => 'utf-8',
                        'format' => 'A4',
                        'margin_left'=>0,
                        'margin_right'=>0,
                        'margin_top'=>5,
                        'margin_bottom'=>0,
                        'margin_header'=>0,
                        'margin_footer'=>0,
                        'orientation' => 'P'
                  ];
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->shrink_tables_to_fit = 1;
            $mpdf->keep_table_proportions = true;
            // $mpdf->debug = true;
            // $mpdf->SetDisplayMode('fullpage');
            // $mpdf->WriteHTML($html);
            // $mpdf->Output('boletox', 'I');


        $mpdf->SetHTMLHeader($this->load->view('impressao/header', $data, true));
        $mpdf->AddPage($configPage); // margin footer
        $mpdf->SetDisplayMode('fullpage');

        $mpdf->SetHTMLFooter($this->load->view('impressao/footer', $data, true));
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}
