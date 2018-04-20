Mario Recamales (mariorrsv@gmail.com)
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF­8">
       <title>Desplegant una aplicació PHP sobre Heroku</title>
   </head>
   <body>
       <?php
           echo "Afegint Cookies<br>";
           echo "Sóc el desenvolupador marero1718daw2";
           setcookie("nom","Jordi Pons", time()+3600,"/","",0);
           setcookie("edat","21",time()+3600,"/","",0);
           setcookie("cicle","DAW",time()+3600,"/","",0);
           setcookie("curs","2n",time()+3600,"/","",0);
           setcookie("any","2017­2018",time()+3600,"/","",0);
       ?>
   </body>
</html>