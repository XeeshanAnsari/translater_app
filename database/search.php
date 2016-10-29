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
            
             
           $p = @$_REQUEST["p"];   
         
         
            
          $q = @$_REQUEST["q"];
           $select = @$_REQUEST["selecter1"]; 
          
           if($select == "english"){
              target($q,$select,"roman");      
           }
           if($select == "roman"){
               target($q,$select,"english");   
           }
           if($select == "france"){
               target($q,$select,"english");   
           }
         
             
         
       
 ?>