<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SupportController extends Controller
{
    /**
     * @Route("/support/submit", name="supportSubmit")
     */
    public function SubmitTicket()
    {
        return $this->render('support/index.html.twig', [
            'controller_name' => 'Creer le Ticket tmtc',
        ]);
    }
    /**
     * @Route("/support", name="supportMessage")
     */
    public function MessageTicket()
    {
        return $this->render('support/index.html.twig', [
            'controller_name' => 'Ouvre le ticket',
        ]);
    }
    /**
     * @Route("/support/close", name="supportSubmit")
     */
    public function CloseTicket()
    {
        return $this->render('support/index.html.twig', [
            'controller_name' => 'ferme le Ticket',
        ]);
    }
}
