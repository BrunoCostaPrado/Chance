<?php
 
    include 'conectarDB.php';
    $msg="";
    if(isset($_POST['Submit'])){
        
        $user = mysqli_real_escape_string($conexao,$_POST['user']);
        $email = mysqli_real_escape_string($conexao,$_POST['email']);
        $senha = mysqli_real_escape_string($conexao,$_POST['senha']);
        $code = mysqli_real_escape_string($conexao,md5(rand()));
        
        if(mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM registrarse WHERE email='{$email}'"))>0){
            $msg = '<script>alert("este email ja foi utilizado")</script>';
        }else{
            $sql = "INSERT INTO registrarse (user,email,senha,code) VALUES ('{$user}','{$email}','{$senha}','{$code}')";
            $result = mysqli_query($conexao,$sql);
            if($result){
                $msg = '<script>alert("um codigo de verificação foi enviado a seu email")</script>';
                
            }else{
                $msg = '<script>alert("houve algum erro no registro")</script>';
            }
        }
    }if(isset($_POST['Entrar'])){
        $email = mysqli_real_escape_string($conexao,$_POST['email']);
        $senha = mysqli_real_escape_string($conexao,$_POST['senha']);

        $sql = "SELECT * FROM registrarse WHERE email='{$email}' AND senha='{$senha}'";
        $result = mysqli_query($conexao,$sql);
        if(mysqli_num_rows($result)===1){
            header("location:index.html");
        }
    }
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" author" content="Bruno Costa Prado, Guilherme Oliveira, Beatriz Francelino, Camila Correia, Naiara Santiago, Jeferson Fagundes ">
    <meta name="description" content="DemoDay, Chance">
    <link rel="shortcut icon" href="assets/images/login-icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="Hope/style.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="google-signin-client_id" content="403727070129-ajucujjjbbe5g7m47ff760j50t8s4ov6.apps.googleusercontent.com">
    <script src="js/login.js"></script>
    <title>Conta</title>
</head>


<body style="background-color: #f7f6f4;">

    <header class="header">

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
    </header>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form" method="post">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="email" name="email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" required/>
                    </div>
                    <input type="submit" value="Entrar" class="btn solid" name="Entrar"/>
                    <p class="social-text">Ou faça Login com suas redes sociais</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="" class="sign-up-form" method="post">
                    <h2 class="title">Registre-se</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário" name="user" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="E-mail" name="email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" required/>
                    </div>
                    <input type="submit" class="btn" name="Submit"/>
                    <p class="social-text">Ou Registre-se usando suas redes sociais</p>
   
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" onclick="signOut();">Sign out</a>
                        <script>
                            function signOut() {
                                var auth2 = gapi.auth2.getAuthInstance();
                                auth2.signOut().then(function() {
                                    console.log('User signed out.');
                                });
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo por aqui?</h3>
                    <p>
                        Entre e conheça nossa plataforma rechada de conteúdos e serviços para você!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
              Registre-se
            </button>
                </div>
                <img src="assets/images/signup.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Já é um de nós?</h3>
                    <p>Faça seu Login e aproveite nossa plataforma.</p>
                    <a href="paginainicialautonomo.html"><button class="btn transparent" id="sign-in-btn">Entrar</button></a>
                </div>
                <img src="assets/images/signin.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
                <a href="contato.html" class="links "> <i class="fas fa-arrow-right "></i>Contato</a>
                <a href="condições.html" class="links "> <i class="fas fa-arrow-right "></i>Termos e condições</a>

            </div>

            <div class="box">
                <h3>Novidades</h3>
                <p>Se inscreva para receber novidades</p>
                <input type="email" placeholder="email" class="email">
                <input type="submit" value="Quero receber novidades" class="btn">
            </div>

        </div>

        <div class="credit"> © | <span>GRUPO 7 - PROA </span> | Todos os direitos reservados.</div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    <script src="js/script.js"></script>
    <div class="container">
        <div class="chatbox">
            <div class="chatbox__support">
                <div class="chatbox__header">
                    <div class="chatbox__image--header">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-5--v1.png" alt="image">
                    </div>
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header">Suporte</h4>
                        <p class="chatbox__description--header">Ola. Meu nome é Hope. Como posso ajudar?</p>
                    </div>
                </div>
                <div class="chatbox__messages">
                    <div></div>
                </div>
                <div class="chatbox__footer">
                    <input type="text" placeholder="Escreva sua mensagem...">
                    <button class="chatbox__send--footer send__button">Enviar</button>
                </div>
            </div>
            <div class="chatbox__button">
                <button><img src="Hope/images/chatbox-icon.svg" /></button>
            </div>
        </div>
    </div>
    <script src="Hope/app.js"></script>

</body>

</html>