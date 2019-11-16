<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Library </title>
   <link rel="stylesheet" href ="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">
   <style type ="text/css">
       .library {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="library">
   
   <a href= "create.php"><button type="button" >Add media</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>

       
           <tr>
               <th>Media ID</th>
               <th>Title</th>
               <th>ISBN</th>
               <th>Type</th>
               <th>image</th>
               <th>Description</th>
               <th>Published year</th>
               <th>Author Name</th>
               <th>Author Surame</th>
               <th>Publisher</th>
               <th>Publisher address</th>
               <th>size of Publisher</th>
               <th>Edit</th>
           </tr>
       </thead>
       <tbody>
            <?php
           $sql = "SELECT * FROM media ORDER BY id";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['id']."</td>
                       <td>" .$row['title']."</td>
                       <td>" .$row['ISBN']."</td>
                       <td>" .$row['type']."</td>
                       <td>" .$imageURL = 'uploads/'.$row["image"]                    

                       ."</td>
                       <td>" .$row['description']."</td>
                       <td>" .$row['pub_year']."</td>
                       <td>" .$row['author_name']."</td>
                       <td>" .$row['author_surname']."</td>
                       <td>" .$row['publisher']."</td>
                       <td>" .$row['address']."</td>
                       <td>" .$row['size']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</div>

</body>
</html>