<?php

$DBHost = 'https://databases-auth.000webhost.com/index.html?route=/database/structure&db=id21482081__databaseconmobile_';
// $DBHost = 'localhost';
$DBUsername = 'conexaomobile';
$DBPassword = '_databaseConMobile_';
$DBName = ' id21482081_databaseconmobile';
// $DBName = '_databasecm_';

$conexao = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

// if ($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conexão efetuada com sucesso!!!";
// }
