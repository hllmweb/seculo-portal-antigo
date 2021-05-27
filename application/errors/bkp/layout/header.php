<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?=SCL_DEF_TITULO?></title>
<!-- Bootstrap core CSS -->
<link href="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/css/bootstrap_.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/css/bootstrap-theme.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/html5shiv.js"></script>
      <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/jquery-1.7.2.min.js" ></script>
<script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/jquery.tablesorter.min.js"></script>
<script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/jquery.tablesorter.pager.js"></script>
<link rel="stylesheet" type="text/css" href="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/modal/jquery.fancybox.css?v=2.0.6" media="screen" />
<script type="text/javascript" src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/modal/jquery.fancybox.js?v=2.0.6"></script>

</head>
<body class="common-home">
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
       <a href="<?=SCL_RAIZ?>/colegio/principal"><img src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/images/logo.png" /></a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
       </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> PRINCIPAL <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=SCL_RAIZ?>/mensagem">Caixa Postal</a></li>
            <li><a href="<?=SCL_RAIZ?>/colegio/contato/">Fale Conosco</a></li>
            <li><a href="<?=SCL_RAIZ?>/arquivo">Meus Arquivos</a></li>
            <li><a href="<?=SCL_RAIZ?>/perfil">Altera Senha</a></li>
          </ul>
        </li>
        
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> SECRETARIA <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="./caixa">Caixa Postal</a></li>
            <li><a href="<?=SCL_RAIZ?>/historico/aluno/">Histórico</a></li>
            <li><a href="<?=SCL_RAIZ?>/perfil">Dados Cadastrais</a></li>
            <li><a href="<?=SCL_RAIZ?>/biblionet">Biblionet</a></li>
            <li><a href="<?=SCL_RAIZ?>/certificadoextensao">Certificado Extensão</a></li>
            <li><a href="<?=SCL_RAIZ?>/sranet">S.R.A. Net</a></li>
            <li><a href="<?=SCL_RAIZ?>/atividadecomplementar">Atividades Complementares</a></li>
          </ul>
        </li>
        
        <? if($this->session->userdata('SCL_SSS_USU_TIPO') == 30){ ?>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-usd"></span> FINANCEIRO <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=SCL_RAIZ?>/mensalidade/aluno/">Mensalidade</a></li>
            <li><a href="<?=SCL_RAIZ?>/mensalidade/contrato/">Contratos</a></li>
            <li><a href="<?=SCL_RAIZ?>/mensalidade/checklist">Documentos do Aluno</a></li>
          </ul>
        </li>
        <? } ?>
         <? if($this->session->userdata('SCL_SSS_USU_TIPO') == 20){ ?>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-usd"></span> PROFESSOR <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=SCL_RAIZ?>/plano_ensino/">Plano de Ensino</a></li>
            <li><a href="<?=SCL_RAIZ?>/professor/turma/">Frequência</a></li>
            <li><a href="<?=SCL_RAIZ?>/professor/nota/">Notas</a></li>
          </ul>
        </li>
        <? } ?>
        <li> <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-star"></span> MONITORIA</a></li>
        <li class="active"><a href="<?=SCL_RAIZ?>/restrito/logout/"><span class="glyphicon glyphicon-off"></span> SAIR</a></li>
      </ul>
    </div>
  </div>
</div>