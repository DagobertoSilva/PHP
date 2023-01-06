<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeDoBanco= "images";

$conexaoBD = mysqli_connect($servidor, $usuario, $senha, $nomeDoBanco);
// if (!$conexaoBD){
//     echo "Não conectado";
// }else{
//     echo  "Deu certo";
// }

function mover_foto($vetor_foto) {
    if(!$vetor_foto['error']) {
        $nome_arquivo = date('Ymdhms') .".jpg";
        move_uploaded_file($vetor_foto['tmp_name'], "img/".$nome_arquivo);
        return $nome_arquivo;
    }else{
        return 0;
    }
}
?>