<script>
	function reportarBug_Form(){
		var email = $("#email").val();
		var msg   = $("#msg").val();

		$.ajax({
			url: "<?= base_url('inicio/email_reportar'); ?>",
			type: "POST",
			dataType: "html",
			data: {
				email: email,
				msg: msg
			},
			beforeSend: function(){
				$("#RemResposta").html("Carregando...");
			},
			success: function(data){
				$("#RemResposta").html(data);
			} 

		});

		return false;
	}
</script>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!--<script type="text/javascript">
            function validarForm() {
                $("#RemResposta").html('<img src="<?=base_url('assets/images/loader.gif')?>" id="preload">');
                $.post("<?= base_url('acompanhamento/frmManterRematricula/' . $rematricula[0]['CD_ALUNO'] . '') ?>", {},
                function(valor) {
                    $("#RemResposta").html(valor);
                    location.reload();
                });
            };
        </script>-->
        <div class="modal-header btn-info">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4><i class="fa fa-bug"></i> Reportar Bugs</h4>
        </div>
        <div class="panel-body">
        <!--    <iframe src="<?= base_url('acompanhamento/SolicitacaoRematricula/' . $rematricula[0]['CD_ALUNO'] . '') ?>" frameborder="0" height="300" width="100%" ></iframe>
            <img src="<?=base_url('assets/images/loader.gif')?>" id="preload">
            <script language="javascript">
            $('iframe').css('display', 'none');
            $('iframe').load(function() {
            $('iframe').css('display', 'block');
            $('#preload').css('display', 'none');
            });
            </script>-->
        	<form>
        		<div class="row">
        			<div class="col-sm-12">
        				<label for="email">Email</label>
        				<input type="text" name="email" id="email" class="form-control input-lg">
        			</div>
        		</div>

        		<div class="row">
        			<div class="col-sm-12">
        				<label for="msg">Mensagem</label>
        				<textarea name="msg" id="msg" placeholder="Digite o erro" class="form-control input-lg"></textarea>
        			</div>
        		</div>
        	</form>    
        </div>
        <div id="RemResposta">

        </div>
        <div class="modal-footer text-center">
        	<center>
            <!-- <strong>Aceitar a Renovação de Matrícula? </strong><br/> -->
            <!-- <button class="btn btn-danger" data-dismiss="modal" id="frmarquivo_btn" ><i class="fa fa-refresh"></i> Não Aceito </button> -->
            	<button onclick="reportarBug_Form(); return false;" class="btn btn-success"><i class="fa fa-hand-o-up"></i> Enviar </button>
        	</center>
        </div>            
    </div>
</div>


<? exit(); ?>