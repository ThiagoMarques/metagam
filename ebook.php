<?php
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
	<title>Ebook Metagam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/image" href="assets/ebook/images/icons/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/ebook/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/ebook/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/ebook/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/ebook/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/ebook/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/ebook/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/ebook/css/main.css">
<!--===============================================================================================-->

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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/ebook/images/img-01.png" alt="IMG">
				</div>

				<form action="mail/enviaremail.php" class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Descubra como criar seu site e-commerce hoje mesmo
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Informe um e-mail válido">
						<input class="input100" type="text" name="txtEmail" placeholder="Email" id="txtEmail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Informe um nome">
						<input class="input100" type="text" name="txtNome" placeholder="Nome" id="txtNome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btdownload">
							Sim, eu quero meu ebook !!
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						
						</span>
						<a class="txt2" href="#">
							
						</a>
					</div>


					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Acesse o blog do Metagam
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
		
<!--===============================================================================================-->	
	<script src="assets/ebook/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/ebook/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/ebook/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/ebook/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/ebook/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})

        $(document).ready(function () {

			console.log("Página carregada");

			$('#btnvoltar').click(function(){
				window.location.href='blog.php';

			});

			$('#btdownload').click(function () {


				var email = $('#txtEmail').val();
				var nome = $('#txtNome').val();
                var ip = <?php echo json_encode($ipaddress); ?>
			

				$.ajax({
					url: "connect/controlerCliente.php",
					method: "post",
					data: { varNome: nome, varEmail: email, varIP: ip},
					success: function (data) {
						alert('Você receberá o link em seu e-mail cadastrado. Obrigado!');			
						window.location.href='index.php';
                       
					},
					error: function (data) {

						alert('erro '+data);

						window.location.href='erro.php';
					}
				});

			});
		});		

    </script>
    
<!--===============================================================================================-->
	<script src="assets/ebook/js/main.js"></script>
<!--===============================================================================================-->
</body>
</html>