
<?php include './templates/navbar.php'; ?>

    
    <!-- menu section end -->

    <!-- main content section starts -->
 <section class="main-content">
      <div class="container mt-5">
          <h1>update post</h1>
          <br>
          <?php
          $id= $_GET['id'];

              $query="SELECT * FROM posts WHERE id =$id LIMIT 1";
                   //exec
               $res=mysqli_query($conn, $query);
 
        if($res==true){
                $rows= mysqli_fetch_assoc($res);
                $title=$rows['title'];
                $content=$rows['content'];
                $author=$rows['author'];
                
        }     else{
           header('location:'.BASE_URL.'index.php');
        }
        
          ?>
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg">
                  <form method="post" action="" enctype="multipart/form-data">
                      
                 
  <div class="form-group">
    <label for="uname">title:</label>
    <input type="text" class="form-control" id="uname" placeholder="post Name" name="title" value="<?php echo $title;?>">
  </div>
  <div class="form-group">
    <label for="uname">Author:</label>
    <input type="text" class="form-control" id="uname" placeholder="author" name="author" value="<?php echo $author;?>">
  </div>
  <div class="form-group">
    <label for="uname">content:</label>
    <textarea name="content" id="content" cols="50" rows="10"><?php echo $content;?></textarea>
  </div>

  <br>
    <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
    <input type="hidden" name="id" value="<?php echo $id;?>">
  <input type="submit" class="btn btn-primary" name="submit" value="update post">
</form></div>
              <div class="col-lg-3"></div>
          </div>
        
      </div>
 </section>

 <?php 
 if(isset($_POST["submit"])){
     $id=$_POST["id"];
     $title=$_POST["title"];
     $content=$_POST["content"];

   
     //update database

     $query2= "UPDATE posts SET 
     title='$title',
     content='$content'
     WHERE id=$id
     ";
     $res2=mysqli_query($conn, $query2);
    if($res2 == true){
      

        $_SESSION['update']="
        <div style='border: 1px solid greenyellow;
        color: green; width: 300px;'>post info Updated successfully</div>";
    header('location:'.BASE_URL.'index.php');

    }else{
        $_SESSION["update"]="
<div class='error' style=' border: 1px solid rgb(224, 65, 65);
color: rgb(206, 55, 55);width: 300px;'>post failed to Update</div>
";
    header('location:'.BASE_URL.'index.php');
    }

 }
 
 
 ?>
    <!-- main content section end -->

    <!-- footer section starts -->
 <?php include './templates/footer-section.php'; ?>
    <!-- footer section ends -->