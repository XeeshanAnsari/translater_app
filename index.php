<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    
    <script src="./js/new.js"></script>
    
     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <script src="./js/jquery.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="./css/style.css">
     <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
      else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","./database/search.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

     
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
      <div>
          <h1>Translate</h1>
          <form action="./database/search.php" method="post">
            <textarea name="english"   class="textarea" onkeyup="showUser(this.value)" ></textarea><br>
            
          </form>
 
       <br>
       <div class="well "  >
            
           <p > <span id="txtHint" ></span></p>
       </div>
              
  </div>
    
   
  

</body>
</html>