<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
    /**
     * @Route("/stats", name="stats")
     */

    public function index()
    {
        return $this->render('stats/index.html.twig', [
            'controller_name' => 'StatsController',
        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */

    public function getDashboardDatas()
    {
        return $this->render('dashboard.html.twig', [
            'controller_name' => 'DashboardController',

        ]);

    }

    /**
     * @Route("/planning", name="planning")
     */

    public function getPlanningDatas()
    {
        return $this->render('planning.html.twig', [
            'controller_name' => 'PlanningController',

        ]);

    }

}
