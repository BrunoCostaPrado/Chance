<?php
    if(isset($_POST['enviar']) && isset($_FILES['my_image'])){
        include 'conectarDB.php';
        echo"<pre>";
        print_r($_FILES['my_image']);
        echo"</pre>";

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];
        if($error === 0){
            if($img_size > 125000000){
                $em = "arquivo grande demais";
                header("Location:perfil-maquiagem.php?error=$em");
            }else{
                $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","jpeg","png","gif");

                if(in_array($img_ex_lc,$allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc ;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);

                    $sql = "INSERT INTO imagens(img_url)VALUES('$new_img_name')";
                    mysqli_query($conexao,$sql);
                    header("Location:perfil-maquiagem.php");
                }else{
                    $em = "tipo de arquivo nao reconhecido";
                    header("Location:perfil-maquiagem.php?error=$em");
                }
            }
        }else{
            $em = "ocorreu um erro desconhecido";
            header("Location:perfil-maquiagem.php?error=$em");
        }
    }

?>