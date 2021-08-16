
    <?php include './templates/navbar.php'; ?>


 
    <!-- menu section end -->

    <!-- main content section starts -->
 <section class="main-content">
      <div class="container mt-5">
          <h1>Add posts</h1>
          <br>
          <?php
         
          if(isset($_SESSION['add-post'])){
            unset($_SESSION['add-post']);
        }
          ?>
          
          <br>
          <div class="col-lg-3"></div>
          <div class="col-lg-6 offset-3">
          <form method="post" action="" enctype="multipart/form-data">
            
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="cat" placeholder="posts title" name="title">
            </div>
            <div class="form-group">
              <label for="title">Author:</label>
              <input type="text" class="form-control" id="cat" placeholder="author" name="author">
            </div>
            
              <div class="form-group">
                  <label for="content">content</label>
                  <textarea id="content" class="form-control" name="content" rows="5" cols="10"></textarea>
              </div> 
           
            <br>
            <input type="submit" class="btn btn-primary ml-5" name="submit" value="submit">
          </form>
          <?php

           if(isset($_POST["submit"])){

            $title=$_POST["title"];
            $content=$_POST["content"];
            $author=$_POST["author"];
           
          
           
     
             //sql query to save the data into the database
             $q2 = "INSERT INTO posts (
                 title, content,author) 
                  VALUES('$title', '$content', '$author')
                       ";
             #exec d query in d specified database
             $res2= mysqli_query($conn, $q2) or die(mysqli_error());
     
             if($res2 ==true){
                 //data inserted
                // echo "data inserted";
                //create a session variable
                $_SESSION['add-post']="posts added successfully";
                //REIDRECT TO MANAGE posts PAGE
                header("location:".BASE_URL.'add-post.php');

             }
             else{
                 // echo "failed ti insert data";
                 $_SESSION['add-post']="posts failed to add";
                 //REIDRECT TO ADD posts PAGE
                 header("location:".BASE_URL.'add-post.php');
             }
          }
          
       
                
          ?>
    </div>
          <div class="col-lg-3"></div>
      </div>
 </section>
    <!-- main content section end -->

    <!-- footer section starts -->
 <?php include './templates/footer-section.php'; ?>
    <!-- footer section ends -->