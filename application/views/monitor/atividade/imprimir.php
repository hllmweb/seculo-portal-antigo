<table width="100%" style="width:100%" border="1" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #000; border-collapse: collapse;">
    <tr style="border:1px solid #000; border-collapse: collapse;">
        <td align="center" bgcolor="#CCC0" colspan="7"  style="font-size:16px;" with="10%"> 
            <i class="fa fa-clock-o"></i> Relação de Atividades Extras da Turma: <?= $this->input->post('turma') ?> 
        </td>
    </tr>
    
    <tr style="border:1px solid #000; border-collapse: collapse; border-top:2px solid #000">
        <td align="left"><strong>Nome</strong></td>
        <td align="center" style="font-size:10px;" width="10%"> <strong>SEGUNDA</strong> </td>
        <td align="center" style="font-size:10px;" width="10%"> <strong>TERÇA</strong>   </td>
        <td align="center" style="font-size:10px;" width="10%"> <strong>QUARTA</strong>  </td>
        <td align="center" style="font-size:10px;" width="10%"> <strong>QUINTA</strong>  </td>
        <td align="center" style="font-size:10px;" width="10%"> <strong>SEXTA</strong>   </td>
        <td align="center" style="font-size:10px;" width="10%"> <strong>SÁBADO</strong> </td>
    </tr>
    <? foreach ($aluno as $s) {
    $tempo = $this->secretaria->atividade(array('aluno' => $s['CD_ALUNO'], 'periodo' => $this->session->userdata('SCL_SSS_USU_PERIODO')));
    if ($tempo != 1) {$i = 0;
        foreach ($tempo as $r) { 
        
       ?>
    <tr>
        <? if($i == 0) { ?>
        <td rowspan="<?=count($tempo)?>" align="left" style="font-size:10px;"><strong> <?= $s['CD_ALUNO'] . ' - ' . $s['NM_ALUNO'] ?></strong></td>
        <? } ?>
        <td align="center" style="font-size:10px;">  <? $tem = explode('<br />', trim(nl2br($r['SEGUNDA']))); echo $tem[1]; ?> </td>
        <td align="center" style="font-size:10px;"> <? $tem = explode('<br />', trim(nl2br($r['TERCA']))); echo $tem[1];  ?> </td>
        <td align="center" style="font-size:10px;"> <? $tem = explode('<br />', trim(nl2br($r['QUARTA']))); echo $tem[1];  ?>  </td>
        <td align="center" style="font-size:10px;"> <? $tem = explode('<br />', trim(nl2br($r['QUINTA'])));  echo $tem[1];  ?> </td>
        <td align="center" style="font-size:10px;"> <? $tem = explode('<br />', trim(nl2br($r['SEXTA'])));  echo $tem[1]; ?> </td>
        <td align="center" style="font-size:10px;"> <? $tem = explode('<br />', trim(nl2br($r['SABADO']))); echo $tem[1];  ?> </td>
    </tr>
  <? $i = $i+1; } } } ?>
</table>