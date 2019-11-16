<!DOCTYPE html>
<html>
<head>
   <title>Library</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding: 10px 0px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Library managment</legend>
    
   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Title</th >
               <td><input  type="text" name="title"  placeholder="title" /></td >
           </tr>    
           <tr>
               <th>Type</th>
               <td><input  type="text" name= "type" placeholder="mediatype" /></td>
           </tr>
           <tr>
               <th>image</th>
               <td><input type="text"  name="image" placeholder =" " /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN " /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="description" placeholder ="description" /></td>
           </tr>
           <tr>
               <th>Published year</th>
               <td><input type="text"  name="pub_year" placeholder ="YYYY-MM-DD" /></td>
           </tr>
           <tr>
               <th>Author Name</th>
               <td><input type="text"  name="author_name" placeholder ="author_name " /></td>
           </tr>
           <tr>
               <th>Author_surname</th>
               <td><input type="text"  name="author_surname" placeholder ="author_surname " /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="publisher" placeholder ="publisher" /></td>
           </tr>
           <tr>
               <th>Address</th>
               <td><input type="text"  name="address" placeholder ="publisher_address" /></td>
           </tr>
           <tr>
               <th>Size</th>
               <td><input type="text"  name="size" placeholder ="small/medium/big " /></td>
           </tr>
           <tr>
               <td><button type ="submit">Add Media</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>