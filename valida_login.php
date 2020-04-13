<?php

    session_start();




    //variavel que verifica se a autenticação foi realizada
    $user_aut = false;

    //users do sistema sem bd

    $users_app = array(

        array(
            'email' => "admin@gmail.com",
            'password' => 'admin123'
         ),
         
        array(
            'email' => "user@gmail.com",
            'password' => '123'
         ),

    );

    foreach($users_app as $user){

        if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
            $user_aut = true;
        }   

    }

    if($user_aut){

        echo 'User authenticated';
        
        $_SESSION['authenticated'] = 'SIM';
        $_SESSION['x'] = 'valor x';
        $_SESSION['y'] = 'valor y';
        header('Location: home.php');

    }  else {
        $_SESSION['authenticated'] = 'Não';
        header('Location: index.php?login=erro2');
    }
    
  

  
?>