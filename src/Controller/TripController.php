<?php

namespace App\Controller;

use App\Entity\Trip;
use App\Repository\TripRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TripController extends AbstractController
{
    /**
     * @Route("/", name="trip_index")
     */
    public function index(TripRepository $repository): Response
    {
        $trips = $repository->findAll();
        return $this->render('index/index.html.twig', [
            'trips'=>$trips,
        ]);
    }

    /**
     * @Route("/{id}", name="trip_snow")
     */
    public function showOne(Trip $trip): Response
    {
        return $this->render('index/trip.html.twig', [
            'trip'=>$trip,
        ]);
    }
}
