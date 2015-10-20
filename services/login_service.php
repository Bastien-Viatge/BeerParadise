<?php
    session_start();
    require '../connexion-DB.php'; // coneccion al base de datos
    
    
    if($_POST['login'] !='' && $_POST['pwd'] !=''){
        
        
        $sth = $connection->prepare('SELECT * FROM user_list WHERE user_name = :login and password = :pwd');
        $sth->execute(array('login'=>$_POST['login'],'pwd'=>$_POST['pwd']));
        $i = 0;
        while($data = $sth->fetch()){
            $i += 1 ;
        }
        if($i==1){
            $_SESSION['user_name']=$_POST['login'];
        }
        
        //$data = $result->fetch();
        //$nbResult = mysql_num_rows($data);
        //echo $nbResult;
       // $_SESSION['user_name']=$_POST['login'];
        
    }
    header('location: ../index.php');
    ?>