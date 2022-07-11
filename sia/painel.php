<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/painel.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA - Sistema Interno de Auditoria</title>
    <style>

    </style>
</head>
<body>
   
    <div class="wrapper">
       <div class="section">
    <div class="top_navbar">
      <div class="hamburger">
        <a href="#">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
    <div class="container">
      <p></p>
    

    </div>
  </div>
        <div class="sidebar">
            <div class="profile">
                <img src="https://play-lh.googleusercontent.com/xwOwr6c-CXG3D6m8CuA-MhlExWSsHhkjqsUjDDIA6dWdt0xZBaF0avXnEvvyhA0GdhVg">
                <h3>SIA</h3>
                <p>Auditoria de Suprimentos</p>
            </div>
            <ul>
                <li>
                    <a href="painel.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="cadastro_nc.php">
                        <span class="icon"><i class="fas fa-clipboard"></i></span>
                        <span class="item">Não Conformidade</span>
                    </a>
                </li>
                <li>
                    <a href="relatorio.php">
                        <span class="icon"><i class="fas fa-file-alt"></i></span>
                        <span class="item">Relatório</span>
                    </a>
                </li>
                <li>
                    <a href="planner.php">
                        <span class="icon"><i class="fas fa-calendar-check"></i></span>
                        <span class="item">Planner</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="item">Sair</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
 <script>
    var hamburger = document.querySelector(".hamburger");
         hamburger.addEventListener("click", function(){
         document.querySelector("body").classList.toggle("active");
        })
 </script>
</body>
</html>