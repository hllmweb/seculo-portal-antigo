<? $this->load->view('header');?>
<style>
.right {
	border: none;
	background: none;
	text-align: right;
}
.left {
	border: none;
	background: none;
	text-align: left;
}
.justify {
	border: none;
	background: none;
	text-align: justify;
}
</style>
<? if(validation_errors() == true) { ?>
<script type="text/javascript">$(window).load(function(){$('#frmMensagem').modal('show');});</script>
<? } ?>
<div class="row" style="margin:80px auto; width:99%">

  <div class="col-sm-12">
    <? if(isset($fl)){ ?>
    <div class="col-sm-9">
    <div class="tab-content" style="background:#FFF">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#ensino" data-toggle="tab" > <strong>PLANO DE ENSINO</strong> </a></li>
        <? if(isset($plano)){ ?>
        <li class=""><a href="#conteudo" data-toggle="tab"> <strong>CONTEÚDO </strong></a></li>
        <? } ?>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="ensino">
          <form action="<?=SCL_RAIZ?>/professor/plano/" method="post" enctype="multipart/form-data" id="frmPlanoEnsino" name="frmPlanoEnsino" accept-charset="utf-8">
            <div class="panel panel-default">
              <input name="plano" type="hidden" id="plano" value="<? if(isset($plano)) echo $plano;?>" />
              <input name="nmcurso" type="hidden" id="nmcurso" value="<?=$curso?>" />
              <input name="sclacao" type="hidden" id="sclacao" value="<? if(!isset($plano)) echo "inserir"; else echo "editar"; ?>" />
              <input name="nmdisciplina" type="hidden" id="nmdisciplina" value="<?=$disciplina?>" />
              <input name="curso" type="hidden" id="curso" value="<?=$cd_curso?>"  />
              <input name="disciplina" type="hidden" id="disciplina" value="<?=$cd_disciplina?>" />
              <input name="periodo" type="hidden" id="periodo" value="<?=$periodo?>" />
              <div class="list-group">
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Curso:</strong>
                  <?=$cd_curso." - ".$curso?>
                </li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Disciplina:</strong>
                  <?=$cd_disciplina." - ".$disciplina?>
                </li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Professor:</strong>
                  <?=$this->session->userdata('SCL_SSS_USU_CODIGO')." - ".$this->session->userdata('SCL_SSS_USU_NOME')?>
                </li>
                <li class="list-group-item"><strong>C.H. Semanal:</strong>
                  <?=$chsemanal?>
                  horas</li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>C.H. Total:</strong>
                  <?=$chtotal?>
                  horas</li>
                <li class="list-group-item active">EMENTA</li>
                <li class="list-group-item">
                  <textarea name="sclementa" cols="2" <? if(isset($plano)) echo 'readonly="readonly"';?>  rows="10" style="width:100%" class="justify" id="sclementa"><? if(isset($ementa)) echo $ementa;?>
</textarea>
                </li>
                <li class="list-group-item active">METODOLOGIA</li>
                <li class="list-group-item">
                  <textarea name="sclmetodologia" cols="2" <? if(isset($plano)) echo 'readonly="readonly"';?> rows="10" style="width:100%" class="justify" id="sclmetodologia"><? if(isset($metodologia)) echo $metodologia;?></textarea>
                </li>
                <li class="list-group-item active">AVALIAÇÃO</li>
                <li class="list-group-item">
                  <textarea name="sclavaliacao" cols="2"<? if(isset($plano)) echo 'readonly="readonly"';?>  rows="10" style="width:100%" class="justify" id="sclavaliacao"><? if(isset($avaliacao)) echo $avaliacao;?></textarea>
                </li>
                <li class="list-group-item active">BIBLIOGRAFIA BÁSICA</li>
                <li class="list-group-item">
                  <textarea name="sclbibliobas" cols="2" <? if(isset($plano)) echo 'readonly="readonly"';?> rows="10" style="width:100%" class="justify" id="sclbibliobas"><? if(isset($biblio_bas)) echo $biblio_bas;?></textarea>
                </li>
                <li class="list-group-item active">BIBLIOGRAFIA COMPLEMENTAR</li>
                <li class="list-group-item">
                  <textarea name="sclbibliocomp" cols="2" <? if(isset($plano)) echo 'readonly="readonly"';?>  rows="10" style="width:100%" class="justify" id="sclbibliocomp"><? if(isset($biblio_comp)) echo $biblio_comp;?></textarea>
                </li>
                <li class="list-group-item right">
                <? if(isset($plano)){  ?>
                  <a data-toggle="modal" href="#frmDeletar" class="btn btn-danger">Excluir Plano</a>
                 <? } ?>
                  <a href="javascript:void(0)" class="btn btn-<? if(!isset($plano)) echo "success"; else echo "primary"; ?>" onclick="document.forms['frmPlanoEnsino'].submit(); return true;"><? if(!isset($plano)) echo "Salvar Plano"; else echo "Editar Plano"; ?></a> </li>
              </div>
            </div>
          </form>
        </div>
        <? if(isset($plano)){ ?>
        <div class="tab-pane fade" id="conteudo">
          <form action="<?=SCL_RAIZ?>/" method="post" enctype="multipart/form-data" id="frmmensagem">
          <a href="<?=SCL_RAIZ?>/professor/conteudo/" data-toggle="modal" class="btn btn-success">Adicionar Conteúdo</a>
            <input name="tp_mensagem" type="hidden" id="tp_mensagem" value="" />
            <input name="validador" type="hidden" id="validador" value="1" />
            <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table table-striped">
              <thead>
                <tr>
                  <th width="2%"></th>
                  <th width="10%">MÊS</th>
                  <th width="4%">AULAS</th>
                  <th width="42%">OBJETIVO</th>
                  <th width="42%">CONTEÚDO</th>
                </tr>
              </thead>
              <tbody style="font-size:10px">
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="5"></td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><strong>NÃO HÁ CONTEÚDO CADASTRADO</strong></td>
                </tr>
              <tfoot>
              </tfoot>
                </tbody>
            </table>
          </form>
        </div>
        <? } ?>
        </div>
      </div>
    </div>
    <? } ?>
    <div class="col-sm-3">
      <? if(count($turma) > 0){ ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Sua(s) Disciplina(s)</h3>
        </div>
        <div class="list-group">
          <li class="list-group-item">
            <?
		 foreach($turma as $row){
		?>
            <form action="<?=SCL_RAIZ?>/professor/plano/" method="post" name="form<?=$row->CD_DISCIPLINA.$row->CD_CURSO?>">
              <input name="plano" type="hidden" id="plano" value="<?=$row->CD_PLANO?>" />
              <input name="curso" type="hidden" id="curso" value="<?=$row->CD_CURSO?>" />
              <input name="nmcurso" type="hidden" id="nmcurso" value="<?=$row->NM_CURSO?>" />
              <input name="nmdisciplina" type="hidden" id="nmdisciplina" value="<?=$row->NM_DISCIPLINA?>" />
              <input name="periodo" type="hidden" id="periodo" value="<?=$row->PERIODO?>" />
              <input name="disciplina" type="hidden" id="disciplina" value="<?=$row->CD_DISCIPLINA?>" />
              <a href="javascript:void(0)" class="list-group-item" onclick="document.forms['form<?=$row->CD_DISCIPLINA.$row->CD_CURSO?>'].submit(); return true;"> <span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;
              <?=$row->PERIODO." - ".$row->NM_DISCIPLINA?>
              <br>
              <span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;
              <?=$row->CD_CURSO." - ".$row->NM_CURSO ?></a>
            </form>
            <? if(!empty($row->CD_PLANO)) $perc='50';else$perc='0';?>
            <div class="progress progress-striped active">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50" style="width: <?=$perc?>%"> <span class="sr-only"><?=$perc?>%</span> <?=$perc?>% </div>
            </div>
            <? } ?>
          </li>
        </div>
      </div>
      <? } ?>
    </div>
  </div>
</div>

<? 
if(isset($plano)){ 
/********************* INICIO MODA DE DELETAR ***************/
?>
<div id="frmDeletar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="frmDeletarLabel" aria-hidden="true" style="margin:80px 25%; width:50%">
  <div class="modal-dialog">
    <div class="modal-content alert-warning">
    <form action="<?=SCL_RAIZ?>/professor/plano/" method="post" enctype="multipart/form-data" id="frmPlanoDeletar" name="frmPlanoDeletar" accept-charset="utf-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <input name="sclacao" type="hidden" id="sclacao" value="deletar" />
        <input name="plano" type="hidden" id="plano" value="<? if(isset($plano)) echo $plano;?>" />
              <input name="nmcurso" type="hidden" id="nmcurso" value="<?=$curso?>" />
              <input name="nmdisciplina" type="hidden" id="nmdisciplina" value="<?=$disciplina?>" />
              <input name="curso" type="hidden" id="curso" value="<?=$cd_curso?>"  />
              <input name="disciplina" type="hidden" id="disciplina" value="<?=$cd_disciplina?>" />
              <input name="periodo" type="hidden" id="periodo" value="<?=$periodo?>" />
        <h4 class="modal-title" id="frmMensagemLabel"><strong>Deletar Plano de Ensino</strong></h4>
      </div>
      <div class="modal-body">
        <div style="width:90%; margin:0 5%"> 
          <div class="list-group">
		        <li class="list-group-item active">Dados do Plano de Ensino </li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Curso:</strong>
                  <?=$cd_curso." - ".$curso?>
                </li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Disciplina:</strong>
                  <?=$cd_disciplina." - ".$disciplina?>
                </li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Professor:</strong>
                  <?=$this->session->userdata('SCL_SSS_USU_CODIGO')." - ".$this->session->userdata('SCL_SSS_USU_NOME')?>
                </li>
                <li class="list-group-item"><strong>C.H. Semanal:</strong>
                  <?=$chsemanal?>
                  horas</li>
                <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>C.H. Total:</strong>
                  <?=$chtotal?>
                  horas</li>
                </div>          
        </div>
        <!-- /.modal-dialog --> 
      </div>
      </form>
    </div>
    <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
          <a href="javascript:void(0)" class="btn btn-danger" onclick="document.forms['frmPlanoDeletar'].submit(); return true;">Deletar Plano</a>
      </div>
  </div>
</div>
<? } ?>

<? 
/******************** FIM MODAL DELETAR *********************************/

if(validation_errors() == true) { 

/********************* INICIO MODA DE ERROS ***************/
?>
<div id="frmMensagem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="frmMensagemLabel" aria-hidden="true" style="margin:80px 25%; width:50%">
  <div class="modal-dialog">
    <div class="modal-content alert-danger">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="frmMensagemLabel">Erro de Envio</h4>
      </div>
      <div class="modal-body">
        <div style="width:90%; margin:0 5%"> 
          <?=validation_errors();?>
        </div>
        <!-- /.modal-dialog --> 
      </div>
      
    </div>
    <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
  </div>
</div>

<? 
/******************** FIM MODAL DE ERROS *********************************/
} $this->load->view('footer');  exit?>
