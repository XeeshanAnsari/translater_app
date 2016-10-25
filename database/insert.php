<?php
  mysql_connect("localhost","root","");
  mysql_select_db("database");
  if(isset($_POST['submit'])){
      $eng = $_POST['eng'];
      $roman = $_POST['roman'];
      $france = $_POST['france'];
     
     $query = "insert into lang (english,roman,france) value('$eng','$roman','$france')";
     
     if(mysql_query($query)){
         echo "<script> window.open('../insert.php?inserted=Data has been insert','_self')</script>";
     }else{
          echo "<script> window.open('../insert.php?inserted=Data has been not insert','_self')</script>";
     }
  }
?>