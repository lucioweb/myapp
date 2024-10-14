<?php

namespace Source\App;

/*use League\Plates\Engine;*/
use Source\Models\User;

class Web
{
    private $view;

    public function __construct()
    {
        //$this->$view = Engine::create(__DIR__ . "/../../theme","php");
    }

    public function home($data)
    {
        echo "Home";
        var_dump($data);
        /*$users=(new User())->find()->fetch(true);
     echo $this->view->render("home",[
            "title"=>"Home | " .SITE,
            "users"=>$users
        ]);*/
    }

    public function contact($data)
    {
        echo "Contato";
        var_dump($data);
    }

    public function blog($data)
    {
        echo "Blog";
        var_dump($data);
    }

    public function about($data)
    {
        echo "About";
        var_dump($data);
    }

    /*    public function post($data): void
        {
            echo "<h1>Postando artigo!?</h1>";
            var_dump($data);
        }*/

    /*    public function category($data): void
        {
            echo "<h1>Categoria</h1>";
            var_dump($data);
        }*/

    public function ops($data)
    {
        echo "Erro{$data["errcode"]}";
        var_dump($data);
    }
}