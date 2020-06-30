<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->render('home/index.html.twig', [

            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/viewpost/{id}")
     */
    public function viewpost($id){

        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);

        return $this->render("home/viewpost.html.twig",[

            'post' => $post
        ]);
    }
}
