<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;

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

        $form = $this->createFormBuilder($user)
            ->add('userMail', EmailType::class)
            ->add('userPassword', PasswordType::class)
            ->add('userFirstName', TextType::class)
            ->add('userLastName', TextType::class)
            ->add('userGender', ChoiceType::class)
            ->add('userAdress', TextType::class)
            ->add('userAvatar', TextType::class)
            ->add('zipCode', IntegerType::class)
            ->add('userCity', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Enregistrer mes changements'))
            ->getForm();

        return $this->render('users/profile_management.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));

        //return new Response('Check out this great user: '.$user->getUserFirstName());

        // or render a template
        // in the template, print things with {{ user.name }}
        //return $this->render('users/profile_management.html.twig', ['user' => $user]);

    }


    /**
     * @Route("/users/schedule", name="schedule")
     */
    public function getSchedule($idUser)
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


        return new Response(
            '<html><body>test d\'affichage 2 le retour</body></html>'
        );
    }
}
