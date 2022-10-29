<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\classes;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class VisiteurController extends AbstractController
{
    public function connexion(): Response
    {
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }


    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        
        $user = connecterVisiteur($login, $mdp);

        if($user!= null){
            return $this->redirect('./Accueil');
        }
        else{
            return $this->redirect('./Connexion');
        }

    }

    public function accueil(): Response
    {
        return $this->render('visiteur/accueilVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function voirFicheFrais( Request $request): Response
    {

        $form = $this->createFormBuilder()
        ->add ('mois', TextType::class)
        ->add ('valider', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);
        
        $ficheFrais=[];
        if ($form->isSubmitted() && $form->isValid()){
            $mois=$form->get('mois')->getData();
            $ficheFrais= voirFicheFrais($mois);

        }

        return $this->render('visiteur/ficheFraisVisiteur.html.twig', [
            'controller_name' => 'VisiteurController', 
            'formulaire'=>$form->createView(),
            'ficheFrais'=>$ficheFrais
        ]);
    }

    #[Route('/Visiteur/FicheFrais/{mois}', name: 'voirFicheFrais')]
    public function voirStagesAnimateurs($idAnimateur, AnimateurRepository $stage): Response
    {
        return $this->render('stage/base.html.twig', [
            'stages' => $stage->getStageParAnimateurs($idAnimateur) ,
        ]);
    }


    
}

    

    


