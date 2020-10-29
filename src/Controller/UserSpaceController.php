<?php

namespace App\Controller;

use App\Repository\ProfilRepository;
use App\Repository\TestCompetencesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserSpaceController extends AbstractController
{
    /**
     * @Route("/user/space", name="user_space")
     */
    public function index(ProfilRepository $profilRepository, TestCompetencesRepository $testRepository)
    {
        $profil = $profilRepository->findAll();
        $competence = $testRepository->findAll();
        

        return $this->render('user_space/user_space.html.twig', [
            'profil' => $profil,
            'competence' => $competence,
        ]);
    }
}


