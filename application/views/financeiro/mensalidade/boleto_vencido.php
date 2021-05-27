<div class="modal-dialog" style="width: 90%; height: 100%">
    <div class="modal-content">
        <div class="modal-header btn-success">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4><i class="fa fa-credit-card"></i> Impressão de Boleto Vencido</h4>
        </div>

        <div class="panel-body"> 
            <h2>Copie o código e cole no campo abaixo:
            <strong style="color:blue">

            <?php 
                 //$a = remover_caracter($boleto['linhaDigitavel']);
            $a = $boleto['linhaDigitavel'];
                 echo $a;
                ?>

            </strong></h2>
            <iframe id="bradesco" name="bradesco" src="https://www.ib2.bradesco.com.br/ibpfsegundaviaboleto/segundaViaBoletoPesquisarLinhaDigitavel.do?_ga=2.9214005.189671898.1564670492-41305060.1562777539&amp;_gac=1.156511817.1564670492.CjwKCAjwm4rqBRBUEiwAwaWjjPcRRdXxgSdo9u2fArD1LptpZZ0j-_K4CCHt0ZLgrR1nt-8WEC4ichoC9qQQAvD_BwE" style="border: 0; width: 100%; height: 1000px" />
        </div> 
        <div class="modal-footer">
            <button class="btn btn-danger pull-left" data-dismiss="modal" id="frmarquivo_btn" ><i class="fa fa-refresh"></i> Fechar </button>
        </div>
    </div>
</div>
<?php exit(); ?>

