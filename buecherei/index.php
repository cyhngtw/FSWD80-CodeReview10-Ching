<!DOCTYPE html>
<html>
<head>
   <title>Library </title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>
<body>
<h1 class="text-white bg-info text-center">Library data system</h1>
<div class ="container">

  

  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">login</a>
  </li>
 
 
</ul>
  <a href= "create.php"><button type="button" >Add media</button></a>
  <div class="table-responsive">
    <table class="table table-bordered table-stripe">
      <thead>
               <th>Media ID</th>
               <th>Title</th>
               <th>Image</th>
               <th>Type</th>
               <th>ISBN</th>
               <th>Description</th>
               <th>Published year</th>
               <th>Author Name</th>
               <th>Author Surame</th>
               <th>Publisher</th>
               <th>Publisher address</th>
               <th>size of Publisher</th>
               <th>Edit</th>
      </thead>
      <tbody>
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
             $add = $_POST['address'];
             $si = $_POST['size'];

          print_r($title);
          print_r($type);
          print_r($ISBN);
          print_r($description);
          print_r($pub_year);
          print_r($author_name);
          print_r($author_surname);
          print_r($publisher);
          print_r($address);
          print_r($size);
      

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

           $q = "INSERT INTO media (title, image, type, ISBN,  description, pub_year, author_name, author_surname, publisher, address, size) VALUES ('$ti', '$destinationfile', '$ty', '$IS','$des','$py','$an','$as','$pub','$add','$si')";

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
              <td><?php echo $result['title']; ?> </td>
              <td><img src="uploads/<?php echo $result['image']; ?>" height="100px" width="100px"></td>
              <td><?php echo $result['type']; ?> </td>
              <td><?php echo $result['ISBN']; ?> </td>
              <td><?php echo $result['description']; ?> </td>
              <td><?php echo $result['pub_year']; ?> </td>
              <td><?php echo $result['author_name']; ?> </td>
              <td><?php echo $result['author_surname']; ?> </td>
              <td><?php echo $result['publisher']; ?> </td>
              <td><?php echo $result['address']; ?> </td>
              <td><?php echo $result['size']; ?> </td>
              <td><a href="update.php?id=<?= $result['id'] ?>"><button type='button'>Edit</button></a>
                  <a href="delete.php?id=<?php echo $result['id'] ?>"><button type='button'>Delete</button></a>
                  <a href="item.php?id=<?php echo $result['id'] ?>"><button type='button'>Details</button></a>
              </td>


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