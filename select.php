<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/new.js"></script>
    
     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <script src="./js/jquery.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     
</head>
<body>
    
    <!-- Header is Start -->
    <div id="header container ">
        <div class="navbar navbar-default ">
            <div class="navbar-brand">
                Translator
            </div>
            <div class="navbar-header navbar-centre">
                <ul class=" nav navbar-nav ">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="insert.php">Insert</a></li>
                    <li><a href="select.php">Record</a></li>
                   
                       
                </ul>
            </div>            
        </div>
    </div>
    
  <div class="mainBox">
      <div>
          <h2> <?php  echo @$_GET['deleted'];?></h2>
      </div>
     <div id="table-show">
         <table class="table table-default table-hover table-justified">
             <tr>
                 <th>Serial No</th>
                 <th>English</th>
                 <th>Roman</th>
                 <th>France</th>
                 <th>Delete</th>
             </tr>
             
         
         


<?php

    mysql_connect("localhost","root","");
    mysql_select_db("database");
    $query = "SELECT * FROM lang ";
   
    $run = mysql_query($query);
  
  
   while($row = mysql_fetch_array($run)){
       $id = $row['s_no'];
       $english = $row['english'];
       $roman = $row['roman'];
       $france = $row['france'];
      
       
?>  
             <tr>
                    <td><?php echo $id;   ?></td>
                    <td><?php echo $english;   ?></td>
                    <td><?php echo $roman;   ?></td>
                    <td><?php echo $france;   ?></td>
                    <td ><a href="./database/delete.php?del=<?php echo $id ?>" ><span class="glyphicon glyphicon-send"></span> Delete</a></td>
                    
            </tr>
   <?php } ?>
         </table>

     </div>
      
  </div>
  
 
  
  
</body>
</html>