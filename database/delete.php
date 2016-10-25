<?php
 
   mysql_connect("localhost","root","");
   mysql_select_db("database");

   $delete_id = @$_GET['del'];
   $query_d = "DELETE FROM lang where s_no = '$delete_id'";
   
   
   if(mysql_query($query_d)){
       echo "<script>window.open('../select.php?deleted=Data has been Deleted','_self')</script>" ;
   } 
 

?>