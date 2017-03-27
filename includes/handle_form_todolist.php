<?php
include_once 'config.php';
$error_messages_inventary = array();
$success_messages_inventary = array();

if (empty($_POST['submit']))
{
    // initialize form
    $_POST['todo-name'] = '';
    $_POST['details'] = '';
    $_POST['submit'] = '';

}

else
{
    // FORMULAR VARIABLES
    $todo_name = trim(htmlspecialchars($_POST['todo-name']));
    $details   = trim(htmlspecialchars($_POST['details']));
    $submit   =  $_POST['submit'];


    // FILE VARIABLES
    // $tmpName = $_FILES['file-name']['tmp_name'];
    // $fileName = $_FILES['file-name']['name'];
    // $_POST['file-name'] = $fileName;
    // $file_name_posted =  trim($_POST['file-name']);
    //
    // $info_fichier = pathinfo($fileName, PATHINFO_EXTENSION);
    // $extensions_autorisees = array('jpg', 'jpeg', 'png');

    // TOTAL
    // $total = $price * $quantity;

    // IF ALL IS TRUE THEN ADD INVENTERY
    $verification = TRUE;

    // FUNCTION VERIFICATION OR  EMPTY :
    if (empty($submit))
    {
        $verification = FALSE;
        $error_messages_inventary['submit'] = 'Please press submit';
    }

    if (empty($todo_name))
    {
        $verification = FALSE;
        $error_messages_inventary['todo_name'] = 'Please enter a product name';
    }


    if(empty($details))
    {
        $verification = FALSE;
        $error_messages_inventary['details'] = 'Please enter the detailsof the todo';
    }
    //
    // if (!isset($_FILES['file-name']) AND $_FILES['file-name']['error'] != 0)
    // {
    //     $verification = FALSE;
    //     $error_messages_inventary['file'] = "Il y a une erreur dans votre fichier";
    //
    //     if ($_FILES['file-name']['size'] >= 8000000)
    //     {
    //         $verification = FALSE;
    //         $error_messages_inventary['file'] = "Votre fichier est trop lourd";
    //
    //         if (!in_array($info_fichier, $extensions_autorisees))
    //         {
    //             $verification = FALSE;
    //             $error_messages_inventary['file'] = "Fichier avec une mauvaise extension";
    //         }
    //     }
    // }

    if ($verification == TRUE)
    {

        $prepare = $pdo -> prepare('INSERT  INTO  todo(todo_name, details) VALUES (:todo_name, :details)');
        $prepare->bindValue(':todo_name', $todo_name);
        $prepare->bindValue(':details', $details);
        $prepare->execute();
        $todo_query = $pdo -> query('SELECT * FROM todo');
        $todo = $todo_query  -> fetchAll();

        $success_messages_inventary['success'] = 'Your product ' . $_POST['todo-name'] . ' has been added.';
    }

    if(!empty($_POST['delete_id']))
    {
        $prepare = $pdo->prepare('DELETE FROM todo WHERE id = :id');
        $prepare->bindValue('id', $_POST['delete_id']);
        $prepare->execute();
    }

}
