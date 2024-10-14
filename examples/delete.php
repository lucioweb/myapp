<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user =(new User())->findById(12);
if($user){
    $user->destroy();
    echo "Usuário {$user->id} deletado com sucesso.";
} else{
    //var_dump($user);
    echo "Usuário não existe na base de dados.";
}


