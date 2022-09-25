<?php

namespace App\Controller;

use App\Entity\Questions;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_mainPage')]
    public function index(Request $request, Questions $questions = null, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //On créé un nouvelle objet en lui passant les données du formulaire
            $questions = new Questions();
            $questions->setNom($form->get('nom')->getviewData());
            $questions->setEmail($form->get('email')->getviewData());
            $questions->setQuestion($form->get('question')->getviewData());
            $questions->setStatut(false);
            $em->persist($questions);
            $em->flush();
            //serialisation des données en json disponible sur la documentation officelle de symfony
            $encoders = [new JsonEncoder()];
            $normalizers = [new ObjectNormalizer()];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($questions, 'json');
            // création du fichier json unique basé sur les données de l'entité questions
            $fs = new \Symfony\Component\Filesystem\Filesystem();
            try {
                //génération du chemin absolu en le concaténant avec un uniqid()
                $uidpath = 'C:\Users\data\Desktop\ACSEO\json\\' . uniqid();
                //génération du json
                $fs->dumpFile($uidpath, $jsonContent);
            }
            catch(IOException $e) {
            }
        }
        return $this->render('main/index.html.twig', [
            'controller_name' => 'Envoyer une question',
            'form' => $form->createView()
        ]);
    }
}
