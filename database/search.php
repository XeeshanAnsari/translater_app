<?php
 
         mysql_connect("localhost","root","");
         mysql_select_db("database"); 
        if (isset($_POST['search'])){
          $search  = $_POST['english'];
          
          $query_search =" SELECT * from lang where english = '$search' ";
        
          
         if(mysql_query($query_search)){
              $run = mysql_query($query_search);      

        
          while($row=mysql_fetch_array($run)){
              $english =$row['english'];
              $roman = $row['roman'];
              $france = $row['france'];
              
              echo "<script> window.open('../index.php?roman=$roman','_self')</script>" ;
                          
                    }
         
              }else{
                    echo "<script> window.open('../index.php?roman=Not found','_self')</script>" ;
              }
         
      }
 ?>