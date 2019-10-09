<?php
    $visto = 0;
    if($visto > 1) {
        if (eregi("download.php", $_SERVER['SCRIPT_NAME'])){
            die ("<script>alert('Sem permição de acesso !')</script>");
            }
    }
?>
<html>
    <title>Titulo do site</title>
    <head>
        <meta http-equiv="refresh" content=1;url="https://drive.google.com/open?id=1XRoIRvNzC57H8Zstai2Mg-yF9Tgla5Mx">
    </head>
    <body>
    </body>
</html>
<?php
    $visto = 1;
?>