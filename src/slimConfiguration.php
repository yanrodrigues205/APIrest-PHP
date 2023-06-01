<?php
    namespace src;
    //COLOCAR TODAS CONFIGURACOES DO FRAMEWORK SLIM AQUI DENTRO
    function slimConfiguration(): \Slim\Container
    {
        $configuration = [
            'settings' => [
                'displayErrorDetails' => true,
            ],
        ];
        return new \Slim\Container($configuration);
    }