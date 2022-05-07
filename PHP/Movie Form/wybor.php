     
        <!DOCTYPE HTML>
        <html lang = "pl">
        <head>
        <link rel="stylesheet" href="style.css">
        <meta charset = "utf-8"/>
        </head>
        <body>
        <header>
        </header>
        <main>
            </main>
            </body>
</html>
       
 
         
<?php
$oldmovies=$_POST['oldmovies'];
$gatunek = $_POST['gatunek'];
if($oldmovies == "yes")
{
    if($gatunek == "dramat")
    {
       echo"Polecanym filmem dla ciebie jest 'Przeminęło z wiatrem'";
    }
    
    if($gatunek=="komedia")
    {
        echo"Polecanym dla ciebie flimem jest 'Dyktator'";
    }
    
    if($gatunek=="akcja")
    {
    echo"Polecanym dla ciebie filmem jest 'Ojciec Chrzestny'";
    }
}

if($oldmovies == "no")
{
       if($gatunek == "dramat")
    {
       echo"Polecanym filmem dla ciebie jest 'Parasite'";
    }
    
    if($gatunek=="komedia")
    {
        echo"Polecanym dla ciebie flimem jest 'Jojo rabbit'";
    }
    
    if($gatunek=="akcja")
    {
    echo"Polecanym dla ciebie filmem jest 'John Wick'";
    } 
}

if($oldmovies == "idk")
{
       if($gatunek == "dramat")
    {
       echo"Polecanym filmem dla ciebie jest 'Parasite' lub 'Przeminęło z wiatrem'";
    }
    
    if($gatunek=="komedia")
    {
        echo"Polecanym dla ciebie flimem jest 'Jojo rabbit' lub 'Dyktator'";
    }
    
    if($gatunek=="akcja")
    {
    echo"Polecanym dla ciebie filmem jest 'John Wick' lub 'Ojciec Chrzestny'";
    } 
}

            
?>
         