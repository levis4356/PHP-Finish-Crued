<?php
include '../Function/function2.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../Link/style2.css">
    <?php
    include '../Link/boostrap.php';
    include '../Link/icon.php';

    ?>
    <title>Product Management </title>
</head>

<body>
    <div class="container py-5 border border-5 d-flex justify-content-between mt-4">
        <h2>Product Management</h2>
        <button   type="submit" id="open_update" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus me-2"></i>Add Product </button>
    </div>
    <table class="table text-center" style="table-layout: fixed;">
        <th>#</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Quanity</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Action</th>
        <tbody>
            <?php 
            
            showproduct();
            
            ?>
        </tbody>

    </table>
</body>

</html>

<script>
$(document).ready(function(){
    $('#open_update').click(function(){
        $('#btn_edit').hide();
        $('#btn_add').show();
    });
$("body").on("click","#open_edit", function(){
    $('#btn_edit').show();
    $('#btn_add').hide();
})
var id = $(this).parent('tr').find('td').eq(0).text();
var name = $(this).parent('tr').find('td').eq(1).text();
var image = $(this).closest('tr').find('img').attr('src');
var price = $(this).parent('tr').find('td').eq(2).text(); // Corrected the index to 2 for price
var quantity = $(this).parent('tr').find('td').eq(3).text();
var category = $(this).parent('tr').find('td').eq(4).text();
var brand = $(this).parent('tr').find('td').eq(5).text();

// Setting values of input elements
$("#id").val(id);
$("#name").val(name);
$("#image").attr("src", image); // Corrected to set src attribute of img element
$("#price").val(price);
$("#quantity").val(quantity);
$("#category").val(category);
$("#brand").val(brand);


})
  
</script>





<?php
include '../Model/model2.php';

?>