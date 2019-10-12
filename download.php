<?php
    $visto = 0;
    if($visto > 1) {
        if (eregi("download.php", $_SERVER['SCRIPT_NAME'])){
            die ("<script>alert('Sem permição de acesso !')</script>");
            }
    }
?>
<html>
    <title>Ebook</title>
    <head>
        <meta http-equiv="refresh" content=1;url="https://drive.google.com/file/d/1X_duMnSrlUmk0UHCxRcR_qNfS9V4u1KD/view?usp=sharing">
    </head>
    <body>
    </body>
</html>
<?php
    $visto = 1;
?>