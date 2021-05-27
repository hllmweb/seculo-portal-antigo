<div class="panel panel-primary">
	<div class="panel-heading"><strong>MENSALIDADES / BOLETOS </strong></div> 
 <table width="100%" border="0" cellspacing="0" cellpadding="5">
<thead>
  <tr>
    <th>MATRICULA</th>
    <th>ALUNO</th>
    <th>MENSALIDADE</th>
    <th>VENCIMENTO</th>
    <th>VALOR</th>
    <th>#</th>
  </tr>
</thead>
<tbody style="font-size:10px">
  <? if(count($mensagem) > 0){
     foreach($mensagem as $row){   
  ?>
  <tr>
    <td><?=$row->CD_ALUNO?></td>
    <td><?=$row->NM_ALUNO?></td>
    <td><?=$row->MES_REFERENCIA?></td>
    <td><?=$row->DT_VENCIMENTO?></td>
    <td>R$ <?=number_format($row->VALOR_BOLETO,2, ',', '')?></td>
    <td>
    <? if(empty($row->DT_BAIXA)) {
		echo "<a href='' target='_blank'><span class='glyphicon glyphicon-paperclip'> visualizar boleto</span></a>";
	 }
	?></td>
  </tr>
  <? } ?>
  <tr>
    <td colspan="5"></td>
  </tr>
  <? } else {?>
  <tr>
    <td colspan="5" align="center"><strong>NÃO HÁ MENSALIDADE</strong></td>
  </tr>
  <? } ?>
</tbody>
</table>
<? $this->load->view('layout/paginacao');?>
</div>
<script>
$(function(){      
	$('table > tbody > tr:odd').addClass('odd');      
	$('table > tbody > tr').hover(function(){
		$(this).toggleClass('hover');
	});
	$("table") 
	.tablesorter({
		dateFormat: 'uk',
		headers: {
			0: {
				sorter: false
			},
			5: {
				sorter: false
			}
		}
	}) 	
	.tablesorterPager({container: $("#pager")})
	.bind('sortEnd', function(){
	$('table > tbody > tr').removeClass('odd');
	$('table > tbody > tr:odd').addClass('odd');
	});      
});
</script>
<? exit?>