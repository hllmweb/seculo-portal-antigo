<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="col-sm-4"><strong>PORTAL SÉCULO - 2014</strong></div>
    <div class="col-sm-5"><span class='glyphicon glyphicon-user'></span><?=$this->session->userdata('SCL_SSS_USU_ID'); ?> - <?=$this->session->userdata('SCL_SSS_USU_NOME')?></div>
    <div class="col-sm-3"><span class='glyphicon glyphicon-time'></span> <?=date('d/m/Y H:m:s')?></div> 
</nav>
<script>
    $(function(){
      
      $('table > tbody > tr:odd').addClass('odd');
      
      $('table > tbody > tr').hover(function(){
        $(this).toggleClass('hover');
      });
      
      $('#marcar-todos').click(function(){
        $('table > tbody > tr > td > :checkbox')
          .attr('checked', $(this).is(':checked'))
          .trigger('change');
      });
      
      $('table > tbody > tr > td > :checkbox').bind('click change', function(){
        var tr = $(this).parent().parent();
        if($(this).is(':checked')) $(tr).addClass('selected');
        else $(tr).removeClass('selected');
      });
      
      $('form').submit(function(e){ e.preventDefault(); });
      
      $('#pesquisar').keydown(function(){
        var encontrou = false;
        var termo = $(this).val().toLowerCase();
        $('table > tbody > tr').each(function(){
          $(this).find('td').each(function(){
            if($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;
          });
          if(!encontrou) $(this).hide();
          else $(this).show();
          encontrou = false;
        });
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
    
    <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo/"?>assets/js/bootstrap.js"></script>
    <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo/"?>assets/js/popover.js"></script>
    <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo/"?>assets/js/tooltip.js"></script>
	<script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo/"?>assets/js/modal.js"></script>
    <script type="text/javascript" src="<?="http://".$_SERVER['HTTP_HOST']."/seculo"?>/assets/js/custom.js" ></script>
	<script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo/"?>assets/js/tab.js"></script>    
    <script src="<?="http://".$_SERVER['HTTP_HOST']."/seculo/"?>assets/js/holder.js"></script>
</body>
</html>
<? exit();?>