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
function translator() {
    
   var str  = document.getElementById("selection").value;
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
       var select1 = document.getElementById("selecter1");
        select1 = select1.options[select1.selectedIndex].text;
      
       var select2 = document.getElementById("selecter2");
         select2 = select2.options[select2.selectedIndex].text;
               
        xmlhttp.open("GET","./database/search.php?q=" + str + "&selecter1=" + select1 + "&selecter2=" + select2 ,true);
        
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
            <select id="selecter1" onchange = "translator();">
               <option  selected >english</option>
               <option >roman</option>
               <option >france</option>   
            </select>
            <textarea name="english"  id="selection"  class="textarea" onkeyup="translator();" ></textarea><br>
            <select id="selecter2" onchange = "translator();">
               <option >english</option>
               <option selected >roman</option>
               <option >france</option>   
            </select>
            <textarea name="roman"  id="roman" class="textarea" ></textarea>
          </form>
 
       <br>
      
              
  </div>
    
   
  

</body>
</html>