<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\classes;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ComptableController extends AbstractController
{
    public function connexion(): Response
    {
        return $this->render('comptable/connexionComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]); 
    }
    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        
        $user = connecterComptable($login, $mdp);

        if($user!= null){
            return $this->redirect('./Accueil');
        }
        else{
            return $this->redirect('./Connexion');
        }

    }

    public function accueil(): Response
    {
        return $this->render('comptable/accueilComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]);
    }

    public function validerFicheFrais( Request $request): Response
    {

        $form = $this->createFormBuilder()
        ->add ('mois', TextType::class)
        ->add ('idVisiteur', TextType::class)
        ->add ('valider', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);
        
        $validerFicheFrais=[];
        if ($form->isSubmitted() && $form->isValid()){
            $mois=$form->get('mois')->getData();
            $idVisiteur=$form->get('idVisiteur')->getData();
            $validerFicheFrais= validerFicheFrais($mois,$idVisiteur);

        }

        return $this->render('comptable/validerFicheFrais.html.twig', [
            'controller_name' => 'ComptableController', 
            'formulaire'=>$form->createView(),
            'validerFicheFrais'=>$validerFicheFrais
        ]);
    }
}
