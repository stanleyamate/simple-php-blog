
    
    <?php include './templates/navbar.php'; ?>

    <!-- menu section end -->

    <!-- main content section starts -->
 <section class="main-content">
      <div class="container-fluid mt-5">
          <h1>Manage Posts</h1>
          <br>
          <br>
          <?php
           if(isset($_SESSION["update"])){
              echo $_SESSION["update"];
              unset($_SESSION["update"]);
           }
          
          ?>
          <table class="table table-light">
     
             <thead class="thead-light">
                <tr>
                   <th>S.N</th>
                   <th>title</th>
                   <th>content</th>
                   <th>Author</th>
                   <th>Actions</th>
                   
                </tr>
             </thead>
              <tbody>
             <?php
             $sn=0;
                $sql5=" SELECT * FROM posts ORDER BY id DESC";//lastest order
            
                $res5=mysqli_query($conn, $sql5);
                $count= mysqli_num_rows($res5);
                if($count>0){
                     //order available
                     while ($row5=mysqli_fetch_assoc($res5)) {
                           $id=$row5["id"];
                           $title=$row5["title"];
                           $content=$row5["content"];
                           $author=$row5["author"];
                           ?>
                                 <tr>
                                    <td><?php echo $sn++;?></td>
                                    <td><?php echo $title;?></td>
                                    <td><?php echo $content;?></td>
                                    <td><?php echo $author;?></td>
                                    <td>
                                       <div class="d-flex">
                                       <a href="<?php echo BASE_URL;?>update-post.php?id=<?php echo $id;?>" type="button" class="btn btn-success ">Edit Post</a>
                                       <a type="button" href="<?php echo BASE_URL;?>delete-post.php?id=<?php echo $id;?>" class="btn btn-danger ml-4">Delete</a>
                                       </div>
                                    </td>
                                 </tr>
                           
                           <?php
                     }

                }
                else {
                   echo "<div class='danger'>Post not available</div>";
                }

             
             ?>
             </tbody>
          </table>
      </div>
 </section>
    <!-- main content section end -->

    <!-- footer section starts -->
 <?php include './templates/footer-section.php'; ?>
    <!-- footer section ends -->