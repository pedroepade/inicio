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
        echo"<h3>ha posts cadastrados<br>";
        foreach($dado->fetchAll() as $post)
        {
            echo "<p><br>Título: ".$post['titulo']."<br>";
            echo "<b>Autor: <i>".$post['autor']."</i>";
            echo " - <b>Data de criação</b> ".$post['data_criado']."</p>";
            echo "<p><b>Conteúdo: </b><br>".$post['conteudo']."</p><br>";
            echo "<hr>";
        }
    }
    else
    {
        echo"<h3>nao ha posts cadastrados<br>";
    }
        
}
catch (PDOException $e)
{
    echo "<h2>falhou: ".$e->getMessage();
}