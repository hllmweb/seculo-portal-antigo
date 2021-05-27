<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
        <meta name="description" content="Sistema Acadêmico Século">
        <title><?= SCL_DEF_TITULO .' - '. FLG_BANCO?></title>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-4 col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
                    <section id="middle">
                        <div id="content" class="signin-page">
                            <div class="panel-group" id="seculo-page">
                                <div class="panel panel-outline panel-no-padding">
                                    <div id="signin" class="panel-collapse collapse in">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><img src="<?= SCL_IMG ?>login.png"> </h3>
                                        </div>
                                        <div class="panel-body">
                                            <form method="post" action="<?= base_url('restrito') ?>" id="form-login" class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                            <input autocomplete="off" type="text" id="sclusuario" name="sclusuario" class="form-control input-lg" placeholder="Login">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                            <input autocomplete="off" type="password" id="sclsenha" name="sclsenha" class="form-control input-lg" placeholder="Password">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <?= validation_errors(); ?>
                                                        <p class="align-center">
                                                            <a data-toggle="collapse" data-parent="#seculo-page" href="#recuperar">
                                                                <small>Esqueceu a Senha?</small>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-outline panel-no-padding">
                                    <div id="recuperar" class="panel-collapse collapse">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Recuperar a Senha</h3>
                                        </div>
                                        <div class="panel-body">

                                            <form id="frmrecuperar" method="POST" class="form-horizontal form-bordered form-control-borderless display-none"  style="display: block;">

                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <label>Seu Login</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                            <input
                                                                autocomplete="off"
                                                                type="text"
                                                                id="LoginRecuperar"
                                                                name="LoginRecuperar"
                                                                class="form-control input-lg"
                                                                placeholder="Login"
                                                            >
                                                            <span class="input-group-addon">
                                                                <? if($sms > 0){ ?>
                                                                    <button
                                                                        data-item="Celular"
                                                                        type="button"
                                                                        class="btn btn-info"
                                                                        >
                                                                       <i class="fa fa-phone"></i>
                                                                    </button>
                                                                <? } ?>
                                                                <button style="display: none" class="btn btn-warning">
                                                                   <i class="fa fa-envelope-o"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="recuperar_senha">
                                                    <div class="col-xs-12">
                                                        <label>Token</label> <small>(Código Token enviado para seu email ou celular.)</small>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-barcode"></i>
                                                            </span>
                                                            <input
                                                                autocomplete="off"
                                                                type="text"
                                                                id="RCPToken"
                                                                name="RCPToken"
                                                                class="form-control input-lg"
                                                                placeholder="Token"
                                                            >
                                                        </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <label>Nova Senha</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-key"></i>
                                                                </span>
                                                                <input
                                                                    autocomplete="off"
                                                                    type="password"
                                                                    id="RCPSenha"
                                                                    name="RCPSenha"
                                                                    class="form-control input-lg"
                                                                    placeholder="**********"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <label>Repetir Nova Senha</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-key"></i>
                                                                </span>
                                                                <input
                                                                    autocomplete="off"
                                                                    type="password"
                                                                    id="RCPValida"
                                                                    name="RCPValida"
                                                                    class="form-control input-lg"
                                                                    placeholder="**********"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div id="recuperar_senhas">

                                                            <div class="form-group form-actions">
                                                                <div class="col-xs-12 text-center border-top">
                                                                    <button
                                                                        data-item="MudarSenha"
                                                                        class="btn btn-warning btn-lg"
                                                                        type="button"
                                                                    >
                                                                       <i class="fa fa-lock"></i> Mudar Senha
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            </div>

                                                    </div>
                                                    <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <p class="align-center">
                                                                    <a data-toggle="collapse" data-parent="#seculo-page" href="#signin">
                                                                        <small>Voltar ao  Login! </small>
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <ul class="list-inline">
                            <li>&copy; <a>Portal Educacional - Século</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 text-right">
                        <?=FLG_BANCO?>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
<? exit; ?>
