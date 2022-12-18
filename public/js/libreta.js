$(document).ready(function (){
    try {
        var primerTrimestre = $('.primerTrimestre');
        var segundoTrimestre = $('.segundoTrimestre');
        var tercerTrimestre = $('.tercerTrimestre');
        var diciembre = $('.diciembre');
        var febrero = $('.febrero');
        var finAnio = $('.finAnio');
        var notafinal = $('.notafinal');
        for (var i = 0; i < finAnio.length; i++) {
            var val1 = parseInt($.trim(primerTrimestre.get(i).getInnerHTML()));
            var val2 = parseInt($.trim(segundoTrimestre.get(i).getInnerHTML()));
            var val3 = parseInt($.trim(tercerTrimestre.get(i).getInnerHTML()));
            var val4 = parseInt($.trim(diciembre.get(i).getInnerHTML()));
            var val5 = parseInt($.trim(febrero.get(i).getInnerHTML()));
            var valAnio = ((val1 + val2 + val3)/3);

            if(val1 < 6){
                $(primerTrimestre.get(i)).css('color', 'red')
            }

            if(val2 < 6){
                $(segundoTrimestre.get(i)).css('color', 'red')
            }

            if(val3 < 6){
                $(tercerTrimestre.get(i)).css('color', 'red')
            }

            if(!isNaN(valAnio))
                finAnio.get(i).innerHTML = valAnio.toFixed(2);

            if(valAnio >= 6 && val3 >= 6)
                notafinal.get(i).innerHTML = finAnio.get(i).innerHTML;

            if(valAnio >= 6 && val3 >= 6)
                notafinal.get(i).innerHTML = finAnio.get(i).innerHTML;

            if(valAnio < 6){
                if(val4 >= 6){
                    var valDic = ((val4 + valAnio) / 2);
                    if(valDic < 6)
                        valDic = 6;
                    notafinal.get(i).innerHTML = valDic.toFixed(2);
                }

                if(val5 >= 6){
                    var valFeb = ((val5 + valAnio) / 2);
                    if(valFeb < 6)
                        valFeb = 6;
                    notafinal.get(i).innerHTML = valFeb.toFixed(2);
                }
            }else{
                diciembre.get(i).innerHTML = '';
                febrero.get(i).innerHTML = '';
            }
        }
    } catch (error) {
        console.log(error)
    }

});
