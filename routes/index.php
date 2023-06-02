<?php 
    use App\Controller\ProdutosController;
    use function src\slimConfiguration;
    $app = new \Slim\App(slimConfiguration());
   

    //=======ROUTERS THIS API =======

    $app ->get("/produtos",ProdutosController::class .':getProdutos');
    
    //=================================
    $app -> run();