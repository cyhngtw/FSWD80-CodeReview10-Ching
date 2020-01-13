<!DOCTYPE html>
<html>
<head>
   <title>Library </title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/473562d7d7.js" crossorigin="anonymous"></script>
   
</head>
<body>
  <div class="col-12 border-1 " >
     <img src="uploads/header.jpg" height="200px" class=" w-100">
     <h1 class="text-white bg-info text-center p-1">Library data system</h1>
   </div><!-- /header -->

<div class ="container">


            <ul class="nav nav-tabs">
                    <li class="nav-item">
                       <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-secondary" href= "create.php" type="button">Add media</a>
                    </li>
           
           
              </ul>
 
  <div class="table-responsive my-2">
    <table class="table table-bordered table-stripe">
      <thead>
               <th>Media ID</th>
               <th>Edit</th>
               <th>Title</th>
               <th>Image</th>
               <th>Type</th>
               <th>ISBN</th>
               <th>Published year</th>
               <th>Author Name</th>
               <th>Publisher</th>
               <th>Publisher address</th>
               
      </thead>
      <tbody>
      <?php
           $con = mysqli_connect('localhost','root',"","cr10_chingying_huang_biglibrary");

        if($_POST){
            
             $ti = $_POST['title'];
             $files =$_FILES['file'];
             $ty =$_POST['type'];
             $IS = $_POST['ISBN'];
             $py = $_POST['pub_year'];
             $an= $_POST['author_name'];
             $pub = $_POST['publisher'];
             $add = $_POST['address'];
                         
      
          $filename =$files['name'];
          $fileerror =$files['error'];
          $filetmp =$files['tmp_name'];

          $fileext = explode('.',$filename);
          $filecheck = strtolower(end($fileext));

          $fileextstored = array('jpg','png','jpeg','gif');

          if(in_array($filecheck, $fileextstored)){
           $destinationfile = 'uploads/'.$filename;
           move_uploaded_file($filetmp,$destinationfile);

           $q = "INSERT INTO media (title, image, type, ISBN,  pub_year, author_name,  publisher, address) VALUES ('$ti', '$destinationfile', '$ty', '$IS','$py','$an','$pub','$add')";

           $query = mysqli_query($con, $q);
         }
       }
     
           $displayquery = "select * from media" ;
           $querydisplay = mysqli_query($con, $displayquery );

           $row = $querydisplay->fetch_all(MYSQLI_ASSOC);
           foreach ($row as $result) {
            
            ?>

            <tr>
              <td><?php echo $result['id']; ?> </td>
              <td class="justify-content-between pr-1"><a href="update.php?id=<?= $result['id'] ?>"><button type='button'><i class="fas fa-pencil-alt"></i></button></a>
                  <a href="delete.php?id=<?php echo $result['id'] ?>"><button type='button'><i class="far fa-trash-alt"></i></button></a>
                  <a href="item.php?id=<?php echo $result['id'] ?>"><button type='button'><i class="fas fa-info-circle"></i></button></a>
              </td>
              <td><?php echo $result['title']; ?> </td>
              <td><img src="<?php echo $result['image']; ?>" height="100px" width="100px"></td>
              <td><?php echo $result['type']; ?> </td>
              <td><?php echo $result['ISBN']; ?> </td>
              <td><?php echo $result['pub_year']; ?> </td>
              <td><?php echo $result['author_name']; ?> </td>
              <td><?php echo $result['publisher']; ?> </td>
              <td><?php echo $result['address']; ?> </td>
              


            </tr>
            <?php

          }

?>
      </tbody>
    </table>
     
  </div>
  
           

</div>
       
       
 <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-info">© 2019 Copyright:Wien Library</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
   


</body>
</html>