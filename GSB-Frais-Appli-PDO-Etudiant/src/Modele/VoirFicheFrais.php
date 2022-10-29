<?php
namespace App\Controller;
use PDO;
use App\Modele\ConnexionBdd;
function voirFicheFrais($mois){
    try {

        /*$bd = ConnexionBdd::getConnexion();*/

        $bd = new PDO(

            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        );

            $sql = 'select * '
            . 'from FicheFrais '
            . 'where mois = :mois ';
            
                
            $st = $bd -> prepare( $sql ) ;

            $st -> execute( array( 
                                    ':mois' => $mois 
                                    
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