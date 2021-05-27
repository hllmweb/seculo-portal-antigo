(function(a) {
    a(document).ready(function() {
        a(".editor").summernote({height: 200});
        a('[data-toggle="tooltip"]').tooltip({container: "body"});
        a(".task-graph").sparkline("html", {type: "bar", barColor: "#10a6de", lineWidth: 1, height: "20px", });
        a(".discuss-graph").sparkline("html", {type: "bar", barColor: "#fbb05e", lineWidth: 1, height: "20px", });
        a(".contrib-graph").sparkline("html", {type: "bar", barColor: "#56c32a", lineWidth: 1, height: "20px", });
        a("select").selectpicker({style: "", size: 4});
        a(":file").filestyle({icon: "fa fa-folder-open", classButton: "btn btn-default"});
        a(".bs-switch").bootstrapSwitch()
    })
})(jQuery);