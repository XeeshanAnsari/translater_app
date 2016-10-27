<?php
 
         mysql_connect("localhost","root","");
         mysql_select_db("database"); 
            $search = $_POST['english'];
          
           $search =strtolower($search);
           $search1 = explode(' ', $search);
          
          for($i=0; $i<count($search1); $i++){
           
              $query_search ="SELECT * from lang where english='$search1[$i]' ";
              $run = mysql_query($query_search);
   
        
          while($row=mysql_fetch_array($run)){
              $english =$row['english'];
              $roman = $row['roman'];
              $france = $row['france'];
              
              $result = $result . " " . $roman;
              
                        }
          
             }
          echo "<script> window.open('../index.php?roman=$result ','_self')</script>" ;
       
 ?>             