<? $this->load->view('header');?>
<div class="row" style="margin:80px auto; width:99%">
  <div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">ALUNO (S)</h3>
      </div>
      <div class="list-group">
        <? 
		if(count($aluno) > 0){
			  foreach($aluno as $row){
		?>
        <form action="<?=SCL_RAIZ?>/mensalidade/boleto/" method="post" name="form<?=$row->CD_ALUNO?>">
          <input name="aluno" type="hidden" id="aluno" value="<?=$row->CD_ALUNO?>" />
          <input name="nome" type="hidden" id="nome" value="<?=$row->NM_ALUNO?>" />
          <a href="javascript:void(0)" class="list-group-item" onclick="document.forms['form<?=$row->CD_ALUNO?>'].submit(); return true;"> 
          <span class="glyphicon glyphicon-user"></span>
          <?=$row->CD_ALUNO ." - ". $row->NM_ALUNO;?>
          </a>
        </form>
        <? } } ?>
      </div>
    </div>
    <? if(isset($boleto)){ ?>
    <div class="panel panel-primary" id="DVMENSALIDADE">
      <div class="panel panel-primary">
        <div class="panel-heading"><strong>MENSALIDADES / BOLETOS /
          <?=$nome?>
          </strong></div>
        <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
          <thead>
            <tr>
              <th>MENSALIDADE</th>
              <th>VENCIMENTO</th>
              <th>VALOR</th>
              <th width="4%"></th>
            </tr>
          </thead>
          <tbody style="font-size:10px">
            <?   
  if(count($boleto) > 0){
	  
     foreach($boleto as $row){ 
  	?>
            <tr <? if(empty($row->DT_BAIXA)) {
	  		if(strtotime($row->DT_VENCIMENTO) < strtotime(date('d-m-Y')))
                echo "class='danger'";
			else
				echo "class='info'";
	 		}else{ echo "class='success'";}
		 ?>>
              <td><?=$row->MES_REFERENCIA?></td>
              <td><?=$row->DT_VENCIMENTO?></td>
              <td >R$
                <?=number_format($row->VALOR_BOLETO,2, ',', '')?></td>
              <td><? 
			  	if(empty($row->DT_BAIXA)) {
					echo "<form action='".SCL_RAIZ."/mensalidade/imprimir/' target='_blank' method='post' name='form_imprimir_".$row->CD_ALUNO.$row->CD_PRODUTO.$row->MES_REFERENCIA."'>";
					echo "<input name='aluno' type='hidden' id='aluno' value='".$row->CD_ALUNO."' />";
					echo "<input name='produto' type='hidden' id='produto' value='".$row->CD_PRODUTO."' />";
					echo "<input name='mes' type='hidden' id='mes' value='".$row->MES_REFERENCIA."' />";
					echo "<input name='parcela' type='hidden' id='parcela' value='".$row->NUM_PARCELA."' />";
					echo "<input name='ordem' type='hidden' id='ordem' value='".$row->NR_ORDEM."' />";
				?>
					<a href="javascript:void(0)" class="list-group-item btn btn-xs btn-info" onclick="document.forms['form_imprimir_<?=$row->CD_ALUNO.$row->CD_PRODUTO.$row->MES_REFERENCIA?>'].submit(); return true;"> 
                    <span class="glyphicon glyphicon-barcode"></span> Boleto</a>
				<?
                	echo "</form>";
				}
	      		?> 
         </td>
            </tr>
            <? } ?>
            <tr>
              <td colspan="5"></td>
            </tr>
            <? 
			
			} else {?>
            <tr>
              <td colspan="5" align="center"><strong>NÃO HÁ MENSALIDADE</strong></td>
            </tr>
            <? } ?>
          </tbody>
        </table>
        <? $this->load->view('layout/paginacao');?>
      </div>
    </div>
    <? } ?>
  </div>
</div>
<? $this->load->view('footer'); exit?>
