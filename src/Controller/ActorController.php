<?php

namespace App\Controller;

use App\Repository\ActorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/actor', name: 'app_actor_')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ActorRepository $ActorRepository): Response
    {
        $actors = $ActorRepository->findAll();

        return $this->render('actor/index.html.twig', [
            'actors' => $actors,
        ]);
    }

    #[Route('/{id}', name: 'show')]
    public function show(int $id ,ActorRepository $ActorRepository): Response
    {
        $actorById = $ActorRepository->find($id);

        return $this->render('actor/show.html.twig', [
            'actorById' => $actorById,
        ]);
    }
}
