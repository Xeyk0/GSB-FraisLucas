<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\classes;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Lignefraishorsforfait;
use App\Entity\Fichefrais;
use App\Entity\Etat;


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
    public function refuserFicheFrais(Request $request): Response{
        $id = $request->query->get('idLigne');

    $ficheFraisHorsForfait = $this->getDoctrine()->getRepository(Lignefraishorsforfait::class)->find($id);

    if (!$ficheFraisHorsForfait) {
        throw $this->createNotFoundException('Fiche de frais hors forfait introuvable');
    }

    $ficheFraisHorsForfait->setRefuser(true);

    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->persist($ficheFraisHorsForfait);
    $entityManager->flush();

    
    return $this->redirectToRoute('app_ComptableValiderFicheFrais');
}

public function valider(Request $request): Response{
    $id = $request->query->get('idVisiteur');

$ficheFrais = $this->getDoctrine()->getRepository(Fichefrais::class)->findOneBy(["idvisiteur"=>$id]);
$etatValider = $this->getDoctrine()->getRepository(Etat::class)->find('VA');
if (!$ficheFrais) {
    throw $this->createNotFoundException('Fiche de frais introuvable');
}

$ficheFrais->setIdetat($etatValider);
$ficheFrais->setDateModif(new \DateTime());
$entityManager = $this->getDoctrine()->getManager();
$entityManager->persist($ficheFrais);
$entityManager->flush();


return $this->redirectToRoute('app_ComptableValiderFicheFrais');
}


public function modifierFraisForfait(Request $request): Response {
    

        $form = $this->createFormBuilder()
        ->add ('idFraisForfait', TextType::class)
        ->add ('quantite', TextType::class)
        ->getForm();

        $form->handleRequest($request);
        
        $modifierFraisForfait=[];
        if ($form->isSubmitted() && $form->isValid()){
            $idFraisForfait=$form->get('idFraisForfait')->getData();
            $quantite=$form->get('quantite')->getData();


        }

        return $this->render('comptable/modifierFraisForfait.html.twig', [
            'controller_name' => 'ComptableController', 
            'formulaire'=>$form->createView(),
            'modifierFraisForfait'=>$modifierFraisForfait
        ]);
    

}

}
