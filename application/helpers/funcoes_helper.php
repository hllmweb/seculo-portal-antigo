<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function init_sistema() {
    $CI =& get_instance();
    $CI->load->library(array('form_validation','session','tracert','email','upload','sistema'));
    $CI->load->helper(array('url','form','html','directory','file','funcoes'));
    
    //carregamento dos models
}
//mostra erros de validação em forms
function erros_validacao(){
    if (validation_errors()) echo '<div class="alert alert-danger">'.validation_errors().'</div>';
}

//define uma mensagem para ser exibida na próxima tela carregada
function set_msg($id='msgerro', $msg=NULL, $tipo='erro'){
    $CI =& get_instance();
    switch ($tipo):
            case 'erro': 
                    $CI->session->set_flashdata($id, '<div class="alert alert-danger">'.$msg.'</div>');
                    break;
            case 'sucesso': 
                    $CI->session->set_flashdata($id, '<div class="alert alert-success">'.$msg.'</div>');
                    break;
            case 'warning': 
                    $CI->session->set_flashdata($id, '<div class="alert alert-warning">'.$msg.'</div>');
                    break;
            default: 
                    $CI->session->set_flashdata($id, '<div class="alert alert-danger">'.$msg.'</div>');
                    break;
    endswitch;
}

//verifica se existe uma mensagem para ser exibida na tela atual
function get_msg($id, $printar=TRUE){
    $CI =& get_instance();
    if ($CI->session->flashdata($id)):
            if ($printar):
                echo $CI->session->flashdata($id);
            else:
                return $CI->session->flashdata($id);
            endif;
    endif;
    return FALSE;
}

//gera um breadcrumb com base no controller atual
function breadcrumb() {
   $CI =& get_instance();
   $CI->load->helper('url');
   $classe = ucfirst($CI->router->class);
   if($classe == 'Inicio'){
       $classe = anchor($CI->router->class, 'Dashboard');
   }else{
       $classe = anchor($CI->uri->segment(1)."/".$CI->router->class, $classe);
   }
   $metodo = ucwords(str_replace('_', ' ', $CI->router->method));
   if($metodo && $metodo != 'Index'){
       $metodo = " &raquo; ".anchor($CI->uri->segment(1)."/".$CI->router->class."/".$CI->router->method,$metodo); 
   }else{
       $metodo = " ";
   }
   $bread .= '<ol class="breadcrumb"><li>';
   $bread .= anchor('inicio', 'Inicio');
   $bread .= ' &raquo; ';
   $bread .= $classe.$metodo;
   $bread .= '</ol>';
   return $bread; #' '.anchor('inicio', 'Inicio').' &raquo; '.$classe.$metodo. '</ol>';
    
}

//mascara para string
function mascara_string($mascara, $string) {
    $string = str_replace(" ", "", $string);
    for ($i = 0; $i < strlen($string); $i++) {
        $mascara[strpos($mascara, "#")] = $string[$i];
    }
    return $mascara;
}

function get_rnd_iv($iv_len){
   $iv = '';
   while ($iv_len-- > 0) {
      $iv .= chr(mt_rand() & 0xff);
   }
   return $iv;
}
      
function md5_encrypt($plain_text, $password, $iv_len = 16){
 //  $plain_text .= "x13";
   $n = strlen($plain_text);
//   if ($n % 16) $plain_text .= str_repeat("{TEXTO}", 16 - ($n % 16));
   if ($n % 16) $plain_text .= str_repeat( 16 - ($n % 16));
   $i = 0;
   $enc_text = get_rnd_iv($iv_len);
   $iv = substr($password ^ $enc_text, 0, 512);
   while ($i < $n) {
      $block = substr($plain_text, $i, 16) ^ pack('H*', md5($iv));
      $enc_text .= $block;
      $iv = substr($block . $iv, 0, 512) ^ $password;
      $i += 16;
   }

   return base64_encode($enc_text);
}

function md5_decrypt($enc_text, $password, $iv_len = 16){
   $enc_text = base64_decode($enc_text);
   $n = strlen($enc_text);
   $i = $iv_len;
   $plain_text = '';
   $iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
   while ($i < $n) {
      $block = substr($enc_text, $i, 16);
      $plain_text .= $block ^ pack('H*', md5($iv));
      $iv = substr($block . $iv, 0, 512) ^ $password;
      $i += 16;
   }
   return preg_replace('/\x13\x00*$/', '', $plain_text);
}

function setUri($string){
    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';	
    $string = utf8_decode($string);
    $string = strtr($string, utf8_decode($a), $b);
    $string = strip_tags(trim($string));
    $string = str_replace(" ","-",$string);
    $string = str_replace(array("-----","----","---","--"),"-",$string);
    return strtolower(utf8_encode($string));
}

function formato_data($data){
    return date('d/m/Y',strtotime(implode("-",array_reverse(explode("/",$data)))));
}

function formata_data($data,$tipo){
    
    switch ($tipo) {
        case 'br': return date('d/m/Y',strtotime(implode("-",array_reverse(explode("/",$data)))));  break;
        case 'en': return date('Y-d-m',strtotime(implode("-",array_reverse(explode("/",$data)))));  break;
        
        default:
            break;
    }
}


function remover_caracter($palavra){
    return ereg_replace("[^a-zA-Z0-9_]", "", strtr($palavra, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
}