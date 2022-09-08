<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/movie',name: 'app_movie_')]
class MovieController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(MovieRepository $movieRepository): Response
    {
        $movies = $movieRepository->findAll();

        return $this->render('movie/index.html.twig', [
            'movies' => $movies,
        ]);
    }

    #[Route('/{id}', name: 'show')]
    public function show(int $id ,MovieRepository $movieRepository): Response
    {
        $movieId = $movieRepository->find($id);

        return $this->render('movie/show.html.twig', [
            'movieId' => $movieId,
        ]);
    }
}
