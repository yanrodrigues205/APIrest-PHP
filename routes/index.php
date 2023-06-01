<?php 
    namespace routes;
    use function src\slimConfiguration;
    $app = new \Slim\App(slimConfiguration());

    //=======ROUTERS THIS API =======

    
    //=================================
    $app -> run();