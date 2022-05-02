<?php
session_start();
include_once("conexao.php");


$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$qnt_produto = filter_input(INPUT_POST, 'qnt_produto', FILTER_SANITIZE_STRING);

$result_pedidos = "INSERT INTO pedido (cliente, produto, qnt_produto, created) 
VALUES ('$cliente', '$produto', '$qnt_produto', NOW())";
$resultado_pedidos = mysqli_query($conn, $result_pedidos);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<span style='color:green;'> Pedido Confirmado com sucesso</span>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<span style='color:red;'> Pedido não Confirmado</span>";
	header("Location: index.php");
}
			