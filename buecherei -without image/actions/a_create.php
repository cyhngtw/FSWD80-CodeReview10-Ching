<?php 

require_once 'db_connect.php';

if ($_POST) {
   
   $ti = $_POST['title'];
   $IS = $_POST['ISBN'];
   $img = $_POST['image'];
   $des = $_POST['description'];
   $py = $_POST['pub_year'];
   $an= $_POST['author_name'];
   $as = $_POST['author_surname'];
   $pub = $_POST['publisher'];
   $add = $_POST['address'];
   $si = $_POST['size'];

   $sql = "INSERT INTO media (title, ISBN, image, description, pub_year, author_name, author_surname, publisher, address, size) VALUES ('$ti', '$IS', '$img','$des','$py','$an','$as','$pub','$add','$si')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?> 