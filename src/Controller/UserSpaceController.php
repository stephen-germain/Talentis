<?php

namespace App\Controller;

use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserSpaceController extends AbstractController
{
    /**
     * @Route("/user/space", name="user_space")
     */
    public function index(ProfilRepository $profilRepository, Request $request)
    {
        $profil = $profilRepository->findAll();
        
        $form = $this->createForm(ProfilType::class);
        $form->handleRequest($request);


        return $this->render('user_space/user_space.html.twig', [
            'profil' => $profil,
            'formulaire' => $form->createView()
        ]);
    }
}


