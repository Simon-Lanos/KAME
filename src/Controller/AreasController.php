<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AreasController extends Controller
{
    /**
     * @Route("/areas", name="areas")
     */
    public function index()
    {
        return $this->render('areas/index.html.twig', [
            'controller_name' => 'AreasController',
        ]);
    }

    public function add($name, $localisation, $sit_capacity, $standing_capacity, $duration, $accessibility)
    {

    }

    public function delete($id)
    {

    }
}
