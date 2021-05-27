<? $this->load->view(''.$this->session->userdata('SCL_SSS_USU_ENSINO').'/layout/header'); ?>
<div class="row" style="margin:0 auto; width:98%">
  <div class="col-sm-3" style="margin-top:80px">
  	<div class="panel panel-sucess">
  	  <div class="panel-heading">
        <h3 class="panel-title">MENSAGEM</h3>
      </div> 
    </div>
  </div>
  <div class="col-sm-6" style="margin-top:80px">
  	<div class="panel panel-info">
  	 <div class="panel-heading">
        <h3 class="panel-title">NOTÍCIAS</h3>
      </div> 
  	</div>
  
  </div>
  <div class="col-sm-3" style="margin-top:80px">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">NOTÍCIAS</h3>
      </div>  
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
		<? if(count($noticia) > 0){
			  foreach($noticia as $row){
		?>
        <thead class="warning" style="font-size:10px">
          <tr>
            <th width="10%" height="30" align="left" style="text-align:left">
             <a data-toggle="modal" href="#myModal" ><?=$row->TITULO?><br>
			 <?=$row->AUTOR;?></a></th>
          </tr>
        </thead>
		<? } } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<? $this->load->view(''.$this->session->userdata('SCL_SSS_USU_ENSINO').'/layout/footer'); 
exit;?>