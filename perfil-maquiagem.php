<?php include 'conectarDB.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=" author" content="Bruno Costa Prado, Beatriz Francelino, Naiara Santiago">

    <link rel="shortcut icon" href="assets/images/fem-icon.png" type="image/x-icon">
    <title>Perfil | Laura Maquiadora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="profile-page/style-perfil.css">

    <style>
        #enviar_img{
            margin-top: 15px;
        }
        .box-container2{
            float:left;
            width: 25%;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding:1rem 0;
        }
        .box2{
            overflow: hidden;
            height: 20rem;
            width:26rem;
            border-radius: 1rem;
            margin:2rem;
            cursor: pointer;
        }
        .box2:hover img{
            transition: 1s;
            transform: scale(1.2);
        }
        .box2::after{
           content: "";
           display: table;
           clear: both;
        }
        .images_uploads{    
            height:100%;
            width:100%;
            object-fit: cover;          
        }
    </style>
</head>

<body>
    <header class="header">
        <?php if(isset($_GET['error'])): ?>
            <p><?php echo $_GET['error'];?></p>
        <?php endif ?>
        <a href="index.html" class="logo"> <img src="image/logo.png" alt=""> </a>

        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="sobre copy.html">Sobre</a>
            <a href="categorias.html">Categorias</a>
            <a href="servicos.html">Serviços</a>
            <a href="blog.html">Blog</a>
            <a href="contato.html">Contato</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <a href="login.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Pesquise aqui...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="menu" class="fas fa-bars"></div>

    <section class="home" id="home">
        <img src="image/maquiagem.jpg" alt="">
        <h3>Olá!</h3>
        <h1>Eu sou <span>Laura</span></h1>
        <p>Desde de pequena, sempre fui apaixonada por maquiagem.Trabalhando com o que amo.</p>
        <a href="#about"><button class="btn">Conheça o meu negócio <i class="fas fa-user"></i></button></a>

    </section>
    <a href=""></a>
    <section class="about" id="about">

        <h1 class="heading"> Conheça o <span>meu negócio</span></h1>

        <div class="row">

            <div class="info">
                <h3> <span>Trabalho com agendamento e atendimento a domicílio</span> </h3>
                <h3> <span>Preço base:</span> 30R$ sem cílios / 35R$ com cílios</h3>
            </div>

        </div>

<<<<<<< HEAD:perfil-maquiagem.html
        <section class="portfolio" id="portfolio">

            <h1 class="heading">Meu <span>portfólio</span> </h1>
=======
<h1 class="heading">Meu <span>portfólio</span> </h1>
<div class="box">
    <center>
    <form action="upload.php" method="POST" enctype="multipart/form-data" id="enviar_img">
        <input type="file" name="my_image" id="mandar_img">
        <input type="submit" name="enviar" value="upload">
    </form>
    </center>
</div>
<div class="box-container">
>>>>>>> 6938e81d69146a78188b1973445335f73af23469:perfil-maquiagem.php

            <div class="box-container">

<<<<<<< HEAD:perfil-maquiagem.html
                <div class="box">
                    <img src="image/maquiagem1.jpg" alt="">
                </div>
=======
    <div class="box">
        <img src="image/maquiagem2.jpg" alt="">
    </div>
    <div class="box">
        <img src="image/maquiagem3.jpg" alt="">
    </div>
    <div class="box">
        <img src="image/maquiagem4.jpg" alt="">
    </div>
    <?php 
        $sql = "SELECT * FROM imagens ORDER BY id DESC";
        $res = mysqli_query($conexao,$sql);
            if(mysqli_num_rows($res)>0){
                while($images = mysqli_fetch_assoc($res)){ ?> 
                    <div class="box-container2">
                        <div class="box2">
                            <a href="uploads/<?=$images['img_url']?>"><img class="images_uploads" src="uploads/<?=$images['img_url']?>"></a>
                        </div>
                    </div>
    <?php }}?>  
</div>
</section>
<section class="contact" id="contact">
>>>>>>> 6938e81d69146a78188b1973445335f73af23469:perfil-maquiagem.php

                <div class="box">
                    <img src="image/maquiagem2.jpg" alt="">
                </div>
                <div class="box">
                    <img src="image/maquiagem3.jpg" alt="">
                </div>
                <div class="box">
                    <img src="image/maquiagem4.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="contact" id="contact">

            <h1 class="heading"> <span>Contato</span></h1>

            <div class="row">

                <div class="content">

                    <h3 class="title">Contato</h3>

                    <div class="info">
                        <h3> <i class="fas fa-envelope"></i> lalala@gmail.com </h3>
                        <h3> <i class="fas fa-phone"></i> +55 11 1234-5678 </h3>
                        <h3> <i class="fas fa-map-marker-alt"></i> Av. Tal, 592, Centro, São Paulo, SP </h3>
                        <h3>
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </h3>
                    </div>

                </div>

            </div>
        </section>
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>
                        <a href="#" class="logo"> <img src="image/logo.png" alt=""> </a>
                    </h3>
                    <p>Acompanhe nossas redes sociais</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <h3>links</h3>
                    <a href="# " class="links "> <i class="fas fa-arrow-right "></i>Voltar ao Inicio</a>

                </div>

                <div class="box">
                    <h3>newsletter</h3>
                    <p>Se inscreva para receber novidades</p>
                    <input type="email" placeholder="email" class="email">
                    <input type="submit" value="Quero receber novidades" class="btn">
                </div>

            </div>

            <div class="credit"> © | <span>GRUPO 7 - PROA </span> | all rights reserved </div>

        </section>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="profile-page/perfil.js"></script>
</body>

</html>