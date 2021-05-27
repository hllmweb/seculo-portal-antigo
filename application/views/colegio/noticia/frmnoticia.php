<?php $this->load->view('layout/header'); ?>
<div id="content">
    <div class="row">
        <div class="col-xs-12">
            <?php
            echo validation_errors();
            echo get_msg('msgok');
            echo get_msg('msgerro');
            ?>
            <div class="panel panel-warning">
                <div class="panel-heading"> 
                    <a class="btn btn-info" href="<?= SCL_RAIZ ?>colegio/noticia/index">Voltar</a>
                </div>

                <form action="<?= SCL_RAIZ ?>colegio/noticia/frmnoticiamanter" method="post" enctype="multipart/form-data" name="formNoticia" id="formNoticia" id="form" >
                    <div class="panel-body">                     
                        <input name="acao" type="hidden" id="acao" value="<?= $acao ?>" />
                        <input name="bt_acao" type="hidden" id="bt_acao" value="<?= $bt_acao ?>" />
                        <input name="bt_cor" type="hidden" id="bt_cor" value="<?= $bt_cor ?>" />
                        <input name="id_noticia" type="hidden" id="bt_cor" value="<?= $codigo ?>" />
                        <div class="col-xs-12">
                            <div class="col-sm-12">
                                <?php
                                echo br();
                                echo form_label("<strong>CÓDIGO: </strong>");
                                echo br();
                                echo form_input('sclcodigo', '' . $codigo . '', 'class="form-control" readonly="readonly"');
                                echo br();
                                echo form_label("<strong>AUTOR: </strong>");
                                echo br();
                                echo form_input('sclautor', '' . $autor . '', 'class="form-control" readonly="readonly"');
                                echo br();
                                echo form_label("<strong>TIPO NOTICIA: </strong>");
                                echo br();
                                #   print_r($not_tipo);
                                ?>
                                <select name="tipo" class="form-control">
                                    <?php
                                    foreach ($not_tipo as $t) {
                                        ?>
                                        <option <?php if ($t['CD_TIPO'] == $tipo) echo "selected"; ?> value="<?= $t['CD_TIPO'] ?>"><?= $t['DC_TIPO'] ?></option>
                                    <?php } ?>
                                </select>
                                <?php
                                echo br();
                                echo form_label("<strong> TÍTULO: </strong>");
                                echo br();
                                ?>
                                <input class="form-control" type="text" value="<?= $scltitulo ?>" name="scltitulo">


                                <?php
                                echo br();
                                echo form_label("<strong> CURSO: (OPCIONAL) </strong>");
                                echo br();
                                ?>
                                <select name="curso" id="curso" class="form-control">
                                    <option value="">Selecione o Curso</option>
                                    <? foreach ($curso as $item) { ?>
                                    <option value="<?= $item['CD_CURSO'] ?>" 
                                        <?php
                                            if($item['CD_CURSO'] == $cd_curso){
                                            echo "selected='selected'"; }
                                            ?> >
                                        <?= $item['NM_CURSO'] ?>
                                        <?= $item->NM_CURSO ?>
                                    </option>
                                    <? } ?>
                                </select>

                                <?php
                                echo br();
                                echo form_label("<strong> SÉRIE: (OPCIONAL) </strong>");
                                echo br();
                                ?>
                                <select name="serie" id="serie" class="form-control" >
                                    <?php
                                    if(!empty($serie)):
                                        foreach ($serie as $s):
                                            extract($s);
                                            if($ORDEM_SERIE == $cd_serie):
                                                $select = "selected='selected'";
                                            else:
                                                $select = "";
                                            endif;
                                        echo "<option {$select} value='{$ORDEM_SERIE}'>{$NM_SERIE}</option>";
                                        endforeach;
                                    else:
                                    ?>
                                    <option value=""></option>
                                    <?php endif; ?>
                                </select>

                                <div class="input-group">
                                    <div class="checkbox">
                                        <label>
                                            <input class="ace" type="checkbox" name="sclstatus" value="1" <?php
                                            if ($sclstatus == 1) {
                                                echo "checked";
                                            } else {
                                                echo "";
                                            }
                                            ?>>
                                            <span class="lbl"> Publicar Notícia?</span>
                                        </label>
                                    </div>

                                    <?php if ($this->session->userdata('SCL_SSS_USU_CODIGO') == 5265) { ?>

                                        <div class="checkbox">
                                            <label>
                                                <input class="ace" type="checkbox" name="sclpopup" value="1" <?php
                                                if ($sclpopup == 1) {
                                                    echo "checked";
                                                } else {
                                                    echo "";
                                                }
                                                ?>>
                                                <span class="lbl"> Destacar noticia em alerta?</span>
                                            </label>
                                        </div>

                                    <?php } ?>
                                </div>
                                <div class="col-xs-3">
                                    <label>DATA INÍCIO</label><br/>
                                    <input class="form-control" type="text" name="dtInicio" id="dtInicio" value="<?= $dtInicio ?>">
                                </div>

                                <div class="col-xs-3">
                                    <label>DATA FIM</label><br/>
                                    <input class="form-control" type="text" name="dtFim" id="dtFim" value="<?= $dtFim ?>">
                                </div>
                                <div class="col-xs-12">
                                    <?php
                                    echo form_label("<strong>ARQUIVO: </strong>");
                                    echo br();
                                    echo form_upload('arquivo', '', 'class="form-control" id="arquivo"');
                                    if ($_GET['acao'] == 'U') {
                                        echo '<span class="text-danger">Só escolha outro arquivo se quizer alterar o anterior.</span>';
                                    }
                                    ?>
                                </div>
                                <br>
                                <br>                    
                            </div>
                        </div>                      
                    </div>

                    <div class="modal-footer">
                        <div class="pull-left"><a href="<?= SCL_RAIZ ?>colegio/noticia/index" class="btn btn-inverse"><i class="fa fa-backward"></i> Cancelar</a></div>
                        <button type="submit" id="btn_frmMensagem" class="btn btn-<?= $bt_cor ?>"> <?= $bt_acao ?> Registro <i class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#dtInicio").datepicker({
        language: 'pt-BR',
        format: 'dd/mm/yyyy'
    });

    $("#dtFim").datepicker({
        language: 'pt-BR',
        format: 'dd/mm/yyyy'
    });

    $('#gridview').dataTable({
        "sPaginationType": "full_numbers"
    });
</script>

<script>

    $(document).ready(function () {

        $("select[name=curso]").change(function () {
            $("select[id=serie]").html('Aguardando série');
            $.post("<?= SCL_RAIZ ?>colegio/colegio/curso_serie", {
                curso: $(this).val()},
            function (valor) {
                $("select[id=serie]").html(valor);
            })
        });

        $("#lTurma").click(function () {
            $("#grd").html('<div class="modal-dialog">.<?= modal_load ?>.</div>');
            $.post("<?= SCL_RAIZ ?>coordenador/professor/notas_turma", {
                turma: $("select[name=turma]").val()
            },
            function (valor) {
                $("#grd").html(valor);
            })
        });

        $("select[name=serie]").change(function () {
            $("select[id=turma]").html('Aguardando turma...');
            $.post("<?= SCL_RAIZ ?>colegio/colegio/serie_turma", {
                curso: $("select[name=curso]").val(),
                serie: $(this).val(),
            }, function (valor) {
                $("select[id=turma]").html(valor);
            })
        });
    });

    $("select[name=turma]").change(
            function () {
                $("select[id=aluno]").html('Aguardando alunos...');
                $.post("<?= SCL_RAIZ ?>colegio/colegio/turma_aluno", {
                    curso: $("select[name=curso]").val(),
                    serie: $("select[name=serie]").val(),
                    turma: $(this).val()
                },
                function (valor) {
                    $("select[id=aluno]").html(valor);
                })
            });

    jQuery(function ($) {
        $('#data').datepicker().on('changeDate', function (ev) {
            $('#data').datepicker('hide');

            var dados = $("#frmfiltro").serialize();
            jQuery.ajax({
                type: "POST",
                url: "<?= SCL_RAIZ ?>coordenador/faltas/filtro",
                data: dados,
                success: function (data)
                {
                    $("#grd").html(data);
                }
            });
            return false;

        });
    });
</script>

<?php $this->load->view('layout/footer'); ?>