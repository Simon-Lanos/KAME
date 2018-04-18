<?php

/*****************************
 * Fabrice & Pierre, bisous ! *
 *****************************/


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
     * @Route("/statistiques/dashboard", name="dashboard")
     */

    public function getDashboardDatas()
    {
        return $this->render('stats/dashboard.html.twig', [
            'controller_name' => 'DashboardController',

        ]);

    }

    /**
     * @Route("/statistiques/planning", name="planning")
     */

    public function getPlanningDatas()
    {
        return $this->render('stats/planning.html.twig', [
            'controller_name' => 'PlanningController',

        ]);

    }

    /**
     * @Route("/statistiques/promotions", name="promotions")
     */

    public function getPromotionsDatas()
    {
        return $this->render('stats/promotions.html.twig', [
            'controller_name' => 'PromotionsController',

        ]);

    }

    /**
     * @Route("/statistiques/microWave", name="MicroWave")
     */

    public function getMicroWaveDatas()
    {
        return $this->render('stats/microWave.html.twig', [
            'controller_name' => 'MicroWaveController',

        ]);

    }



}
