<?php $this->load->view('layout/header'); ?>
<script>
//excluir professor
function excluir_parceiro(id) { 
    var url="<?=SCL_RAIZ?>site/parceiros/excluir/"+id;
    window.location.href=url;
}  
</script>
<div id="content">
    <div class="row">
        <div class="col-md-12">
            <?php
            echo get_msg('msgok');
            echo get_msg('msgerro');
            ?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                      Lista de Parceiros
                    </h3>
                    <ul class="nav nav-pills">
                        <li>
                            <a class="active " href="<?=SCL_RAIZ?>site/parceiros/cadastrar_parceiro">Novo Parceiro</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table border="1" id="listar" class="table table-bordered table-responsive table-hover">
                        <thead class="well">
                            <tr>
                                <td>ID</td>
                                <td>Nome</td>
                                <td>Titulo</td>
                                <td style="width:100px"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listar as $row) { ?>
                                <tr style="font-size:12px">
                                    <td><?= $row['CD_PARCEIRO'] ?></td>
                                    <td><?= $row['NOME'] ?></td>
                                    <td><?= $row['TITULO'] ?></td>
                                    <td style="width:100px;" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-default" data-toggle="tooltip" title="" href="<?=SCL_RAIZ?>site/parceiros/editar?cd=<?=base64_encode($row['CD_PARCEIRO'])?>" data-original-title="Editar Parceiro">
                                                <i class="fa fa-edit"></i>  
                                            </a>
                                        </div>
                                        
                                        <div class="btn-group">
                                            <a data-toggle="modal" class="btn btn-default" data-toggle="tooltip" title="" href="#delete<?=$row['CD_PARCEIRO']?>" data-original-title="Excluir Parceiro">
                                                <i class="fa fa-trash-o"></i>  
                                            </a>
                                        </div>
                                        
                                        <div class="modal modal-alert modal-danger fade in" id="delete<?=$row['CD_PARCEIRO']?>" tabindex="-1" role="dialog" style="display: none;">  
                                            <div class="modal-dialog" style="width:30%">
                                                <div class="modal-content">
                                                    <div class="modal-header btn-danger">
                                                        <i class="fa fa-times-circle"></i> Excluir
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Deseja realmente excluir o parceiro?</p>
                                                        <p>A Parceiro <label><?php echo $row['NOME']?></label></p>
                                                        <p>O Processo n??o ter?? volta.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancelar</button>
                                                        <a  class="btn btn-danger" onClick="excluir_parceiro(<?=$row['CD_PARCEIRO']?>);"><i class="fa fa-check-circle"></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?= SCL_JS ?>jquery.dataTables.min.js"></script> 
<script src="<?= SCL_JS ?>jquery.dataTables.bootstrap.js"></script> 
<script>
    $('#listar').dataTable({
        "sPaginationType": "full_numbers"
    });
</script>
<? $this->load->view('layout/footer'); ?>
