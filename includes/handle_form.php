<?php
include_once 'config.php';
$error_messages = array();
$success_messages = array();

if (empty($_POST))
{
    // initialize form
    $_POST['pseudo'] = '';
    $_POST['password'] = '';
    $_POST['email'] = '';
}

else
{
    $pseudo = trim(htmlspecialchars($_POST['pseudo']));
    $password  =  $_POST['password'];
    $password_confirm   =  $_POST['password_confirm'];
    $email   = trim(htmlspecialchars($_POST['email']));
    $inscription_verification = TRUE;

    // Function error pseudo
    if (empty($pseudo))
    {
        $inscription_verification = FALSE;
        $error_messages['pseudo'] = 'Please enter an pseudo';
    }

    if (empty($password || $password_confirm ))
    {
        $error_messages['password'] = 'Please enter a password';
    }

    // Error if password does not match
    elseif($password_confirm !== $password)
    {
        $inscription_verification = FALSE;
        $error_messages['password'] = 'Your password does not match';
    }

    // Else if it match protect the password
    else
    {

        $password_confirm = sha1($password_confirm);
    }

    //Error if email is empty OR the format is not adapted
    if(empty($email))
    {
        $error_messages['email'] = 'Please enter an email';
        $inscription_verification = FALSE;
    }

    if(!empty($email))
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error_messages['email'] = 'Your email is not correct.';
            $inscription_verification = FALSE;
        }

    }
    if ($inscription_verification== TRUE) {
        $prepare = $pdo -> prepare('INSERT  INTO  inscription(pseudo, password, email) VALUES (:pseudo, :password, :email)');
        $prepare->bindValue(':pseudo', $pseudo);
        $prepare->bindValue(':password', $password_confirm);
        $prepare->bindValue(':email', $email);
        $prepare->execute();

        $success_messages[] = 'Welcome ' . $_POST['pseudo'] . '. You are now registred.';
        header('Location: views/pages/todo_form.php');

        echo 'ok';
    }
    else
    {
        header('Location: index.php');
    }

}
