<?php
include '../../includes/config.php';
$products_query_to_edit = $pdo -> query("SELECT * FROM todo WHERE id ='" . $_GET['modify_id']  . "'");
$products_info = $products_query_to_edit-> fetchAll();

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
    <!-- PRODUCT DATAS THAT YOU WANT TO EDIT AFTER CLICKING 'EDIT' -->
    <?php foreach($products_info as $_todo): ?>
        <div class="container">
            <div class="wrapper_edit">
                <div class="edit-header">
                    <h3 class="title"> Vous êtes sur le point de modifier : <span ><?php echo $_todo->todo_name; ?></span></h3>
                    <a href="#" title="close" class="close-edit">
                    </a>
                </div>
                <form action="todo_form.php" method="GET" enctype="multipart/form-data">
                    <input type="text" name="modify-todo-name"  value='<?php echo $_todo->todo_name; ?>' >
                    <textarea name="modify-details" value='' ><?php echo $_todo->details; ?></textarea>
                    <input  type="hidden" name="id_origin" value="<?php echo $_todo->id; ?>"/>
                    <input type="submit" name="edit" value="Edit" class="valid-button">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
