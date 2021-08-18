<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>


<body style ="">
    <!-- <h1 style="text-align:center;align-items:center; color:lavenderblush">Welcome There</h1> -->
    
       <form action="controller/history-action.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
        <label for="convert_s">convert type :</label>
        <select name="convert_s" id="Rname">
        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="KgTog">Kg To G</option>
    
        </select>   <br> <br>  
              <input type="submit" name="submit"  value="search"> <br> <br>
       </form>
              <div id="result"><b>Person info will be listed here...</b></div>


              <script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?convert_s=" +pform.username.value);
      xhttp.send();
       }
              </script>
</body>
</html>