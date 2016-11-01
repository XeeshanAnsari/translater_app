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
      <div id="input-box">
          <form action="./database/insert.php" method="post">
             <label for="eng"> <input type="text" id="eng" name="eng" placeholder="English" class="input-field">  </label><br>
             <label for="roman"> <input type="text" id="roman" name="roman" placeholder="Roman" class="input-field">  </label><br>
             <label for="france"> <input type="text" id="france" name="france" placeholder="France" class="input-field">  </label><br>
             <input type="submit" value="submit" name="submit" class="btn btn-primary btn-insert"><br>
           </form>
           <h1>
              <?php
                echo @$_GET['inserted'];
               ?>
          </h1>
      </div>
      
  </div>
  
 
  
  
</body>
</html>