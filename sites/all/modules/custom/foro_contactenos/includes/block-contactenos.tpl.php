<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Foros Económicos Colombia | contactenos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link type="text/css" rel="stylesheet" media="all" href="" />
        <script type="text/javascript" src=></script>-->
    </head> 
    <body>
        <?php global $variables; ?>
        <div id="messages"><?php print theme_status_messages($variables); ?></div>
        <?php echo $variables["contacto"]; ?>
    </body>
</html>