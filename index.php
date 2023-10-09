<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->


<html lang="es">
    <head>
        <title>Condicional</title>
        <meta charset="utf-8"/>
    </head>
  <?php     
         for ($y=50; $y <=80; $y=$y+2){
                   echo $y, " ";
               }
            echo "<br>";
               for ($c=17; $c >=-17; $c--){
                   echo $c, " ";
               }
            echo "<br>";
                for ($d=0; $d <=10; $d++){
                    echo $d * 6, " ";
                }
            echo "<br>";
                $e=0;
               while($e<=10){
                   echo $e, " ";
                   $e++;
               }
            echo "<br>";
                $f=50;
               while($f<=80){
                   echo $f," ";
                   $f=$f+2;
               }
?>      
</body>
</html>
