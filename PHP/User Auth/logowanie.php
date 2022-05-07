<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf-8"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <h1>Sklep Internetowy</h1>

<div class="menu">
    <h2><a href="rejestracja.php">Rejestracja</a></h2>
    <h2><a href="logowanie.php">Logowanie</a></h2>
    </div>
    </header>
<main>
    <div class="FormField">
        <form method="post">
            <h3>Logowanie:</h3>
            <div class="emailpass">
            <label for="email">Email:</label><br>
        <input type="text" size="25" id="email" name="email"><br>
            <label for="passwd">Hasło:</label><br>
                <input type="text" size="25" id="passwd" name="passwd"><br></div>
                 <input type="submit" id="btnSubmit" name="btnSubmit" value="Zarejestruj się" />
        </form>
    
    </div>
    
    </main>

<?php
    error_reporting(0);
$email =$_POST['email'];
$passwd =$_POST['passwd'];

 
  // "Save Changes" clicked

class MyDB extends SQLite3 // dołącz rozszerzenie do obsługi SQLite
{
    public $is_db_file = false;
    
    
    
    
    function create()
    {
        /* definicja tabel SQL i przykładowe rekordy */
        $this->exec("
        CREATE TABLE IF NOT EXISTS klienci
        (
            id    INTEGER PRIMARY KEY AUTOINCREMENT,
            email TEXT DEFAULT '',
            haslo TEXT DEFAULT '',
            imie TEXT DEFAULT '',
            nrtel TEXT
        );
       
       
    
             
 

     
        ");
    }
        
    function __construct($db_name)
    {
        $this->is_db_file = file_exists($db_name); // czy plik bazy już istnieje?
        
        try 
        {
            $this->open($db_name); // połącz się z bazą danych
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
            die();
        }
        
        if (!$this->is_db_file) // utwórz strukturę tabel dla nowej bazy danych
        { 
            $this->create();
            $this->is_db_file = true;
        }
    }
}

$db = new MyDB('klienci.db'); // tworzenie egzemplarza klasy

 if ($db->is_db_file) 
{       if (isset($_POST["btnSubmit"])){
        $login = $db->query("SELECT * FROM KLIENCI WHERE email = '$email' AND  haslo = '$passwd'");
       while ($wiersz = $login->fetchArray()) {
        printf(
            "%d\t%s\t%s\t%d</br>", 
            $wiersz['email'], $wiersz['haslo'], $wiersz['imie'], 
             $wiersz['nrtel']
        );
    }
    
    
        }    
} 

    
    


$db->close(); // zamknij połączenie z bazą
?>


</body>
</html>