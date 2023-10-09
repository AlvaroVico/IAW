<html lang="es">
    <head>
        <title>Condicional</title>
        <meta charset="utf-8"/>
    </head>
  <?php     
      //LLamada a la función
                  $variab1= "Alejandro";
                  $variab2= "Madrid";
                  $variab3= 2004;
                 nacimiento($variab1,$variab2,$variab3);
                 
                 echo "<br>";
                 
                        function naci($nombr, $ciuda, $años) {
                   echo "$nombr vive en $ciuda en el año $años";
                  }
                  

                //LLamada a la función
                 
                 nacimiento("Alejandro","Madrid",2004);
?>      
</body>
</html>
