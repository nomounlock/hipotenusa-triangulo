<html>
    <head><title>Hipotenusa</title></head>
        <body>
            <?php
            if(isset($_POST['btn'])&&$_POST['btn']=='calcular'){

$a = $_POST['cateto1'];
$b = $_POST['cateto2'];
$hip = null;


if(!empty($a)or !empty($b)){

    echo "<h2 align = 'center'> HIPOTENUSA DE UN TRIANGULO RECTANGULO</h2>";
$hip = sqrt(($a * $a) + ($b * $b));

echo "<br/><br/>";
echo "<br>La hipotenusa del triangulo rectangulo es: ". $hip;

echo "<br/><br/>";
echo "<a href ='datos.html'>Volver</a>";
//Alejandro Ortiz//
}
}

            
            ?>
            </body>
            </html>