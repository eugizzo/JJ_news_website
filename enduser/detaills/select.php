<?php

include '../../dashmin-1.0.0/db/connection.php';

$id=$_GET['id'];

$query="SELECT * FROM `file` WHERE  id=$id";
$detail= $connect->query($query);
 
    while($row = $detail->fetch_assoc()){
        $imageURL = '../../dashmin-1.0.0/img/news/'.$row["file_name"];
      ?>  
    
                                      
     <?php                                
    }
   ?>


<?php

$id=$_GET['id'];

$query1="SELECT * FROM `event` WHERE  id=$id";
$detail= $connect->query($query);
 
    while($row = $detail->fetch_assoc()){
        $imageURL = '../../dashmin-1.0.0/img/event/'.$row["file_name"];
      ?>  
    
                                      
     <?php                                
    }
   ?>