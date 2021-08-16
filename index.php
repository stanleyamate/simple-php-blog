
    <!-- Navbar Section Starts Here -->
<?php include './templates/navbar.php';?>

    <!-- posts Section Starts Here -->
    <section class="post-menu">
        <div class="container">
            <h2 class="text-center text-secondary display-3">Posts</h2>
            <?php
              if(isset($_SERVER["update"])){
                  echo $_SERVER["update"];
                  unset($_SERVER["update"]);
              }
              if(isset($_SERVER["delete"])){
                  echo $_SERVER["delete"];
                  unset($_SERVER["deletee"]);
              }
              if(isset($_SERVER["remove"])){
                  echo $_SERVER["remove"];
                  unset($_SERVER["remove"]);
              }
            
            
            ?>
            <br>
                <br>
                <a type="button" href="<?php echo BASE_URL;?>add-post.php" class="btn btn-primary ml-4">Add Post</a>
                <br>
                <br>
            <div class="post-menu-box d-flex ">
            <?php
             $sn=0;
                $sql=" SELECT * FROM posts ORDER BY id DESC";//lastest order
            
                $res=mysqli_query($conn, $sql);
                $count= mysqli_num_rows($res);
                if($count>0){
                     //order available
                     while ($row=mysqli_fetch_assoc($res)) {
                           $id=$row["id"];
                           $title=$row["title"];
                           $content=$row["content"];
                           $author=$row["author"];
                           ?>
                                 
                          <div class="post m-3 p-5 " style="border-radius: 10px;background:#DCDCDC;">
                          <div class="post-menu-img">
                            <h4><?php echo $title;?></h4>
                           </div>
                <div class="post-details">
                    
                     <div class="d-block">
                            <p><?php echo $content;?></p>

                            <small class="post-detail">
                            by~<?php echo $author;?>
                            
                            </small>
                     </div>
                    <br>

                                <div class="d-flex">
                                       <a href="<?php echo BASE_URL;?>update-post.php?id=<?php echo $id;?>" type="button" class="btn btn-success ">Edit Post</a>
                                       <a type="button" href="<?php echo BASE_URL;?>delete-post.php?id=<?php echo $id;?>" class="btn btn-danger ml-4">Delete</a>
                                       </div>
                                </div>
                          </div>

                           <?php
                     }

                }
                else {
                   echo "<div class='danger'>Post not available</div>";
                }

             
             ?>
                
                
                
            </div>

            

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Posts</a>
        </p>
    </section>
   
    <!-- footer Section Starts Here -->
<?php include './templates/footer-section.php';?>
    
    <!-- footer Section Ends Here -->

