<?php

$DBHost = 'roundhouse.proxy.rlwy.net';
// $DBHost = 'localhost';
$DBUsername = 'root';
$DBPassword = 'AhdaAE-D2eCA6fcHA-215AE3d5GfDfEg';
$DBName = ' railway';
// $DBName = '_databasecm_';

$conexao = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Conexão efetuada com sucesso!!!";
}
