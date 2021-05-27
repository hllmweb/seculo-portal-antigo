<? $this->load->view('header');?>
<div class="row">
  <div class="col-sm-12" style="margin:80px 10px">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">HISTÓRICO ESCOLAR</h3>
      </div>  
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
		<? if(count($grade) > 0){
			  foreach($grade as $row){
		?>
        <thead class="panel panel-primary" style="font-size:10px">
          <tr>
            <th width="10%" height="30" align="left" style="text-align:left">
             <span class="glyphicon glyphicon-user"></span><?=$row->NM_DISCIPLINA ." - ". $row->CH_TOTAL;?></a></th>
          </tr>
        </thead>
		<? } } ?>
        </tbody>
      </table>
    </div>
    <div class="panel panel-primary" id="DVMENSALIDADE">
    </div>
  </div>
</div>
<? $this->load->view('footer'); exit?>