<?php
session_start();
require_once "configbd.php";
if (isset($_SESSION['nomeDoUsuario'])) {
    //logado
    $usuario = $_SESSION['nomeDoUsuario'];
    $sql = $connect->prepare("SELECT * FROM usuario WHERE nomeUsuario = ?");
    $sql->bind_param("s", $usuario);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);
    $nomeDoUsuario = $linha['nomeUsuario'];
    $nomeCompleto  = $linha['nomeCompleto'];
    $emailUsuario  = $linha['emailUsuario'];
    $dataCriado    = $linha['dataCriado'];
    //conversão de data
    $dataCriado = date('d/m/Y', strtotime($dataCriado));
} else {
    //se não estiver logado, redirecionar para o index
    header("location: index.php");
}
