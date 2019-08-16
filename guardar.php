<?php   

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

// conectando ao banco 
try
{
    $pdo= new PDO($dsn,$dbuser,$dbpass);
    $titulo="tudo sobre CMS";
    $autor= "pedro";
    $data_criado= "2019-08-16 00:00:00";
    $conteudo="Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. O Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.";
    $sql="INSET INTO posts SET titulo = '$titulo', autor = '$autor', data_criado = '$data_criado', conteudo = '$conteudo'";
    
    $pdo->query($sql);
    
    echo "Titulo inserido com sucesso: ".$pdo->lastInsertId(); 
        
}

catch (PDOException $e)
{
    echo "<h2>falhou: ".$e->getMessage();
}