<html> 
    <head> 
        <meta charset="UTF­8"> 
        <title>Desplegant una aplicació PHP sobre Heroku</title> 
    </head> 
    <body> 
        <?php 
            echo "AfegintCookies<br>"; 
            echo "SóceldesenvolupadorCarlos"; 
            setcookie("nom","Jordi Pons",time()+3600,"/","",0); 
            setcookie("edat","21",time()+3600,"/","",0); 
            setcookie("cicle","DAW",time()+3600,"/","",0); 
            setcookie("curs","2n",time()+3600,"/","",0); 
            setcookie("any","2017­2018",time()+3600,"/","",0);            
        ?>  
    </body>    
</html> 