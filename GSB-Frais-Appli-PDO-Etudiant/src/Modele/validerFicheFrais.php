<?php
namespace App\Controller;
use PDO;
use App\Modele\ConnexionBdd;
function validerFicheFrais($mois,$idVisiteur){
    try {

        /*$bd = ConnexionBdd::getConnexion();*/

        $bd = new PDO(

            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        );

            $sql = 'select distinct LigneFraisForfait.mois, FicheFrais.idVisiteur,LigneFraisHorsForfait.Refuser,LigneFraisHorsForfait.id, LigneFraisForfait.idFraisForfait, LigneFraisForfait.quantite, LigneFraisHorsForfait.libelle, LigneFraisHorsForfait.date, LigneFraisHorsForfait.montant, (FraisForfait.montant * LigneFraisForfait.quantite) as Total '
            . 'from FicheFrais '
            . 'inner join LigneFraisForfait on FicheFrais.idVisiteur = LigneFraisForfait.idVisiteur '
            . 'inner join LigneFraisHorsForfait on FicheFrais.idVisiteur = LigneFraisHorsForfait.idVisiteur '
            . 'inner join FraisForfait on FraisForfait.id = LigneFraisForfait.idFraisForfait '
            . 'where FicheFrais.mois = :mois and FicheFrais.idVisiteur = :idVisiteur ';
            
                
            $st = $bd -> prepare( $sql ) ;

            $st -> execute( array( 
                                    ':mois' => $mois, 
                                    ':idVisiteur' => $idVisiteur,
                                    
                            ) 
                        ) ;
            $resultat = $st -> fetchall() ;

            
                return $resultat;

        }

    catch( PDOException $e ){

        die("Erreur : " . $e->getMessage());
        header( 'Location: ../index.php?echec=0' ) ;
    }
} 
?>