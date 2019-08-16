<?php   

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

// conectando ao banco 
try
{
    $pdo= new PDO($dsn,$dbuser,$dbpass);
    echo "<h2>conexão estabelecida com sucesso!";
    $sql = "SELECT * FROM posts";
    $dado = $pdo->query($sql);
    
    if ($dado->rowCount() > 0)
    {
        echo"ha posts cadastrados";
    }
    else
    {
        echo"nao ha posts cadastrados";
    }
        
}
catch (PDOException $e)
{
    echo "<h2>falhou: ".$e->getMessage();
}