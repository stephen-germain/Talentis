<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use App\Form\EditProfilType;
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

    /**
     * @Route("/profil/update", name="profil_update")
     */
    public function profilUpdate(Request $request){

        $user = $this->getUser();
        $form = $this->createForm(EditProfilType::class, $user);
        $form->handleRequest($request);

        $img = $form['img']->getData();

        if($form->isSubmitted()){

            if($img){

                $nomImg = md5(uniqid());
                $extensionImg = $img->guessExtension();
                $newNomImg = $nomImg.'.'.$extensionImg;

                try{
                    $img->move(
                        $this->getParameter('img_projet'),
                        $newNomImg
                    );
                }
                catch(FileException $e){
                    $this-addFlash(
                        'danger',
                        'Une erreur est survenue lors de l\'importation de l\'image'
                    );  
                }

                $user->setImg($newNomImg);

            }

            if($form->isValid()){
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le profil à été modifiée'
                );
            }
            else{
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue'
                );
            }
            return $this->redirectToRoute('user_space');
        }

        return $this->render('user_space/editProfil.html.twig', [
            'formulaire' => $form->createView()
        ]);
    }

    /**
     * @Route("/profil/delete", name="profil_delete")
     */
    public function profilDelete(){
        $user = $this->getUser();
        $this->container->get('security.token_storage')->setToken(null);

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($user);
        $manager->flush();

        // Ceci ne fonctionne pas avec la création d'une nouvelle session !
        $this->addFlash('success', 'Votre compte utilisateur a bien été supprimé !'); 

        return $this->render('user_space/deleteProfil.html.twig');
    }
}


