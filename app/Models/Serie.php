<?php

namespace Meri\NameApp\Models;

// O uso de Eloquent é uma das principais características do Laravel, que é um ORM (Object-Relational Mapping) que facilita a interação com o banco de dados. Só com a Model vazia abaixo já é possível fazer operações básicas no banco de dados, como criar, ler, atualizar e excluir registros.
use Illuminate\Database\Eloquent\Model;

// Por padrão no Laravel, o nome da tabela é o plural do nome do modelo. Exemplo: se o nome do modelo for User, o nome da tabela no banco de dados será users.
// Caso o nome da tabela seja diferente do padrão, é necessário informar o nome da tabela no modelo. Exemplo: se o nome do modelo for User e o nome da tabela for usuarios, é necessário informar o nome da tabela no modelo adicionando a propriedade protected $table = 'usuarios'; no modelo.
class Serie extends Model
{
    
}
