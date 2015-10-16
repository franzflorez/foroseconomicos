(function($) {
    Drupal.behaviors.actualizarPageHome = {
        attach: function(context, settings) {
            if($('.datos-bolsa-contenedor').length){
                jQuery.ajax({
                        url: 'http://www.foroseconomicos.com/sites/all/modules/custom/foro_contactenos/js/jsondatabolsa.js?a='+Math.random(),
                        async: true,
                        dataType: "json",
                        success: function(data) {
                            if(data == null){
                                //alert('Imposible conectar con el servidor');
                                return false;
                            }else{
                                for (var bolsa in data){
                                    //console.log(data[bolsa]['Id']);
                                }
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            //console.log("forosoooo 2");
                        }
                 });               
            }
            
        }
    };
    $(document).ready(function() {


    });
})(jQuery);
