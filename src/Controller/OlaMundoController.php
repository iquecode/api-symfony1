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
        $query = $request->query->all();
        return new JsonResponse([
            'message' => 'Olá mundo',
            'pathInfo' => $pathInfo,
            'query' => $query,
        ]);
    }

    public function test(Request $request): Response
    {

    }

}