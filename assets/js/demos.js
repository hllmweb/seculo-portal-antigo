/**
 * Common stuff used on all FooTable demos
 */

$(document).ready(function() { 
    $('.nav-tabs a').click(function (e) {
        //prevents re-size from happening before tab shown
        e.preventDefault();
        //show tab panel
        $(this).tab('show');  
        //fire re-size of footable
        $('.footable').trigger('footable_resize'); 
    });
});

function validar(frm) {
        if (document.frm.produto.value == "") {
            alert('Preencha o nome.');
            frm.frm_nome.focus();
            return(false);
        }
        if (doument.frm.formaPagamento.value == "") {
            alert('Preencha o e - mail.');
            frm.frm_email.focus();
            return(false);
        }
        if (document.frm.codigoBandeira.value == "") {
            alert('Preencha a mensagem');
            frm.frm_mensagem.focus();
            return(false);
        }
        return(true);
    }