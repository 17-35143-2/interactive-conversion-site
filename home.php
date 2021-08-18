<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="home-js-validation.js"></script>
    <title>Converter</title>
    <script src="view/js/home-js-validation.js"></script>
</head>
<body>
    <?php include "index.php";?>
    <h2>CONVETER</h2>
<form action="controller/home-action-2.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
<?php include "controller/home-action.php"; ?>
<select name="convert_s" id="Rname">
        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="KgTog">Kg To G</option>
    
        </select>  <span id="Uerror" style="color: red;"> * <?php echo $valueEr;  ?></span> <br> <br> <br> <br>
        <label for="value">value :</label>

        <input type="text" id="value" name="value">  <span id="Perror" style="color: red;"> * <?php echo $valueEr;  ?></span> <br> <br><br> <br>
        <div id="result"> Ans Willbe displayed here ...</div> 
        <input type="submit" value="convert">
</form>
<script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?convert_s=" +pform.username.value);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send();
       }
              </script>

</body>
</html>