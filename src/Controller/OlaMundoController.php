<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class OlaMundoController 
{


    /**
     * @Route("/ola") 
     */    
    public function olaMundoAction(Request $request): Response 
    {
        $pathInfo = $request->getPathInfo();
        //$parametro = $request->query->get(key:'parametro');
        $query = $request->query->all();
        return new JsonResponse([
            'mensagem' => 'Olá mundo', 
            'pathInfo' => $pathInfo,
            //'parametro' => $parametro,
            'query' => $query,
        ]);
    }

}