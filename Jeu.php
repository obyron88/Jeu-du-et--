<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>

  <form  method = "POST">
      Nombre: <input type = "text" name = "nombre" />
           <input type = "submit" />
        </form>
<p><?php

$number = rand(1, 100);
echo $number;

function pitie($number){
if( $_POST["nombre"] > $number) {
       echo " C'est moins que ", $_POST["nombre"];
} elseif ($_POST["nombre"] < $number) {
  echo " C'est plus que ", $_POST["nombre"];
} elseif ($_POST["nombre"] == $number){
  echo " C'est gagné ";
}
  }
  pitie($number);

  ?></p>


</body>
</html>
