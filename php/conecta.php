<?php
    
    $host = "127.0.0.1";
    $bd_user = "root"; //Deixe assim mesmo
    $bd_pass = "";     //Deixe assim mesmo
    $bd_name = "alumni";
    
    $conecta=mysqli_connect ('localhost' , 'root' , '' , 'dbprocast') or die  ('Erro de conexão'.mysqli_error());