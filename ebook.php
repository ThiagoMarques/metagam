<?php
require_once 'includes/header.php'; 
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Blog Metagam</title>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link rel="icon" href="assets/images/icon.png">
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--====================== Global site tag (gtag.js) - Google Analytics =========================-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149525971-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-149525971-1');
        </script>
    <!--====================== End Global site tag (gtag.js) - Google Analytics =====================-->
    <!--=========================== Facebook Pixel Code --><!--==================================-->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '979073025765599');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=979073025765599&ev=PageView&noscript=1(44 B)
    https://www.facebook.com/tr?id=979073025765599&ev=PageView&noscript=1
    "
    /></noscript>
    <!--====--><!--==================End Facebook Pixel Code --><!--==================================-->
</head>

<body>
    <div class="container">
        <div class="panel panel-primary" style="width:750px;margin:50px auto">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="txtnome">Nome</label>
                                <input type="input" class="form-control" id="txtnome" placeholder="Seu Nome">
                            </div>

                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" id="txtemail" aria-describedby="emailHelp"
                                placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                                ninguém.</small>
                        </div>
                        <button type="submit" id="btdownload" class="btn btn-primary">Fazer Download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="py-4 text-white-50">
    <div class="container text-center">
	  <small>Copyright &copy; 2019 Metagam</small>
      <ul style="list-style: none; margin-top: 10px;" class="icons">
		<li><a  style="color: #aaaaaa;" href="https://www.facebook.com/Metagam-109793053763944/" class="fa fa-facebook-square"><span class="label">Facebook</span></a></li>
		<li><a  style="color: #aaaaaa;" href="https://www.instagram.com/metagamhost/?hl=pt-br" class="fa fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a  style="color: #aaaaaa;" href="mailto:metagam2019@gmail.com" class="fa fa-envelope"><span class="label">Email</span></a></li>
	</ul>
    </div>
</footer>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <script>

        $(document).ready(function () {

            console.log("Página carregada");

            $('#btdownload').click(function () {


                var email = $('#txtemail').val();
                var nome = $('#txtnome').val();
                var ip = <?php echo json_encode($ipaddress); ?>
                
                <?php
                    $string = '';
                    exec("dig +short -x $ip 2>&1", $output, $retval);
                    if ($retval != 0)
                    {
                        // there was an error performing the command
                    }
                    else
                    {
                        $x=0;
                        while ($x < (sizeof($output)))
                        {
                            $string.= $output[$x];
                            $x++;
                        }
                    }
                
                    if (empty($string))
                        $string = $ip;
                    else //remove the trailing dot
                        $string = substr($string, 0, -1);
                

                ?>
                
                alert(varIp);
              

                $.ajax({
                    url: "controlerCliente.php",
                    method: "post",
                    data: { varNome: nome, varEmail: email, varIP: ip },
                    success: function (data) {

                        alert('Sucesso' + data);


                    },
                    error: function (data) {
                        alert('Erro ' + data);

                    }
                });

            });
        });

    </script>
</body>

</html>