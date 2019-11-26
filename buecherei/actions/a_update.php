<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];
   $ti = $_POST['title'];
   $ty =$_POST['type'];
   $IS = $_POST['ISBN'];
   $des = $_POST['description'];
   $py = $_POST['pub_year'];
   $an= $_POST['author_name'];
   $as = $_POST['author_surname'];
   $pub = $_POST['publisher'];
   $add = $_POST['address'];
   $si = $_POST['size'];
   

   $sql = "UPDATE media SET 
   title = '$ti', 
   ISBN = '$IS', 
   type = '$ty', 
   description = '$des', 
   pub_year = '$py', 
   author_name = '$an', 
   author_surname = '$as', 
   publisher = '$pub', 
   address = '$add', 
   size = '$si' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 