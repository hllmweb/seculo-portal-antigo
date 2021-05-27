<div class="page-header"><h1>Extrato de almoço no Período de <?=$periodo?></h1></div>
<table class="table">
    <caption class="text-left text-info">
    </caption>
    <thead>
        <tr>
            <th>Data</th>
            <th>Saldo anterior</th>
            <th></th>
            <th>Crédito</th>
            <th>Saldo atualizado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
       // exit();
        foreach ($extrato as $e){  

            if($e->CREDITO>0){
                $consumo = 'Crédito';
            }
            else{
                $consumo = 'Consumo';
            }

            ?>
        <tr>
            <td><?=$e->DT_MOVIMENTO?></td>
            <td><?=$e->SALDO_ANTERIOR?></td>
            <td><?=$consumo?></td>
            <td><?=$e->CREDITO?></td>
            <td><?=$e->SALDO_ATUALIZADO?></td>
        </tr> 
        <?php } ?>
    </tbody>
</table>
</div>
<?php exit();?>
