<?php
$servername = "localhost"; //padrão - server local
$database = "baseteste"; //alterar conforme o nome do banco de dados
$username = "root"; //padrão - root
$password = ""; //senha do banco de dados.
//Create conection
$conexao = mysqli_connect($servername, $username, $password, $database);