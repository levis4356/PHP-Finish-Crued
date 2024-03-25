<?php 
include '../Function/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include '../Link/boostrap.php';
    include '../Link/icon.php';
    ?>


    <title>Document</title>
    <link rel="stylesheet" href="../Link/style.css">
    
</head>
<body>
    <div class="container py-5 border border-5 mt-4 d-flex justify-content-between">
    <h2 class="text-center">Product Management</h2>
    <button id="open_add" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus me-2"></i>Add Product</button>
    </div>
    <table class="table table-middle text-center" style="table-layout: fixed;">
    <th>id</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Action</th>
    <tbody>
  
    <?php
    showproduct();

    
    ?>
    </tbody>
    </table>
</body>
</html>
<?php 
include '../Model/model.php';
?>
<script>
$(document).ready(function(){
    $('#open_add').click (function(){
        $('#btn_update').hide();
        $('#btn_add').show();

    });
  $("body").on("click","#open_update",function(){
    $('#btn_update').show();
    $('#btn_add').hide();
var id       = $(this).parents('tr').find('td').eq(0).text();
var name     = $(this).parents('tr').find('td').eq(1).text();
var category = $(this).parents('tr').find('td').eq(2).text();
var price    = $(this).parents('tr').find('td').eq(3).text();

    $("#id").val(id);
    $("#name").val(name);
    $("#category").val(category);
    $("#price").val(price);
  })
})

</script>