<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Media</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       /* table  tr th {
           padding-top: 20px;
       } */
   </style>

</head>
<body>

<fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Title</th>
               <td><input type="text"  name="title" placeholder ="title" value="<?php echo $data['title'] ?>"  /></td>
           </tr>    
           <tr>
               <th>Type</th>
               <td><input type= "text" name="type"  placeholder="type" value ="<?php echo $data['type'] ?>" /></td >
           </tr>
           <tr>
               <th >ISBN</th>
               <td><input type ="text" name= "ISBN" placeholder= "ISBN" value= "<?php echo $data['ISBN'] ?>" /></td>
           </tr>
           <tr>
               <th >Image</th>
               <td><input type ="file" name= "file"  value= "<?php echo $file['image'] ?>" /></td>
           </tr>
           <tr>
               <th >Description</th>
               <td><input type ="text" name= "description" placeholder= "description" value= "<?php echo $data['description'] ?>" /></td>
           </tr>
           <tr>
               <th >Published Year</th>
               <td><input type ="text" name= "pub_year" placeholder= "pub_year" value= "<?php echo $data['pub_year'] ?>" /></td>
           </tr>
           <tr>
               <th >Author name</th>
               <td><input type ="text" name= "author_name" placeholder= "author_name" value= "<?php echo $data['author_name'] ?>" /></td>
           </tr>
           <tr>
               <th >Author surname</th>
               <td><input type ="text" name= "author_surname" placeholder= "author_surname" value= "<?php echo $data['author_surname'] ?>" /></td>
           </tr>
           <tr>
               <th >Publisher</th>
               <td><input type ="text" name= "publisher" placeholder= "publisher" value= "<?php echo $data['publisher'] ?>" /></td>
           </tr>
           <tr>
               <th >Address</th>
               <td><input type ="text" name= "address" placeholder= "address" value= "<?php echo $data['address'] ?>" /></td>
           </tr>
           <tr>
               <th >size</th>
               <td><input type ="text" name= "size" placeholder= "size" value= "<?php echo $data['size'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button></td>
               <td><a  href= "index.php"><button  type="button">Back</button></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?> 