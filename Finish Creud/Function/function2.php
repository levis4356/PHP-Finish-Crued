<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
$connection = new mysqli('localhost', 'root', '', 'db_php_student', 3306);
function addproduct(){
    global $connection;
    if(isset($_POST['btn-submit'])){
        $name = $_POST['_name']; // Retrieve product name
        $image = $_FILES['_file']['name'];
        $price = $_POST['_price'];
        $qty = $_POST['_quanity']; // Corrected variable name
        $category = $_POST['_category'];
        $brand = $_POST['_brand'];
        
        if(!empty($name) && !empty($image) && !empty($price) && !empty($qty) && !empty($category) && !empty($brand)) {
            $thumbnail = date('YmdHis') . '-' . $image;
            image($thumbnail);
            $sql_insert = "INSERT INTO `tableproduct1` 
                           (`name`, `image`, `price`, `quantity`, `category`, `Brand`)
                           VALUES ('$name', '$thumbnail', '$price', '$qty', '$category', '$brand')";
            $result = $connection->query($sql_insert);      
if($result){
        echo '
        <script>
            $(document).ready(function(){
                swal({
                    title: "Congratulation",
                    text: "Your Data Has Been Store in Database",
                    icon: "success",
                    button: "Close",
                  });
            })
        </script>
        ';
}
    }
    else{
        echo '
        <script>
            $(document).ready(function(){
                swal({
                    title: "Failed",
                    text: "Something Wrong",
                    icon: "error",
                    button: "Close",
                  });
            })
        </script>
        ';
    }
      
      
    }
 }

addproduct();

function image($picture){
    $path_file = "../image/" . $picture;
    move_uploaded_file($_FILES['_file']['tmp_name'], $path_file);
}
function showproduct(){
global $connection;
    $sql_show = "SELECT * FROM `tableproduct1`
                    WHERE 1 
                    ORDER BY `id` ASC ";
$result = $connection->query($sql_show);

while($row = mysqli_fetch_assoc($result)){
    echo ' <tr>
                <td>'.$row['id'].'</td>
                 <td>'.$row['name'].'</td>
                <td><img src="../image/'.$row["image"].'"class="rounded-3"></td>
                <td>'.$row['price'].'</td>
                <td>'.$row['quantity'].'</td>
                <td>'.$row['category'].'</td>
                <td>'.$row['Brand'].'</td>
                 <form method="post">
                <td>
                <input type="hidden" name="remove_id" value='.$row['id'].'>
                <button type="submit"  name="btn-del" class="btn btn-outline-danger"><i class="fa-solid fa-trash me-2"></i></button>
                <button type="button" id="open_edit" name "btn-edit" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen me-2"></i></button>
                </form>
                    </td>
            </tr>';
}
}
    function delproduct(){
        global $connection;
        if(isset($_POST['btn-del'])){
            $remove_id = $_POST['remove_id'];
            $sql_remove = "DELETE  FROM `tableproduct1`
                           WHERE `id` = '$remove_id'  ";
                           $result = $connection -> query($sql_remove);
                            if ($result){
            echo '
        <script>
            $(document).ready(function(){
                swal({
                    title: "Congratulation",
                    text: "Your Data Has Been Delete From Database",
                    icon: "success",
                    button: "Close",
                  });
            })
        </script>
        ';
            }
 }
       

}
    delproduct();
   

function editproduct() {
    global $Connection;
    if(isset($_POST['btn-edit'])) {
        $update_id = $_POST['_id'];
        $name = $_POST['_name'];
        $image = $_FILES['_file']['name'];
        $price = $_POST['_price'];
        $qty = $_POST['_quanity']; // Corrected variable name
        $category = $_POST['_category'];
        $brand = $_POST['_brand'];
        if( !empty($update_id) && !empty($name) && !empty($image) && !empty($price) && !empty($qty) && !empty($category) && !empty($brand)) {
            $thumbnails = date('YmdHis') . '-' . $image;
            images($thumbnails);
            $sql_edit = "UPDATE `tableproduct1` 
                         SET `name` = '$name',
                             `image` = '$thumbnails',
                             `price` = '$price',
                             `quantity` = '$qty',
                             `category` = '$category',
                             `brand` = '$brand'
                         WHERE `id` = '$update_id'";
            $result = $Connection->query($sql_edit);
            if($result) {
                echo '
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Congratulation",
                            text: "Your Data Has Been Updated In Database",
                            icon: "success",
                            button: "Close",
                          });
                    })
                </script>
                ';
            }
        }
    }
}
editproduct();
function images($picture) {
    $path_file = "../image/" . $picture;
    move_uploaded_file($_FILES['_file']['tmp_name'], $path_file);
}

?>