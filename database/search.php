<?php
 function target($q,$select,$target){
         $result = "";
                $q =strtolower($q);
                $search = explode(' ', $q);
           
         for($i=0; $i<count($search); $i++){
              $query_search ="SELECT * from lang where $select = '$search[$i]' ";
              $run = mysql_query($query_search);
               
               while($row=mysql_fetch_array($run)){
                 $show =$row[$target];
                     $result = $result . " " . $show ;
                    }
               }
                
                 $result = $result . " ....";
                 echo $result  ;
 }
       
         mysql_connect("localhost","root","");
         mysql_select_db("database"); 
            
            
           $q = @$_REQUEST["q"];
           $select1 = @$_REQUEST["selecter1"]; 
           $select2 = @$_REQUEST["selecter2"]; 
          
           
           target($q,$select1,$select2);
             
         
       
 ?>