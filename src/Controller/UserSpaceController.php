<?php

namespace App\Controller;

use App\Entity\Profil;
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

        $profil =[];
        $form = $this->createForm(ProfilType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $profilData = $form->getData();
           
            $profil = $profilRepository->searchProfil($profilData);

        }

        return $this->render('user_space/user_space.html.twig', [
            'formulaire' => $form->createView(),
             'profils' => $profil,
        ]);
    }
}


