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
                       
                </ul>
            </div>            
        </div>
    </div>
 
  
  

  <div class="mainBox">
      <div>
          <h1>Translate</h1>
          <form action="./database/search.php" method="post">
            <textarea name="english" class="textarea" ></textarea>
            <textarea name="english" class="textarea" ><?php echo @$_GET['roman'];?></textarea><br>
            <input type="submit" value="search" name="search" class="btn btn-primary">
          </form>
          
  </div>
  
  
</body>
</html>