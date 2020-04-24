<?php

$this->get('/', function () {
    //echo "Estou na home! :D";
    (new \app\controller\TesteController)->index();
});

$this->get('/about/teste', function () {
    echo "Estou na about teste! :D";
});

$this->get('/cep', 'TesteController');