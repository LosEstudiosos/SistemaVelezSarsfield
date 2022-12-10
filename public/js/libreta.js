$(document).ready(function (){
    try {
        var primerTrimestre = $('.primerTrimestre');
        var segundoTrimestre = $('.segundoTrimestre');
        var tercerTrimestre = $('.tercerTrimestre');
        var diciembre = $('.diciembre');
        var febrero = $('.febrero');
        var finAnio = $('.finAnio');
        var notafinal = $('.notafinal');
        for (var i=0; i<finAnio.length; i++) {
            var val1 = parseInt($.trim(primerTrimestre.get(i).getInnerHTML()));
            var val2 = parseInt($.trim(segundoTrimestre.get(i).getInnerHTML()));
            var val3 = parseInt($.trim(tercerTrimestre.get(i).getInnerHTML()));
            if(val1<6){
                $(primerTrimestre.get(i)).css('color', 'red')
            }
            if(val2<6){
                $(segundoTrimestre.get(i)).css('color', 'red')
            }
            if(val3<6){
                $(tercerTrimestre.get(i)).css('color', 'red')
            }
            var valAnio = ((val1 + val2 + val3)/3);
            if(!isNaN(valAnio))
                finAnio.get(i).innerHTML = valAnio.toFixed(2);
        }
    } catch (error) {
        console.log(error)
    }

});
