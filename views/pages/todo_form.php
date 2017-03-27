<?php
include '../../includes/config.php';
include '../../includes/handle_form_todolist.php';
// DELET PRODUCT FONCTION
if(!empty($_GET['delete_id']))
{
    $prepare = $pdo->prepare('DELETE FROM todo WHERE id = :id');
    $prepare->bindValue('id', $_GET['delete_id']);
    $prepare->execute();
}
// EDIT PRODUCT FONCTION
if(isset($_GET['edit']))
{
    $prepar = $pdo->prepare('UPDATE todo SET todo_name = :todo_edited, details = :details  WHERE id = :id_origin');
    $prepar->bindValue(':todo_edited', $_GET['modify-todo-name']);
    $prepar->bindValue(':id_origin', $_GET['id_origin']);
    $prepar->bindValue(':details', $_GET['modify-details']);
    $prepar->execute();
    $success_messages_inventairy['edit'] = 'Votre produit à bien été modifié';
}
$todo_query = $pdo -> query('SELECT * FROM todo');
$todo = $todo_query  -> fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>form php</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.min.css">
</head>
<body>
    <div class="wrapper-inventary">
        <div class="hover-insersion">

            <!-- INSERTION ITEMS FORM :  -->
            <div class="insertion-items-form" >
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="field-input field-name">
                        <label for="todo-name">Title :</label>
                        <input required type="text" name="todo-name" id='todo-name'>
                    </div>
                    <div class="field-input areatext">
                        <label for="details" >Description</label>
                        <textarea name="details" id="details"></textarea>
                    </div>

                <div class="field-submit">
                    <input type="submit" name="submit" value="valider" class="valider">
                </div>
            </form>
        </div>

        <!-- SUCCESS MESSAGE : -->
        <div>
            <div class="messages success">
                <?php foreach($success_messages_inventary  as $_sucess):?>
                    <p><?php echo $_sucess ?></p>
                <?php endforeach ?>
            </div>
            <!-- ERROR MESSAGE : -->
            <div class="messages error">
                <?php foreach($error_messages_inventary as $_error):?>
                    <p><?php echo $_error ?></p>
                <?php endforeach ?>
            </div>
        </div>

        <!--  INSERTION ITEMS LOOP :-->
        <?php foreach($todo as $_todo): ?>
            <div class="products-wrapper">
                <div class="todo">


                    <div class="header-todo">
                        <div class="validate">
                            <a href="#" >done</a>
                        </div>
                        <h2 class="todo-named" ><?php echo $_todo->todo_name; ?></h2>
                        <div class="border-todo"></div>
                        <p class="details-entered"> todo : </p>
                        <p class="details-values"><?php echo $_todo->details; ?></p>
                        <a href="display_product.php?modify_id=<?= $_todo->id; ?>" title="edit_button" class="edit_button" >
                            <img src="../../src/imgs/edit.png" alt="edit"  class="edit_img">
                        </a>
                        <a href="?delete_id=<?= $_todo->id; ?>" class="delete_button" title="delete-button">
                            <img src="../../src/imgs/garbage.png" alt="delete"  class="delete_img">
                        </a>
                    </div>
                    <!-- <div class="image">
                        <img src='../../src/data/img//' alt="photo_de_produit" class="product-picture">
                    </div> -->


                </div>
            </div>
        <?php endforeach ?>
    </div>
</div><!-- TODO CONTAINER END -->
<script src="../../src/js/script.min.js" charset="utf-8"></script>
</body>
</html>
