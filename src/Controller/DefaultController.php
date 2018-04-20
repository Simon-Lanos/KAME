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

        if ($form->isSubmitted() && $form-> isValid())
        {
            $data = $form->getData();
            /** @var $user User */
            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['userMail' => $data['userMail']]);

            if ($data['userPassword'] == $user->getUserPassword())
            {
                $session -> set('user',$user);
                return $this-> redirectToRoute('default');
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

            /** @var User $user */
            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(
                    ['userMail' => $data["userMail"]]
                );

            if (empty($user)) {
                return $this->render('default/forget.html.twig', array(
                    'form' => $form->createView(),
                    'message' => " Email non valide Inscris toi avant boloss!!"
                ));

            } else {
                $user = $this->getDoctrine()
                    ->getRepository(User::class)
                    ->findOneBy(
                        ['userMail' => $data["userMail"]]
                    );
                $user->setUserToken(hash("sha256", crypt(microtime(), "NWTroll")));
                //$user->setUserTokenTime(\DateTimeInterface::'Y-m-d H:i:s');


                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();


                $message = (new \Swift_Message('Réinitialisation du mot de passe'))
                    ->setFrom('clement.langendorf@gmail.com')
                    ->setTo($user->getUserMail())
                    ->setBody('
                        <html>
                        <head>
                            <title>Confirmation de votre Inscription</title>
                        </head>
                        <body>
                        <p>Bonjour</p>' . $user->getUserFirstName() . ' ' . strtoupper($user->getUserLastName()) . ' ' . $user->getUserToken() . '
                        <p>Pour confirmer la réinitialisation de mot de passe, veuiller cliquer sur le boutton si dessous</p>
                        <a href="http://127.0.0.1:8002/?token=' . $user->getUserToken() . '">
                            <img src="https://image.noelshack.com/fichiers/2018/15/5/1523612366-buttonvalidation.png" />
                        </a>
                        </body>
                        </html>
                    ');
                $mailer->send($message);
                return $this->redirectToRoute('default');
            }
        }

        return $this->render('default/forget.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
