<?php
include('./config.php');

//get the id of post

 if(isset($_GET['id'])){
     $id=$_GET['id'];   
   

            $q6="DELETE FROM posts WHERE id=$id";
        //exec
        $result6=mysqli_query($conn, $q6);

            if($result6 ==true){
                //create seesion var to display message
                $_SESSION["delete"]="
            <div class='success' style='
            color: green; width: 300px;'>post deleted successfully</div>
            ";

                header('location:'.BASE_URL.'index.php');
            }else{
                $_SESSION["delete"]="
            <div class='error' style=' 
            color: rgb(206, 55, 55);width: 300px;'>failed to delete</div>
            ";
                header('location:'.BASE_URL.'index.php');

            }
}
else{
   
    header('location:'.BASE_URL.'index.php');

}
?> 
