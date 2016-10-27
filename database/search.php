<?php
 
 
         mysql_connect("localhost","root","");
         mysql_select_db("database"); 
        
          $q = $_REQUEST["q"];
          $result = "";
          $q =strtolower($q);
          $search = explode(' ', $q);
           
         for($i=0; $i<count($search); $i++){
              $query_search ="SELECT * from lang where english= '$search[$i]' ";
              $run = mysql_query($query_search);
               
               while($row=mysql_fetch_array($run)){
                 $english =$row['english'];
                 $roman = $row['roman'];
                 $france = $row['france'];
                 $result = $result . " " . $roman ;
    
                     }
                 
        
         }  
                 echo $result;
             
         
       
 ?>             