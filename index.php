<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/script.js" type="text/javascript"></script>

</head>

<body>
 <div class="mainCard">
        <div class="multiTabMenu">
            <button class="tablink" value="length" onclick="unitType('length')" id="length">Length</button>
            <button class="tablink" value ="temperature" onclick="unitType('temperature')"  id="defaultOpen">Temperature</button>
            <button class="tablink" value="area" onclick="unitType('area')">Area</button>
            <button class="tablink" value="volume" onclick="unitType('volume')">Volume</button>
            <button class="tablink" value= "weight" onclick="unitType('weight')">Weight</button>
            <button class="tablink" value= "time" onclick="unitType('time')">Time</button>
        </div>
       
      <div class= "inputOutput">
         <form action = "" method = "post" >
              <input type = "number" step="any/" name="input"  id="inputConversion" class = "" />
              <input type = "text" step="any/" name ="output" id= "outputConversion" class = "" disabled/>

         </form>
      </div>
    <div class = "selectList"> 
      
        <form action="#" class = "List">
        <label for="lang" class = "selectOption">Units from</label>
        <select name="languages" class="unit" id="fromSelect" size="6">
        </select>
      
    </form>



    <form action="#" class = "List">
      <label for="lang" class = "selectOption">Units to</label>
      <select name="languages" class="unit" id="toSelect" size="6">
      </select>
    </form>

    </div>
    </div>
   

</body>

</html>

