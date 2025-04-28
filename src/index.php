<?php

// Certifique-se de que os cabeçalhos sejam definidos antes de qualquer saída ser feita
if (! defined('PHPUNIT_TEST')) {
    header('Content-Type: application/json');
}
// Resposta fictícia
echo  json_encode([
    'status' => 'success' ,
    'message' => 'Olá do Docker PHP!'
 ]);
