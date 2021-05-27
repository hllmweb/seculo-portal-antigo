<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=SCL_DEF_TITULO?></title>
<link href="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/css/bootstrap_.css" rel="stylesheet">
<link href="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/css/signin.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/html5shiv.js"></script>
      <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="margin:5% 12%">
<div class="col-md-4"></div>  
<div class="col-md-3">  
   <div class="col-md-12"><h2 class="form-signin-heading"><img src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/images/logo.png" width="100%" /></h2></div><br>  
   <?php 
   echo form_open('restrito',"class='form-signin'"); 
   echo form_label("Usuário: ");
   echo form_input('sclusuario','','class="form-control"');
   echo br();
   echo form_label("Senha: ");
   echo form_password('sclsenha','','class="form-control"');
   echo br();
   echo form_submit("","Login","class='btn btn-lg btn-primary btn-block'");
   echo form_close();
   echo validation_errors(); ?>
 </div>
</div>
</body>
</html>
<? exit?>