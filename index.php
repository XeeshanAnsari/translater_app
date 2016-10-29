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
        document.getElementById("roman").innerHTML = "";
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
                document.getElementById("roman").innerHTML = this.responseText;
            }
        };
       var e = document.getElementById("selecter");
       var select = e.options[e.selectedIndex].text;
               
        xmlhttp.open("GET","./database/search.php?q=" + str + "&selecter1=" + select ,true);
        
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
          <form action="#" method="post">
            <select name="select" id="selecter">
               <option selected>Select a person:</option>
               <option >english</option>
               <option >roman</option>
               <option >france</option>
               
            </select><span id="selected"></span>
            <textarea name="english"  id="english"  class="textarea" onkeyup="showUser(this.value);" ></textarea><br>
            <textarea name="roman"  id="roman" class="textarea" ></textarea>
          </form>
 
       <br>
      
              
  </div>
    
   
  

</body>
</html>