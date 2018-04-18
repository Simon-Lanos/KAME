<?php

namespace App\Controller;


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
            ->add("log", SubmitType::class, array('label' => "Se connecter : "))
            ->getForm();

        $form->handleRequest($request);

        if ($form)-> isSubmitted() && $form() -> isValid()
            {
            $data = $form->getData()
            $user = $this->getDoctrine()

                ->getRepository(userClass)
                ->findOneBy(
                    ['userMail'] => $data['userMail'];)

                if ($data['userPassword'] == $user-> ['userPassword'])
                  {
                  $session -> set('userClass',$user);
                  return $this-> redirectToRoute();
                  }
            }

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
