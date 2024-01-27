<?php
session_start();
if(isset($_POST['valider']))
{
    if(!empty($_POST['pseudo'])AND !empty($_POST['mdp']))
    {
        $pseudo_par_defaut="admin";
        $mdp_par_defaut="admin1234";

        $pseudo_saisi=htmlspecialchars($_POST['pseudo']);
        $mdp_saisi=htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi==$pseudo_par_defaut AND $mdp_saisi==$mdp_par_defaut)
        { 
            $_SESSION['mdp']=$mdp_saisi;
            header('Location: index.php');
            


             
        }
        else echo"incorrecte";


       
    }
    else echo"veulez remplir";
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
            margin: 0;
            padding: 0;
            background: url('./image/connexionimage.jpg');
            background-size: cover;
            background-repeat: no-repeat; /* Pour éviter la répétition de l'image */
            font-family: Arial, sans-serif;

            box-sizing: border-box;
            color: black; /* Couleur du texte */

    }
    body{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;

    }
    .box
    {
        width:300px;
        height:400px;
        background:transparent;
        margin-top:120px;
        box-shadow:2px 2px 10px 0px #fff;
        backdrop-filter:blur(10px);
        border-radius:10px;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
    }
    form
    {
        margin-top:50px;
        background:transparent;

    }
    input
    {
        background:transparent;
        width:80%;
        height:35px;
        border:none;
        border-radius:10px;
        box-shadow:2px 2px 10px 0px #fff;
        padding:5px;



        
        box-sizing: border-box;



    }
    input.envoyer
    {
        cursor: pointer;
    }
    h2
    {
        background:transparent;
    }
   
    h4
    {
        background:transparent;
        padding-right:180px;
        
    }

  
</style>
</head>
<body>
    <div class="box">
    <h2>Log in?</h2>

    <form method="POST" action=""align="center">

        <label for=""><h4>Username</h4></label>
        <br>
        <input type="text"name="pseudo"placeholder="Enter username...">
        <br><br><br>
        <label for=""><h4>Password</h4></label>
        <br>
        <input type="password"name="mdp"placeholder="Enter password...">
        <br><br><br>
        <input class="envoyer" type="submit"name="valider">

    </form>
    </div>
    
</body>
</html>