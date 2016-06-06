$(".mwsReemplazaValor").on("keypress keyup", function(event) {
    mwsreemplazar    = null;
    mwsreemplazarpor = null;
    mwscantidad      = null;
    $.each(this.attributes, function(index, attr) {
        if(attr.name == "mwsreemplazar") {
            mwsreemplazar = attr.value;
        } else if(attr.name == "mwsreemplazarpor") {
            mwsreemplazarpor = attr.value;
        } else if(attr.name == "mwscantidad") {
            mwscantidad = attr.value;
        }
    });

    if (mwsreemplazar != null && mwsreemplazarpor != null) {
        $("#"+this.id).val($("#"+this.id).val().replace(mwsreemplazar, mwsreemplazarpor));
    }
});