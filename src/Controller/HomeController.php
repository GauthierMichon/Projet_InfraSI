<?php

namespace App\Controller;

use App\Entity\Questions;
use App\Entity\Themes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {

        $Themes = $this->getDoctrine()
            ->getRepository(Themes::class)
            ->findAll();

        
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'Themes' => $Themes
        ]);
    }


    /**
     * @Route("/questions/{theme}/{id}", name="questions")
     */
    public function Questions(string $theme, int $id)
    {

        $id_max = 0;

        $Questions = $this->getDoctrine()
            ->getRepository(Questions::class)
            ->findBy(array('theme' => $theme));


        $id_min = $Questions[0]->getId();

        foreach($Questions as $ques) {
            $ques->setId($ques->getId()-$id_min+1);
        }


        $question = $Questions[$id-1];

        
        return $this->render('home/questions.html.twig', [
            'controller_name' => 'HomeController',
            'question' => $question,
            'id_max' => $id_max,
            'id' => $id
        ]);
    }




    /**
     * @Route("/questions/{theme}/{id}/reponse", name="reponse")
     */
    public function Reponses(string $theme, int $id)
    {

        $id_max = 0;

        $Questions = $this->getDoctrine()
            ->getRepository(Questions::class)
            ->findBy(array('theme' => $theme));


        $id_min = $Questions[0]->getId();

        foreach($Questions as $ques) {
            $ques->setId($ques->getId()-$id_min+1);
            $id_max += 1;
        }



        $question = $Questions[$id-1];



        
        return $this->render('home/reponses.html.twig', [
            'controller_name' => 'HomeController',
            'question' => $question,
            'id_max' => $id_max,
            'id' => $id
        ]);
    }
}
