

function cerrarForm(){
    $("#miformulario").fadeOut(500);
    $("#hora").html("");
    $("#fecha").html("");
    pasa=0;
    setTimeout(function(){
        $("#guias").fadeIn(500);
    },500);

}

function mostrarFormulario(numeroguia){

    $("#nombreguia").attr("value",numeroguia);
    $("#fecha").append(new Option("Fecha" ));
    $("#hora").append(new Option("Hora" ));
    $("#guias").fadeOut(500);
    setTimeout(function(){
        $("#miformulario").fadeIn(500);
    },500);

    //carga las horas
    //guia1
    if(numeroguia =="guia1") {
        $("#fecha").append(new Option("22/07/2020", "2020-07-22"));
        $("#fecha").append(new Option("23/07/2020", "2020-07-23"));
        $("#fecha").append(new Option("28/07/2020", "2020-07-28"));
        $("#fecha").append(new Option("30/07/2020", "2020-07-30"));
    }

    //guia2
    if(numeroguia =="guia2") {
        $("#fecha").append(new Option("20/07/2020", "2020-07-20"));
        $("#fecha").append(new Option("21/07/2020", "2020-07-21"));
        $("#fecha").append(new Option("22/07/2020", "2020-07-22"));
        $("#fecha").append(new Option("24/07/2020", "2020-07-24"));
        $("#fecha").append(new Option("27/07/2020", "2020-07-27"));
        $("#fecha").append(new Option("28/07/2020", "2020-07-28"));
        $("#fecha").append(new Option("29/07/2020", "2020-07-29"));
        $("#fecha").append(new Option("31/07/2020", "2020-07-31"));
    }

    //guia3
    if(numeroguia =="guia3") {
        $("#fecha").append(new Option("20/07/2020", "2020-07-20"));
        $("#fecha").append(new Option("21/07/2020", "2020-07-21"));
        $("#fecha").append(new Option("23/07/2020", "2020-07-23"));
        $("#fecha").append(new Option("27/07/2020", "2020-07-27"));
        $("#fecha").append(new Option("30/07/2020", "2020-07-30"));
    }

    if(numeroguia =="guia4") {
        $("#fecha").append(new Option("20/07/2020", "2020-07-20"));

    }
    //guia5
    if(numeroguia =="guia5") {
        $("#fecha").append(new Option("24/07/2020", "2020-07-24"));
        $("#fecha").append(new Option("31/07/2020", "2020-07-31"));
        $("#fecha").append(new Option("01/08/2020", "2020-08-01"));
    }

    //guia6
    if(numeroguia =="guia6") {
        $("#fecha").append(new Option("26/07/2020", "2020-07-26"));
        $("#fecha").append(new Option("31/07/2020", "2020-07-31"));
        $("#fecha").append(new Option("02/08/2020", "2020-08-02"));
    }


    //guia7
    if(numeroguia =="guia7") {
        $("#fecha").append(new Option("24/07/2020", "2020-07-24"));
        $("#fecha").append(new Option("25/07/2020", "2020-07-25"));
        $("#fecha").append(new Option("26/07/2020", "2020-07-26"));
        $("#fecha").append(new Option("31/07/2020", "2020-07-31"));
        $("#fecha").append(new Option("01/08/2020", "2020-08-01"));
        $("#fecha").append(new Option("02/08/2020", "2020-08-02"));
    }


    //guia8
    if(numeroguia =="guia8") {
        $("#fecha").append(new Option("24/07/2020", "2020-07-24"));
        $("#fecha").append(new Option("25/07/2020", "2020-07-25"));
        $("#fecha").append(new Option("26/07/2020", "2020-07-26"));
        $("#fecha").append(new Option("02/08/2020", "2020-08-02"));
    }



}


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var pasa=0;

function comprobacion(){
    if (pasa == 0 ) {
        pasa= pasa+1;
        // mandar horas y dias
        var fecha = document.getElementById("fecha").value;
        var guia = document.getElementById("nombreguia").value;
        //se busca en la db que horas tiene libre

        $.ajax({
            type: 'POST',
            url: '/horasLibres',
            data: {guia: guia, fecha: fecha},
            success: function (data) {
                // $("#msg").html(data.msg);
                if (data.msg == "Falta fecha") {
                    alert(data.msg);
                } else {
                    //ver en un array las horas libres del guia X en el dia X
                    // comprobar si no tiene meter un completo
                    if(!data.msg){
                        $("#hora").append("<option>Completo</option >");
                    }else{
                        $("#hora").append(data.msg);
                    }
                }
            }
        });
    }

}


// si se clica el calendario
function reseteo(){
    $("#hora").html("");
    $("#hora").append(new Option("Hora" ));
    pasa=0;
}






