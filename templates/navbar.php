
<?php include './config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>Posts website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<section class="container">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo2.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
           <nav class="nav navbar navbar-expand-sm justify-content-center">
               <li class="nav-item">
               <a class="nav-link" href="<?php echo BASE_URL;?>">Home</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo BASE_URL;?>manage-post.php">Manage posts</a>
                   
               </li>
               <li class="nav-item">
               <a class="nav-link " href="#">About me</a>
                   
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#">Contact me</a>
                   
               </li>
           </nav>
            

            
        </div>
    </section>