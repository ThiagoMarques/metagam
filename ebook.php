<?php
require_once 'includes/header.php'; 
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Blog Metagam</title>
    <meta charset="utf-8">
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
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
            <ul style="list-style: none;" class="icons">
                <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
            </ul>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>

        $(document).ready(function () {

            console.log("Página carregada");

            $('#btdownload').click(function () {


                var email = $('#txtemail').val();
                var nome = $('#txtnome').val();

                alert(email);
                alert(nome);

                $.ajax({
                    url: "controlerCliente.php",
                    method: "post",
                    data: { varNome: nome, varEmail: email, varIP: '196.969.965.545' },
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