(function($) {
    Drupal.behaviors.actualizarPageHome = {
        attach: function(context, settings) {
            
            //if($('.datos-bolsa-contenedor').length){
                $.ajax({
                        url: 'https://widgetsdataifx.blob.core.windows.net/dataifx/listcurrenciescorredores?a='+Math.random(),
                        async: true,
                        success: function(data) {
                            if(data == null){
                                //alert('Imposible conectar con el servidor');
                                return false;
                            }else{
                                console.log("forosoooo");
                                console.log(data);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log("forosoooo 2");
                        }
                 });                
            //}
            
        }
    };
    $(document).ready(function() {


    });
})(jQuery);
