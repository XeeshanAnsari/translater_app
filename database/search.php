<?php
 function target($q,$select1,$target){
         $result = "";
                $q =strtolower($q);
                $search = explode(' ', $q);
           
         for($i=0; $i<count($search); $i++){
              $query_search ="SELECT * from lang where $select1 = '$search[$i]' ";
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
           switch ($p) {
               case 'value1': 
                   $target = "english";
                   break;
              case 'value2':
                   
                   $target = "roman";
                   break;
               case 'value3':
                  
                   $target = "france";
                   break;         
               
               default:
                   $target = "";
                   break;
           }
          echo $target;
            
          $q = @$_REQUEST["q"];
           $select = @$_REQUEST["select1"]; 
           echo $select;
           if($select == "english"){
              target($q,$select,"roman");      
           }if($select == "roman"){
               target($q,$select,"english");   
           }
         
             
         
       
 ?>