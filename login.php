<?php
session_start();  // Iniciar sesión

// Verificar si ya ha iniciado sesión
if (isset($_SESSION['user_id'])) {
    header("Location: src/View/home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/*
font-family: 'Poppins', sans-serif;
*/

body{
    width: 100%;
    height: 100vh;
    position: relative;
}

.imgtop{
    width: 100%;
    height: 35vh;
}

.title{
    width: 100%;
    height: 8vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
}

.title span{
    color: #00BD08;
}

.all{
    width: 100%;
    height: 55vh;
    padding: 0 1rem;
    display: grid;
    grid-template-rows: 6vh 5vh 44vh;
    margin-top: 2vh;
}

.all h1{
    font-size: 4vh;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
}

.all h3{
    font-size: 2.8vh;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
}

.all form{
    display: grid;
    grid-template-rows: 8vh 8vh 4vh 8vh;
    align-items: center;
    padding: 2vh 0;
    gap: 1vh;
}

.all form h3{
    font-size: 2.8vh;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
    text-align: end;
    color: #00BD08;
}

.all form input:nth-child(1){
    width: 100%;
    height: 90%;
    background-color: #F5F5F5;
    border-radius: 15px;
    border: none;
    border-bottom: 2px solid #00BD08;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    padding-left: 10px;
    outline: none;
}

.all form input:nth-child(2){
    width: 100%;
    height: 90%;
    background-color: #F5F5F5;
    border-radius: 15px;
    border: none;
    border-bottom: 2px solid #00BD08;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    padding-left: 10px;
    outline: none;
}

.all form input:last-child{
    width: 100%;
    height: 90%;
    background-color: #0D986A;
    border-radius: 15px;
    border: none;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    outline: none;
    color: white;
    letter-spacing: 1px;
    margin-top: 3vh;
}

.last{
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 4vh;
    font-size: 2vh;
    color: #AFAFAF;
    text-align: center;
    font-family: 'Poppins', sans-serif;
font-weight: 600;
letter-spacing: 1px;
}

.last a{
    color: #013220;
    text-decoration: none;
}
    </style>
    <title>Login</title>
</head>
<body>

    <div class="imgtop">
        <img src="src/img/Rectangle 495.png" width="100%" height="100%">
    </div>

    <div class="title">
        Agro<span>Tisma</span>
    </div>

    <div class="all">
        <h1>Bienvenido</h1>
        <h3>Inicia sesión con tu cuenta</h3>

        <form action="src/Model/UserModel.php" method="post">
            <input type="text" name="username" id="" placeholder="Usuario">
            <input type="password" name="pass" id="" placeholder="Contraseña">
            <h3>Olvidastes tu contraseña?</h3>
            <input type="submit" name="submit" value="Iniciar Sesión">
        </form>

        
    </div>


    <div class="last">
        No tienes una cuenta? <a href="#">Registrate</a>
    </div>
</body>
</html>