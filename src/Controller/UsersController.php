<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users;

class UsersController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function index()
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    /**
     * Matches /users/profile/*
     *
     * @Route("/users/profile/{idUser}", name="profile")
     */
    public function ProfileManagement($idUser)
    {
        $user = $this->getDoctrine()
            ->getRepository(Users::class)
            ->find($idUser);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$idUser
            );
        }

        //return new Response('Check out this great user: '.$user->getUserFirstName());

        // or render a template
        // in the template, print things with {{ user.name }}
        return $this->render('users/profile_management.html.twig', ['user' => $user]);

    }


    /**
     * @Route("/users/schedule", name="schedule")
     */
    public function getSchedule()
    {
        return new Response(
            '<html><body>test d\'affichage 2 le retour</body></html>'
        );
    }
}
