<?php
require_once 'includes/header.php';
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Blog Metagam</title>
    <meta charset="utf-8">
    <!--===============================================================================================-->
    <link rel="icon" href="assets/images/icon.png">
    <!--===============================================================================================-->
    <link rel="icon" type="image/image" href="assets/ebook/images/icons/icon.png" />
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
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
    <!--====================== Global site tag (gtag.js) - Google Analytics =========================-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149525971-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-149525971-1');
    </script>
    <!--====================== End Global site tag (gtag.js) - Google Analytics =====================-->
    <!--=========================== Facebook Pixel Code -->
    <!--==================================-->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '979073025765599');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=979073025765599&ev=PageView&noscript=1(44 B)
    https://www.facebook.com/tr?id=979073025765599&ev=PageView&noscript=1
    " /></noscript>
    <!--====-->
    <!--==================End Facebook Pixel Code -->
    <!--==================================-->
</head>

<body>
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col">
                <img src="assets/images/mockup-ebook.png" alt="Imagem do ebook">
            </div>
            <div class="col-sm-4 align-self-center">
                <span class="title-form">
                    <br>Domine sua vida financeira.<br> Descubra como!
                    <p class="subtitle-form">Por tempo limitado</p>
                </span>
                <form action="mail/enviaremail.php" method="post">
                    <div class="form-group">
                        <input type="email" name="txtEmail" class="form-control formulario-login" id="txtEmail"
                            aria-describedby="emailInput" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control formulario-login" name="txtNome" placeholder="Nome"
                            id="txtNome">
                    </div>
                    <button type="submit" id="btdownload" class="btn btn-metagam btn-primary btn-lg btn-block">Sim, eu
                        quero meu ebook !!</button>
                </form>
            </div>
        </div>
    </div>
    <div class="blog-container">

        <div class="card card-index" style="border: none">
            <div class="row align-items-center">
                <div class="col-sm-2">
                    <img class="d-block" width="200" height="200" src="assets/images/seguranca_nuvem.png"
                        alt="Imagem seguranca na nuvem">
                </div>

                <div class="col-sm-4">
                    <div class="card-body">
                        <h2 class="title-post card-title">Segurança na nuvem</h2>
                        <p class="art-div">A tecnologia é parte do dia a dia das pessoas. As redes sociais mudaram
                            completamente a nossa forma de comunicação e isso refletiu na nossa forma de compartilhar
                            conhecimento, mas também na forma de armazenar dados.Google Drive, Dropbox, iCloud, e tantas
                            outras plataformas que estão sendo desenvolvidas, tem sido os principais espaços de
                            armazenamento de dados pessoais e corporativas. Há quanto tempo você não toca em uma foto
                            impressa? A nuvem revolucionou até mesmo a armazenagem das nossas memórias.</p>
                        <a href="artigos/segurancanuvem.php" class="btn-div"><button type="button"
                                class="btn btn-metagam btn-sm btn-primary">Leia Mais <i
                                    class="fa fa-long-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="col-sm-2">
                    <img class="d-block" width="200" height="200" src="assets/images/transformacao.png"
                        alt="Imagem que representa a transformação digital">
                </div>
                <div class="col-sm-4">
                    <div class="card-body">
                        <h2 class="title-post card-title">Transformação Digital</h2>
                        <p class="art-div">Se você assiste as notícias ou vem lendo bastante sobre tecnologia e
                            empreendedorismo, provavelmente, já escutou sobre transformação digital. Falando sobre isso
                            a primeira dúvida que normalmente aparece é: o que é transformação digital, afinal? Falar
                            sobre essa transformação global é falar sobre a Quarta Revolução Industrial que, diferente
                            das outras revoluções, vem trazendo novas tecnologias com velocidade, alcance e impacto em
                            sistemas nunca vistos. Com intensa automatização que só foi possibilitada pela internet e
                            pelo armazenamento em nuvem.</p>
                        <a href="artigos/digital.php" class="btn-div"><button type="button"
                                class="btn btn-metagam btn-sm btn-primary">Leia Mais <i
                                    class="fa fa-long-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-2">
                    <img class="d-block" width="200" height="200" src="assets/images/servico_hospedagem.png"
                        alt="Imagem de um serviço de hospedagem">
                </div>
                <div class="col-sm-4">
                    <div class="card-body">
                        <h2 class="title-post card-title">Pra que serve um serviço de hopedagem </h2>
                        <p class="art-div">Antes de qualquer coisa, você precisa entender como um site funciona. Para
                            ter acesso a fotos, arquivos, imagens, informações, vídeo ou qualquer conteúdo web, seu site
                            deve ter um servidor de hospedagem, ou seja, um espaço onde ele fica alocado. Para facilitar
                            a compreensão, imagine que o servidor é o local onde seu site mora de aluguel.</p>
                        <a href="artigos/nuvem.php" class="btn-div"><button type="button"
                                class="btn btn-metagam btn-sm btn-primary">Leia Mais <i
                                    class="fa fa-long-arrow-right"></i></button></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <img class="d-block" width="200" height="200" src="assets/images/negocio_nuvem.png"
                        alt="Imagem de um serviço de hospedagem">
                </div>
                <div class="col-sm-4">
                    <div class="card-body">
                        <h2 class="title-post card-title">Ganhe mais dinheiro com vendas on-line</h2>
                        <p class="art-div">Passo número 1 - Entenda as necessidades do seu negócio. O mercado oferece
                            várias plataformas de criação de site gratuitas e pagas, as mais recomendadas são o
                            Wordpress e Wix; ambas oferecem funcionalidades que garantem boa criação de conteúdo para
                            sua estratégia de marketing. Se você deseja criar um e- commerce, ou seja, uma loja virtual,
                            as plataformas mais indicadas são: Shopify e Loja Integrada, que garantem segurança para
                            empreender na web.</p>
                        <a href="artigos/ganhe.php" class="btn-div"><button type="button"
                                class="btn btn-metagam btn-sm btn-primary">Leia Mais <i
                                    class="fa fa-long-arrow-right"></i></button></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <img class="d-block" width="200" height="200" src="assets/images/seo.jpeg"
                        alt="Imagem de um serviço de hospedagem">
                </div>
                <div class="col-sm-4">
                    <div class="card-body">
                        <h2 class="title-post card-title">SEO - faça o Google colocar seu site em destaque</h2>
                        <p class="art-div">SEO vai ser seu melhor amigo na hora de ficar no topo das pesquisas do Google. Ele é essencial para seu negócio diante de toda a transformação tecnológica na qual estamos imersos. Uma ferramenta do marketing digital simples que vai te colocar na frente dos seus concorrentes.</p>
                        <a href="artigos/seo.php" class="btn-div"><button type="button"
                                class="btn btn-metagam btn-sm btn-primary">Leia Mais <i
                                    class="fa fa-long-arrow-right"></i></button></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <img class="d-block" width="200" height="200" src="assets/images/ebook.jpeg"
                        alt="Imagem de um serviço de hospedagem">
                </div>
                <div class="col-sm-4">
                    <div class="card-body">
                        <h2 class="title-post card-title">Domine sua vida financeira</h2>
                        <p class="art-div">Altos índices de desemprego, trabalhos insalubres com aquele chefe mala que você não aguenta mais ou simplesmente o desejo de fazer mais dinheiro.
                        Este e-book vai te ajudar a conquistar aquela renda que você sente falta no fim do mês.
                        .</p>
                        <a href="artigos/ebook.php" class="btn-div"><button type="button"
                                class="btn btn-metagam btn-sm btn-primary">Leia Mais <i
                                    class="fa fa-long-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="py-4 text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; 2019 Metagam</small>
            <ul style="list-style: none; margin-top: 10px;" class="icons">
                <li><a style="color: #aaaaaa;" href="https://www.facebook.com/Metagam-109793053763944/"
                        class="fa fa-facebook-square"><span class="label">Facebook</span></a></li>
                <li><a style="color: #aaaaaa;" href="https://www.instagram.com/metagamhost/?hl=pt-br"
                        class="fa fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a style="color: #aaaaaa;" href="mailto:metagam2019@gmail.com" class="fa fa-envelope"><span
                            class="label">Email</span></a></li>
            </ul>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!--===============================================================================================-->
    <script src="assets/ebook/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/ebook/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/ebook/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/ebook/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/ebook/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })

        $(document).ready(function () {

            $('#btnvoltar').click(function () {
                window.location.href = 'index.php';

            });

            $('#btdownload').click(function () {


                var email = $('#txtEmail').val();
                var nome = $('#txtNome').val();
                var ip = <?php echo json_encode($ipaddress); ?>


                    $.ajax({
                        url: "connect/controlerCliente.php",
                        method: "post",
                        data: { varNome: nome, varEmail: email, varIP: ip },
                        success: function (data) {
                            // alert('Você receberá o link em seu e-mail cadastrado. Obrigado!');			
                            window.location.href = 'obrigado.php';

                        },
                        error: function (data) {

                            alert('erro ' + data);

                            window.location.href = 'erro.php';
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