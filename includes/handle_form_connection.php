<?php

include_once 'config.php';
$error_messages_connection = array();
$success_messages_connection = array();

// IF FORM IS EMPTY THAN DO :
if(empty($_POST))
{
    $_POST['pseudo_connection'] = '';
    $_POST['password_connection'] = '';
}

// IF FORM ISN'T EMPTY THAN DO :
else
{
    $pseudo_connection = $_POST['pseudo_connection'];
    $password_connection  =  $_POST['password_connection'];
    $password_connection = sha1($password_connection);

    $query = $pdo->query("SELECT * FROM inscription WHERE pseudo='$pseudo_connection'");
    $donnee = $query -> fetchALL();


    if(empty($pseudo_connection))
    {
        $error_messages_connection['pseudo_connection'] = 'Please enter a pseudo for connection';
    }

    if (empty($password_connection))
    {
        $error_messages_connection['password_connection'] = 'Please enter a password for connection';
    }

    foreach($donnee as $single_donnee){
        // IF ALL IS GREAT THAN  GO INVENTARY
        if ($single_donnee->password == $password_connection)
        {
            $success_messages_connection['password_connection'] = 'Vous êtes de retour';
            header('Location: todo_form.php');

        }
        else
        {
            header('Location: connection.php');
        }
    }
}
