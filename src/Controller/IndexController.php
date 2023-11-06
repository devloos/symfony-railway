<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('{any?}', methods: ['GET'])]
    public function index(): Response
    {
        $file = new File('/Users/ca/Developer/Web/Symfony/example-app/public/index.html');
        return new Response($file->getContent());
    }
}
