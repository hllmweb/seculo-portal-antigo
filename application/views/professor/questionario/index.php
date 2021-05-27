<?php $this->load->view('layout/header'); ?>
<div id="content">
    <div class="row">
        <div class="col-lg-12">
            <center>
            <select name="bimestre" id="bimestre">
                <option selected>Selecione o Bimestre</option>
                <option value="1">1º Bimestre</option>
                <option value="2">2º Bimestre</option>
                <option value="3">3º Bimestre</option>
                <option value="4">4º Bimestre</option>
            </select>
            </center>
        </div>
    </div>


    <div class="panel-body" id="tabelaFiltro">
        <h3 style="text-align: center;">Faça primeiro o filtro</h3>
    </div>
</div>
<script>

    $("#bimestre").change(function(e){
        bimestre_this = $(this).val();

        $.ajax({
            url: "<?= SCL_RAIZ ?>professor/infantil/avaliacao_conceitual_bimestre",
            type: "POST",
            data: {
                bimestre: bimestre_this
            },
            beforeSend: function(){
                $("#tabelaFiltro").html("<h2>Carregando...</h2>");
            },
            success: function(data){
                //console.log(data);
                $("#tabelaFiltro").html(data);

            }
        });

        e.preventDefault();
    });
</script>

<?php $this->load->view('layout/footer'); ?>
