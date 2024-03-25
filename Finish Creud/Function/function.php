<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
$Connection = new mysqli('localhost','root','','db_php_student');
function addproduct(){
   global $Connection;
   if(isset($_POST['btn-submit'])){
    $name = $_POST['_name'];
    $category = $_POST['_category'];
    $price = $_POST['_price'];
    if(!empty($name) && !empty($category) && !empty($price)){
      $sql_add = "INSERT INTO `tableproduct` (`name`,`category`,`price`)
                 VALUES('$name','$category','$price')";
    $result = $Connection -> query($sql_add);
      if($result){

                 echo '
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Congratuation",
                            text: "Your Data Has Been Store in Database",
                            icon: "success",
                            button: "Close",
                          });
                    })
                </script>';
    }
        }
   else{
    echo '
    <script>
                $(document).ready(function(){
                    swal({
                        title: "You Forget To Fill Something in Field",
                        text: "Your Data has not been store in database",
                        icon: "error",
                        button: "Close",
                      });
                })
            </script>';

   }    
          
 
}
 
         }
            

      
       
addproduct();
$Connection = new mysqli('localhost','root','','db_php_student');
function showproduct(){
global $Connection;
        $mysql  = "
        SELECT * FROM `tableproduct` 
        WHERE 1 
        ORDER BY `id` ASC
    ";
    $result = $Connection ->query($mysql);
        while($row = mysqli_fetch_assoc($result)){
            echo '
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['category'].'</td>
            <td>'.$row['price'].'</td>
            <form method="post">
            <td>
            <input type="hidden" name="remove_id" value='.$row['id'].'>
            <button id="open_update" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen me-2"></i>Edit</button>
            <button type="submit"  name="btn_del" class="btn btn-outline-danger"><i class="fa-solid fa-trash me-2"></i>Delete</button>
    </td>
    </form>
        </tr> 
            ' ;
        }
        
       
}
$Connection = new mysqli('localhost','root','','db_php_student');
function delproduct(){
  global $Connection;
        if(isset($_POST['btn_del'])){
            $remove_id = $_POST['remove_id'];

            $sql_remove = "
                                DELETE  FROM `tableproduct`
                                WHERE `id` = '$remove_id';
                          "; 

            $result     =  $Connection -> query($sql_remove);
            if($result){
                echo '
                            <script>
                                $(document).ready(function(){
                                    swal({
                                        title: "Removing Success",
                                        text: "You remove data successfully",
                                        icon: "success",
                                        button: "Confirm",
                                      });
                                })
                            </script>
                    ';

            }
        }
    }
delproduct();
$Connection = new mysqli('localhost','root','','db_php_student');
function editproduct(){
global $Connection;
if (isset($_POST['btn_product'])){
    $update_id = $_POST['_id'];
    $name = $_POST['_name'];
    $category = $_POST['_category'];
    $price = $_POST['_price'];
     if(!empty($name) && !empty($category) && !empty($price)){
                   $sql_edit = "UPDATE `tableproduct` 
             SET `name` = '$name',
                 `category` = '$category',
                 `price` = '$price'
             WHERE `id` = $update_id";

                 $edit = $Connection->query($sql_edit);
                
 if($edit){
     echo '
                            <script>
                                $(document).ready(function(){
                                    swal({
                                        title: "Update Product",
                                        text: "Your Data  product Update successfully",
                                        icon: "success",
                                        button: "Confirm",
                                      });
                                })
                            </script>';
 }
  
                 }
    else{
        echo '
        <script>
                $(document).ready(function(){
                    swal({
                        title: "You Forget To Fill Something in Field",
                        text: "Your Data has not been store in database",
                        icon: "error",
                        button: "Close",
                      });
                })
            </script>';
    }

}

}
   editproduct(); 
?>