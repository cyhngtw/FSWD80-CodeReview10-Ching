<?php
error_reporting(E_ERROR | E_PARSE);

  $conn = mysqli_connect("localhost","root","","cr10_chingying_huang_biglibrary");
// !!! "upload" is a name of database, please create one
  if(isset($_POST["submit"])){
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

   
//Check that we have a file and i don't have any error
if((!empty($_FILES["file"])) && ($_FILES['file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "jpg") && ($_FILES["file"]["type"] == "image/jpeg") && 
  ($_FILES["file"]["size"] < 35000000)) {
    //Determine the path to which we want to save this file
      $filename = dirname(FILE).'/uploads/'.$filename;
// !!!  "uploads" is a folder inside of the main folder
      //Check if the file with the same name is already exists on the server
      if (!file_exists($filename)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['file']['tmp_name'],$filename))) {
           $sql = "INSERT INTO media (title,  image, type, ISBN, description, pub_year, author_name, author_surname, publisher, address, size) VALUES ('$ti', '$filename', '$ty', '$IS','$des','$py','$an','$as','$pub','$add','$si')";

   

    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='create.php'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["file"]["name"]." already exists";
      }
  } else {
     echo "Error: Only .jpg images under 350Kb are accepted for upload";
  }
} else {
 echo "Error: No file uploaded";
}
}
?>



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

<div class ="container">

  <h1 class="text-white bg-info text-center">Library data system</h1>

  <div class="col-lg-8 m-auto d-block">
     <form method="post" enctype="multipart/form-data">
   
   <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control">
     
   </div>
     
   <div class="form-group">
      <!-- <label for="file">Image</label> -->
     <!--  <input type="file" name="file" id="file" class="form-control"> -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"  />
    Select image<input name="file" type="file" class="form-control" />
   </div>

    <div class="form-group">
      <label for="text">Type</label>
      <input type="text" name="type" id="text" class="form-control">
     
   </div>

    <div class="form-group">
      <label for="text">ISBN</label>
      <input type="text" name="ISBN" id="text" class="form-control">
     
   </div>

    <div class="form-group">
      <label for="text">Description</label>
      <input type="text" name="description" id="description" class="form-control">
     
   </div>

    <div class="form-group">
      <label for="text">Published Year</label>
      <input type="date" name="pub_year" id="pub_year" placeholder ="YYYY-MM-DD" class="form-control">
     
   </div>

    <div class="form-group">
      <label for="text">Author Name</label>
      <input type="text" name="author_name" id="author_name" class="form-control">
     
   </div>

   <div class="form-group">
      <label for="text">Author_surname</label>
      <input type="text" name="author_surname" id="author_surname" class="form-control">
     
   </div>
   

    <div class="form-group">
      <label for="text">Publisher</label>
      <input type="text" name="publisher" id="publisher" class="form-control">
     
   </div>

    <div class="form-group">
      <label for="text">Address</label>
      <input type="text" name="address" id="address" class="form-control">
     
   </div>

    <div class="form-group">
      <label for="text">Size</label>
      <input type="text" name="size" id="size" placeholder ="small/medium/big " class="form-control">
     
   </div>

   <input type="submit" name="submit" value="Sumbit" class="btn btn-info">
   </form>
  </div>
  
           

</div>
       
       
   
 


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>