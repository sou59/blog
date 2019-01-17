<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 17/01/19
 * Time: 15:25
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{

    /**
     * @Route("/", name="blog")
     */
    public function blogAction() {
        return $this->render("default/index.html.twig");
    }

    /**
     * @Route("/list", name="list")
     */
    public function blogListAction() {

        $tab = [
            [
                "id"=>"1",
                "title"=>"Article 1",
                "resume"=>"Article 1",
                "contenu"=>"Test toto",
                "auteur"=>"Toto",
                "date"=>"26-01-1996",
                "image"=>"img/biere1.jpg"
            ],
            [
                "id"=>"2",
                "title"=>"Article 2",
                "resume"=>"Article 2",
                "contenu"=>"Test toto",
                "auteur"=>"Toto",
                "date"=>"26-01-1996",
                "image"=>"img/biere1.jpg"
                ],
            [
                "id"=>"3",
                "title"=>"Article 2",
                "resume"=>"Article 2",
                "contenu"=>"Test toto",
                "auteur"=>"Toto",
                "date"=>"26-01-1996",
                "image"=>"img/biere1.jpg"
                ]
        ];

        return $this->render('default/list.html.twig', ['articles'=>$tab]);
    }

    /**
     * @Route("/list/{id}", name="detail", requirements={"id"="\d+"})
     */
    public function blogDetailAction($id) {
        return $this->render('default/detail.html.twig', ['id'=>$id]);
    }


    /**
     * @Route("/delete/{id}", name="delete", requirements={"id"="\d+"})
     */
    public function deleteDetailAction($id) {
        return $this->render('default/index.html.twig');
    }
}