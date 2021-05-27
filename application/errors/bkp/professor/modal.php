<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h3><?=$titulo;?></h3>
</div>
<div class="modal-body">
 <form action="<?=SCL_RAIZ?>/professor/" method="post" enctype="multipart/form-data" id="frmPlanoEnsino" name="frmPlanoEnsino" accept-charset="utf-8">
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
     <?=validation_errors(); ?>
</div>
<div class="modal-footer">
	<a class="btn btn-success" onclick="$('.modal-body > form').submit();">Salvar Dados</a>
	<a class="btn btn-warning" data-dismiss="modal">Cancelar</a>
</div>
<? exit;?>