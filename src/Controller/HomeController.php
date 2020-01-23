<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index (Request $request)
    {        

        $projects[0] = [
            'name' => 'Lambda Restaurant',
            'nameID' => 'lambda_restautant',
            'description' => 'Exercice d\'intégration d\'après maquette',
            'image' => 'restaurant.jpg',
            'technos' => 'HTML, SCSS, JavaScript', 
            'link' => 'https://richardm.promo-28.codeur.online/lambda/',
            'gitLink' => 'https://github.com/Circus-Pygargus/ACS-projet-008',
            'date' => 'avril 2019'
        ];
        $projects[1] = [
            'name' => 'Ririgram',
            'nameID' => 'ririgram',
            'description' => 'Un jeu de type picross',
            'image' => 'ririgram.jpg',
            'technos' => 'HTML, SCSS, JavaScript', 
            'link' => 'https://richardm.promo-28.codeur.online/ririgram/',
            'gitLink' => '#',
            'date' => 'octobre 2019'
        ];
/*        $projects[2] = [
            'name' => 'Tourisme Handi',
            'nameID' => 'tourisme_handi',
            'description' => 'Une appli qui offre la possibilité de trouver des établissements liés au tourisme et estampillés Tourisme Handi par le gouvernement',
            'image' => 'tourisme_handi.jpg',
            'technos' => 'HTML, CSS, JavaScript, PHP, MySQL, Architecture MVC', 
            'link' => '#',
            'gitLink' => 'https://github.com/Fenrir117/projetData/tree/Circus-Pygargus',
            'date' => 'mai 2019'
        ];
        $projects[3] = [
            'name' => 'Vynil',
            'nameID' => 'vynil',
            'description' => 'Un site WordPress sur les vyniles',
            'image' => 'vynil.jpg',
            'technos' => 'HTML, SCSS, JavaScript, PHP, MySQL, WordPress', 
            'link' => '#',
            'gitLink' => 'https://github.com/Circus-Pygargus/blind_Test',
            'date' => 'juillet 2019'
        ];
*/
        $projects[4] = [
            'name' => 'Blind Test',
            'nameID' => 'blind_test',
            'description' => 'Un jeu de blind test sur 2 écrans : un pour les joueurs, un pour le maître de jeu qui gère le départ des chansons, l\'affichage des images et l\'attribution des points.',
            'nota_bene' => 'Ce site évoluera pour être jouable sur un seul écran et pourra également à terme être utilisé comme lecteur audio.',
            'image' => 'blind_test.jpg',
            'technos' => 'HTML, Twig, SCSS, JavaScript, PHP, MySQL, Architecture MVC', 
            'link' => '#',
            'gitLink' => 'https://github.com/Circus-Pygargus/blind_Test',
            'date' => 'juillet 2019'
        ];
/*        $projects[5] = [
            'name' => 'Portfolio',
            'nameID' => 'portfolio',
            'description' => 'Le site sur lequel vous naviguez actuellement.',
            'image' => 'portfolio.jpg',
            'technos' => 'HTML, Twig, SCSS, Bootstrap, JavaScript, PHP, MySQL, Symfony, Architecture MVC', 
            'link' => '#',
            'gitLink' => 'https://github.com/Circus-Pygargus/projet_025_portfolio',
            'date' => 'août 2019'
        ];
*/
        $form = $this->buildContactForm($request);

        return $this->render(
            'home.html.twig', 
                [
                    'projects' => $projects,
                    'form' => $form->createView()
                ]
        );
    }


    private function buildContactForm ()
    {
        $form = $this->createFormBuilder()
            ->add(
                'name', 
                TextType::class,
                [
                    'constraints' => new Length(
                        [
                            'min' => 3,
                            'max' => 50
                        ]),
                    'label' => 'Nom',
                    'label_attr' => ['class' => 'maClassA'],
                    'attr' => 
                        [
                            'class' => 'form-control'
                        ]
                ])
            ->add(
                'email',
                EmailType::class,
                [
                    'attr' => ['class' => 'form-control']
                ])
            ->add(
                'message',
                TextareaType::class,
                [
                    'attr' => ['class' => 'form-control']
                ])
            ->add(
                'send', 
                SubmitType::class,
                [
                    'label' => 'Envoyer',
                    'attr' => 
                        [
                            'class' => 'btn-lg btn-primary float-left my-4'
                        ]
                ])
            ->getForm()
        ;

        return $form;
    }


    /**
     * @route("/contact/json")
     */
    public function testForm (request $request, \Swift_Mailer $mailer)
    {   
        // /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{1,}$/
        // /^[a-zA-ZÀ-ÿ-. ]*$/
        $regexName = "/^[\p{L}-. ]*$/u";
        $regexEmail  = "/^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/";
        $regexMessage = "/.{3,}\s?/";
        
        $errorMessage = "";

        if ($request->headers->get('Content-Type') === 'application/json') {
            $dataJson = $request->getContent();
            $data = json_decode($dataJson);
            //dump($data); 


            // test name
            if (isset($data->name) && preg_match($regexName, $data->name)) {
                $name = $data->name;
            }
            else {
                $errorMessage = "Il y a un problème avec le champ 'Nom'";
            }

            // test email
            if (isset($data->email) && preg_match($regexEmail, $data->email)) {
                $email = $data->email;
            }
            else {
                if ($errorMessage !== "") {
                    $errorMessage .= ", <br> il ";
                }
                else {
                    $errorMessage .= "Il ";
                }
                $errorMessage .= "y a un problème avec le champ 'Email'";
            }

            // test message
            if (isset($data->message) && preg_match($regexMessage, $data->message)) {
                $message = $data->message;
            }
            else {
                if ($errorMessage !== "") {
                    $errorMessage .= ", <br> il ";
                }
                else {
                    $errorMessage .= "Il ";
                }
                $errorMessage .= "y a un problème avec le champ 'Message'.";
            }
        }

        if ($errorMessage === "") {
            // AJOUTER L'ENVOI DU MAIL
            $this->sendAMail($data, $mailer);

            $response = array('reponse' => 'ok', 'message' => 'Votre message a bien été envoyé, vous recevrez bientôt une réponse.');
        }
        else {
            $response = array('reponse' => 'error', 'message' => $errorMessage);
            
        }

        return new JsonResponse($response);
    }


    private function sendAMail (object $data, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message("Message reçu depuis le Portfolio"))
            ->setFrom("no-reply@richard-meuret.fr")
            ->setTo("richard.meuret2@gmail.com")
            ->setBody(
                $this->render('email/contact.html.twig',
                    [
                        'data' => $data
                    ]
                ),
                'text/html'
            );
        $mailer->send($message);
    }
}
