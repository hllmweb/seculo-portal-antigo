<?php $this->load->view('layout/header'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#modals').modal({});
    });
</script>

<?php
foreach ($noticias as $n):

    if ($n['CD_TIPO'] == 1):
        $eventos[] = $n;
    endif;

    if ($n['CD_TIPO'] == 2):
        $cardapio[] = $n;
    endif;

    if ($n['CD_TIPO'] == 3):
        $simulado[] = $n;
    endif;

    if ($n['CD_TIPO'] == 4):
        $reunioes[] = $n;
    endif;

    if ($n['CD_TIPO'] == 5):
        $passeios[] = $n;
    endif;

    if ($n['CD_TIPO'] == 6):
        $sabado[] = $n;
    endif;

    if ($n['CD_TIPO'] == 7):
        $calendarioAval[] = $n;
    endif;

    if ($n['CD_TIPO'] == 9):
        $manuais[] = $n;
    endif;

    if ($n['CD_TIPO'] == 11):
        $material[] = $n;
    endif;

    if ($n['CD_TIPO'] == 13):
                $calendarioAca[] = $n;
    endif;


endforeach;
?>

<div id="content">
    <div class="row">  
        

<?php if (count($calendarioAca) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion13" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Calendario Acadêmico <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion13">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($calendarioAca as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

        
<?php if (count($eventos) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion1" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Eventos e Comunicados <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion1">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($eventos as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
        


<?php if (count($cardapio) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion2" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Cardápio Semanal <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion2">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($cardapio as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>        
        
        

<?php if (count($simulado) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion3" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Simulados <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion3">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($simulado as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

        

<?php if (count($reunioes) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion4" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Reuniões / Escola de Pais <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion4">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($reunioes as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

        

<?php if (count($passeios) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion5" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Passeios / Visitas Técnicas <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion5">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($passeios as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>        
        

<?php if (count($sabado) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion6" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Sábado Letivo <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion6">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sabado as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
        

<?php if (count($calendarioAval) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion7" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Calendário de Avaliações <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion7">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($calendarioAval as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
        

<?php if (count($manuais) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion9" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Manuais <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion9">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($manuais as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>        
        

<?php if (count($material) > 0): ?>
    <div class="col-sm-6">
        <div class="panel-group accordion-aluno-opcoes">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#accordion11" data-parent=".accordion-aluno-opcoes" data-toggle="collapse">
                            <i class="fa fa-book"></i> Materiais Didáticos <i class="fa fa-angle-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="accordion11">
                    <div class="panel-body"> 
                        <div id="taskId" class="task-list">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" id="gridview4" name="gridview4">
                                <thead>
                                    <tr>
                                        <th>Publicado em:</th>
                                        <th style="display: none"></th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($material as $n) {
                                        ?>
                                        <tr>
                                            <td><?= $n['DT_PUBLICACAO'] ?></td>
                                            <td style="display: none"><?= $n['ID_NOTICIA'] ?></td>
                                            <td style="font-size:11px; text-transform:uppercase">
                                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/portal/application/upload/noticia/<?= $n['CHAMADA'] ?>" target="_blank"><?= substr($n['TITULO'], 0, 80) ?>...</a></td> 
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>        
        
    </div>
</div>
        
        <?php $this->load->view("inicio/modal-aviso"); ?>
        
        <script>
        
            $('#gridview').dataTable({
                "sPaginationType": "full_numbers",
                "oLanguage": {
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "sLengthMenu": "Mostrar por página _MENU_ ",
                    "sInfoFiltered": "(filtrado de um total de _MAX_ registros)",
                    "sInfoEmpty": "Registro não encontrado",
                    "sZeroRecords": "Não há registro",
                },
                "aaSorting": [[1, "desc"]],
            });
            $('#gridview_wrapper .dataTables_filter input').attr('placeholder', 'Procurar...');
        </script> 
        <?php $this->load->view('layout/footer'); ?>


