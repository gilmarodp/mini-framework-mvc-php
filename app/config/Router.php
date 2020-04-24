<?php

$this->get('/', function () {
    echo "Estou na home! :D";
});

$this->get('/home', function () {
    echo "Estou na home! :D";
});

$this->get('/about/teste', function () {
    echo "Estou na about teste! :D";
});

$this->get('/categoria', 'MyController@method');