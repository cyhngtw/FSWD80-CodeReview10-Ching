<?php

require_once 'actions/db_connect.php';


?>

<!DOCTYPE html>
<html>
<head>

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Wien library</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="signin.css" rel="stylesheet">

</head>
<body >
  <div class="col-12 border-1 " >
     <img src="uploads/header.jpg" height="200px" class=" w-100">
   </div><!-- /header -->
  
           
<div class="container d-flex ">

  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">login</a>
  </li>
    <div class="row">
        
   
    <?php
           $con = mysqli_connect('localhost','root',"","cr10_chingying_huang_biglibrary");

        if($_POST){
            
             $ti = $_POST['title'];
             $files =$_FILES['file'];
             $ty =$_POST['type'];
             $IS = $_POST['ISBN'];
             $des = $_POST['description'];
             $py = $_POST['pub_year'];
             $an= $_POST['author_name'];
             $as = $_POST['author_surname'];
             $pub = $_POST['publisher'];
             $st = $_POST['status'];

          print_r($title);
          print_r($type);
          print_r($ISBN);
          print_r($description);
          print_r($pub_year);
          print_r($author_name);
          print_r($author_surname);
          print_r($publisher);
          print_r($status);
      

          echo "<br>";

          $filename =$files['name'];
          $fileerror =$files['error'];
          $filetmp =$files['tmp_name'];

          $fileext = explode('.',$filename);
          $filecheck = strtolower(end($fileext));

          $fileextstored = array('jpg','png','jpeg','gif');

          if(in_array($filecheck, $fileextstored)){
           $destinationfile = 'uploads/'.$filename;
           move_uploaded_file($filetmp,$destinationfile);

           $q = "INSERT INTO media (title, image, type, ISBN,  description, pub_year, author_name, author_surname, publisher, status) VALUES ('$ti', '$filename', '$ty', '$IS','$des','$py','$an','$as','$pub','$st')";

           $query = mysqli_query($con, $q);
         }
       }
     
           $displayquery = "select * from media" ;
           $querydisplay = mysqli_query($con, $displayquery );

           $row = $querydisplay->fetch_all(MYSQLI_ASSOC);
           foreach ($row as $result) {
            ?>
           
<div class="card col-4 pt-2" >
<img class="card-img-top" src="uploads/<?php echo $result['image']; ?>" height="200px" width="100px" style="object-fit:cover">
  
  <div class="card-body">
    <h4 class="card-title"><?php echo $result['title']; ?></h4>
    <p class="card-text"><?php echo $result['type']; ?></p>
    <p class="card-text"><?php echo $result['ISBN']; ?></p>
    <p class="card-text"><?php echo $result['description']; ?></p>
    <p class="card-text"><?php echo $result['pub_year']; ?></p>
    <p class="card-text"><?php echo $result['author_name']; ?></p>
    <p class="card-text"><?php echo $result['author_surname']; ?></p>
    <p class="card-text"><?php echo $result['publisher']; ?></p>
    
  </div>
  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
    
    <div class="card-text">
         
    </div>
    <a href="#" class="btn btn-info">book it</a>
  </div>
</div>
<?php 
} 
?>
 </div>     
</div>   
 
 <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-info">© 2019 Copyright:Wien Library</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>