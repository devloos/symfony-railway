<?php
namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TodosController extends AbstractController
{
    #[Route('/api/todos', methods: ['GET'])]
    public function getTodos(): JsonResponse
    {
        return new JsonResponse([
            'title' => 'yes sir',
            'movie' => 'suck it',
        ]);
    }
}
