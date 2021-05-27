<div class="modal-header <?= ($hasAluno && !$hasChamadaRealizada) ? "btn-danger" : "btn-success" ?>">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="modal-title">LISTA DE CHAMADA</h3>
</div>

<form action="<?= site_url('professor/diario/salvar_frequencia') ?>" method="post">
    <div class="modal-body">
        <?php if ($hasAluno && !$hasChamadaRealizada): ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-danger">
                        Professor(a), a chamada não foi confirmada. Por favor, confirme para salvar.
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <input type="hidden" name="aula" value="<?= $aula ?>">
        <input type="hidden" name="qtdturmas" value="<?= count($turmas) ?>">

        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Matrícula</th>
                    <th class="text-center">Aluno</th>

                    <?php foreach ($turmas as $key => $value): ?>
                        <th class="text-center" colspan="2"><?=(string)(1+(int)$key)."o" ?> Frequência</th>
                        <input type="hidden" name="turma<?=$key?>" value="<?= $geminadas[$key]['CD_CL_AULA'] ?>">
                    <?php endforeach; ?>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($alunos[0] as $id=> $aluno): ?>
                    <tr>
                        <td class="text-center"><?= $aluno['CD_ALUNO'] ?></td>
                        <td class="text-center"><?= $aluno['NM_ALUNO'] ?></td>
                        <?php foreach ($alunos as $turma => $value):?>
                            <td class="text-center <?= $alunos[$turma][$id]['FLG_PRESENTE'] == 'S' ? "success" : "" ?>">
                                <input type="radio" name="<?= $alunos[$turma][$id]['CD_ALUNO']."_".$alunos[$turma][$id]['CD_CL_AULA'] ?>" value="S" <?= $alunos[$turma][$id]['FLG_PRESENTE'] == "S" ? "checked='checked'" : "" ?>> SIM
                            </td>
                            <td class="text-center <?= $alunos[$turma][$id]['FLG_PRESENTE'] == 'N' ? "danger" : "" ?>">
                                <input type="radio" name="<?= $alunos[$turma][$id]['CD_ALUNO']."_".$alunos[$turma][$id]['CD_CL_AULA']  ?>" value="N" <?= $alunos[$turma][$id]['FLG_PRESENTE'] == "N" ? "checked='checked'" : "" ?>> NÃO
                            </td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        <strong>Total de <?= count($alunos[0]) ?> alunos</strong>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-rotate-left"></i> Cancelar</button>

        <?php if ($hasAluno): ?>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Confirmar</button>
        <?php endif; ?>
    </div>
</form>

<?php exit(); ?>
