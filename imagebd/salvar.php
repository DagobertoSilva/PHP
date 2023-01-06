<?php
include 'conexao.php';
$foto = $_FILES['foto'];
$nome_foto = mover_foto($foto);

$sql = mysqli_query($conexaoBD, "INSERT INTO img (imagens) VALUES ('$nome_foto')");
if($sql){
    header('Location: index.php');
}
else{
    echo "ERROR!!!!!";
}

?>