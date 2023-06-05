<?php 
//use App\Controller\ProdutosController;
use Slim\Http\Request;
use Slim\Http\Response;

    require_once("./App/Controller/ProdutosController.php");
   // use function src\ProdutosController\getProdutos;
    use function src\slimConfiguration;
    $app = new \Slim\App(slimConfiguration());

   
    
    //=======ROUTERS THIS API =======
   
    $app ->get("/produtos", function(){
        $prod =  new ProdutosController();
         echo $prod -> getProdutos();
    });
    
    //=================================
    $app -> run();