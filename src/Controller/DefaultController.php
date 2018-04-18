<?php

namespace App\Controller;


use App\Entity\User;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $form = $this->createFormBuilder()
            ->add("userMail", EmailType::class, array('label' => "Login : "))
            ->add("userPassword", PasswordType::class, array('label' => "Mot de Passe : "))
            ->add("log", SubmitType::class, array('label' => "Se connecter"))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(
                    ['userMail' => $data["userMail"]]
                );
            if ($data['userPassword'] == $user->getUserPassword()) {
                $session->set('user', $user);
                return $this->redirectToRoute('default');
            }
        }


        return $this->render('default/index.html.twig', array(
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/forget", name="forget")
     */
    public function forgottenPassword(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createFormBuilder()
            ->add("userMail", EmailType::class, array('label' => "Mail : "))
            ->add("log", SubmitType::class, array('label' => "Envoyer"))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(
                    ['userMail' => $data["userMail"]]
                );
            if ($data['userMail'] == $user->getUserMail()){
                $message = (new \Swift_Message('Hello Email'))
                    ->setFrom('sendfrom@example.com')
                    ->setTo($user->getUserMail())
                    ->setBody('ceci est le body du mail');
                $mailer->send($message);
                return $this->redirectToRoute('default');
            }
           /* else
                return $this->render('default/forget.html.twig', array(
                    'form' => $form->createView()));*/

        }

        return $this->render('default/forget.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
