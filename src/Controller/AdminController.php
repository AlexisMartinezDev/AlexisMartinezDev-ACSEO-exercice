<?php

namespace App\Controller;

use App\Repository\QuestionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(QuestionsRepository $questionsRepository): Response
    {
        //ici j'utilise l'injection de dépendance afin de passer directement la methode du repository orderQuestionsByEmail() à la clef twig 'questions'
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'questions' => $questionsRepository->orderQuestionsByEmail()
        ]);
    }

    #[Route('/admin/statutChecked/{id}', name: 'app_admin_statutChecked')]
    public function statutChecked($id, EntityManagerInterface $entityManager, QuestionsRepository $questionsRepository): Response {
        //on récupère l'objet grâce à son id passé dans la route
        $question = $questionsRepository->find($id);
        //on passe son statut à true
        $question->setStatut(true);
        $entityManager->persist($question);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin');
    }
}
