<div class="base-all">
    <div class="contenedor-0">
        <div class="logo">
            <a href="http://www.foroseconomicos.com/">
                <img width="340" title="foros económicos" src="http://www.foroseconomicos.com/sites/all/modules/custom/foro_contactenos/img/foros_economicos-2.jpg"/>
            </a>
            <div style="clear:both"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="contenedor-1">
        <div class="mensaje">
            <h2>Contáctenos</h2>
            <h3>
                Si desea más información del proximo evento, dejenos sus datos y pronto nos comunicaremos con usted para brindarle mayor información. 
            </h3>
            <div style="clear:both"></div>
        </div>
        <div class="form-class-contacto">
            <div class="form_wrapper">
                <?php echo $variables["contacto"]; ?>
                <div style="clear:both"></div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div style="clear:both"></div>
</div>
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #eceef1;
    font-size: 16px;
    font-family: "Avenir", Futura, Helvetica, sans-serif;
    color: #363945;
    -webkit-font-smoothing: antialiased;
} 
#main-wrapper #main {
    width: 1000px;
    margin-left: 200px;
    margin-right: 200px;
    margin: 0 auto;
}
.base-all{
    width: 100%;
    margin: 0 auto;
    position: relative;
    padding: 0px 0;    
}    
.base-all .contenedor-0{
    margin-top: 0px;
    padding: 0px 49px 0 45px;
}
.base-all .contenedor-0 .logo {
    text-align: left;
    width: 93.5%;
    margin-top: 6px;
    display: inline-block;
    vertical-align: top;
    zoom: 1;
}




.base-all .contenedor-1 {
    /*background-color: #00a2ad;*/
    padding: 20px 20px 30px;
    width: 600px;
    margin-top: 74px;
    margin: 0 auto;
    max-width: 820px;    
}

.base-all .mensaje{  
    width: 780px;
    margin: -102px 0 0 -90px;
    text-align: center;    
}
.base-all .contenedor-1 .mensaje h2 {
    width: 780px;
    height: 34px;
    padding: 28px 0 0;
    /*background: #00a2ad;*/
    font-family: "Whitney A","Whitney B","Avenir",Helvetica,sans-serif;
    font-size: 33px !important;
    line-height: 46px;
    font-weight: 600;
    letter-spacing: 0;
    color: #003631;
}
.base-all .contenedor-1 .mensaje h3 {
    width: 696px;
    margin: 0 0 32px;
    display: inline-block;
    font-family: "Whitney A","Whitney B","Avenir",Helvetica,sans-serif;
    font-size: 23px;
    line-height: 28px;
    font-weight: 500;
    letter-spacing: 0;
    color: #003631;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;    
}


.base-all .contenedor-1 .form-class-contacto {
    vertical-align: top;
    zoom: 1;
    position: relative;    
    margin: 0;
    padding: 0;
    width: 100%;
    width: 90%;
    margin: 0 auto;
    display: block;
}
.base-all .contenedor-1 .form-class-contacto .form_wrapper{
    margin: 0;
    padding: 0;
    width: 100%;
    text-align: center;
    position: relative;
}
.base-all .contenedor-1 .form-class-contacto .form_wrapper form {
    margin: 0;
    padding: 0;
    width: 100%;
    border: none;
    display: block;
}

</style>
    