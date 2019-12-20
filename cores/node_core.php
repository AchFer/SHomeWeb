<?php
 include("entities/maison.php");
 include("entities/utilisateur.php");
 include("entities/noeud.php");
  include("entities/capteur.php");
    include("entities/reclamtion.php");

 Class node_core{

public function add_node(){
$reclamations= Reclamation:: nbr_reclamtion();
$NomNoeud=$_POST['NomNoeud'];

$user_id=$_POST['user_id'];

$maisons = Maison::chercher_maison_user($user_id);
   foreach($maisons as $maison)
   {
   $maison_idMai = $maison->getId();
   }

if($_FILES["image"]['name'])
    {
      $image=$_FILES["image"]["name"];
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
    }

$results = Noeud:: Ajouter_Noeud1($NomNoeud,$image,$maison_idMai);

  if(!empty($results)){
             ?>
          <script>
            Javascript:alert('Node ajouter !')
          </script>
          <?php
        
          }
$users=Utilisateur::chercher_nom_user($user_id);
             $nodes = Noeud::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_nodes.php');
      }


public function delete()
{$reclamations= Reclamation:: nbr_reclamtion();
  $id_noeud=$_GET['id_noeud'];


   $capteurdelete=Capteur::supprimerbyid_noeud($id_noeud);

  $noeuds=Noeud::chercher_nom_noeud($id_noeud);
  
    foreach($noeuds as $noeud)
   {
   $maison_idMai = $noeud->getMaison_id();
   }

$maisons = Maison::chercher_nom_maison($maison_idMai);
   foreach($maisons as $maison)
   {
   $user_id = $maison->getUtilisateur_id();
   }

 
  
  $users=Utilisateur::chercher_nom_user($user_id);

  $results = Noeud::supprimer($id_noeud);
  $nodes = Noeud::Afficher();
  
include'C:/xampp/htdocs/admin_m/views/list_nodes.php';
} 


public function page_nodes()
{
  $reclamations= Reclamation:: nbr_reclamtion();
  $nodes = Noeud::Afficher();
  //var_dump($nodes);
 

 
  require_once('C:/xampp/htdocs/admin_m/views/list_nodes.php');
} 
public function page_add_sensor()
{$reclamations= Reclamation:: nbr_reclamtion();
  $id_noeud=$_GET['id_noeud'];


   $results = Noeud::chercher_nom_noeud($id_noeud);
  
  require_once('C:/xampp/htdocs/admin_m/views/add_capteur.php');

}

public function add_capteur(){
$reclamations= Reclamation:: nbr_reclamtion();
  $nomCapteur=$_POST['nomCapteur'];
  $reference=$_POST['reference'];
  $id=$_POST['id'];

  $results = Capteur::Ajouter_Capteur($nomCapteur,$reference,$id);

  if(!empty($results)){
             ?>
          <script>
            Javascript:alert('capteur ajouter !')
          </script>
          <?php
        
          }

  $capteurs = Capteur::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_capteur.php');


}
public function page_capteurs(){
  $reclamations= Reclamation:: nbr_reclamtion();
  $capteurs = Capteur::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_capteur.php');

}

public function delete_capteur()
{$reclamations= Reclamation:: nbr_reclamtion();
  $idCap=$_GET['idCap'];
  $results = Capteur::supprimer($idCap);
  $capteurs = Capteur::Afficher();
include'C:/xampp/htdocs/admin_m/views/list_capteur.php';

}
public function reclamation_page()
{$reclamations= Reclamation:: nbr_reclamtion();
 $Reclamations = Reclamation::Afficher();

 require_once('C:/xampp/htdocs/admin_m/views/list_reclamation.php');
}
public function reclamation_supprimer(){
$reclamations= Reclamation:: nbr_reclamtion();
  $idRec=$_GET['idRec'];
  $results = Reclamation::supprimer($idRec);
$Reclamations = Reclamation::Afficher();
 require_once('C:/xampp/htdocs/admin_m/views/list_reclamation.php');
  
}
public function page_add_node(){
  $reclamations= Reclamation:: nbr_reclamtion();
  $users = Utilisateur::Afficher();
require_once('C:/xampp/htdocs/admin_m/views/add_node.php');
}


public function page_update_noeud(){

   $reclamations= Reclamation:: nbr_reclamtion();
  $id_noeud=$_GET['id_noeud'];
$noeuds=Noeud::chercher_nom_noeud($id_noeud);

require_once('C:/xampp/htdocs/admin_m/views/page_update_noeud.php');
}


public function updating_node(){
  $reclamations= Reclamation:: nbr_reclamtion();
  $noeud_id=$_POST['noeud_id'];
  $NomNoeud=$_POST['NomNoeud'];


 $noeuds=Noeud::chercher_nom_noeud($noeud_id);

foreach($noeuds as $noeud) { $id_maison=$noeud->getMaison_id();}

 $maisons=Maison::chercher_nom_maison($id_maison);
   foreach($maisons as $maison) { $user_id=$maison->getUtilisateur_id(); }

if($_FILES["image"]['name'])
    {
      $image=$_FILES["image"]["name"];
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
    }

$results = Noeud:: updating_node($noeud_id,$NomNoeud,$image);

  if(!empty($results)){
             ?>
          <script>
            Javascript:alert('Node updated !')
          </script>
          <?php
        
          }
             //$users=Utilisateur::chercher_nom_user($user_id);
             $nodes = Noeud::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_nodes.php');

  
}
public function search_node(){
  $reclamations= Reclamation:: nbr_reclamtion();
   $user=$_POST['user'];
   $users=Utilisateur::chercher_nom_user1($user);
   foreach ($users as $user) {
   $user_id=$user->getId();
   }

   $maisons=Maison::chercher_maison_user($user_id);
   foreach ($maisons as $maison) {
   $maison_id=$maison->getId();
   }
     $nodes = Noeud::chercher_id_noeud($maison_id);
     require_once('C:/xampp/htdocs/admin_m/views/list_nodes.php');

}
public function search_sensor()
{
  $reclamations= Reclamation:: nbr_reclamtion();
   $user=$_POST['user'];
   $users=Utilisateur::chercher_nom_user1($user);
   foreach ($users as $user) {
   $user_id=$user->getId();
   }

   $maisons=Maison::chercher_maison_user($user_id);
   foreach ($maisons as $maison) {
   $maison_id=$maison->getId();
   }
     $nodes = Noeud::chercher_id_noeud($maison_id);
     foreach ($nodes as $node) {
   $noeud_id=$node->getId();}

  $capteurs = Capteur::chercher_id_capteur($noeud_id);


       
require_once('C:/xampp/htdocs/admin_m/views/list_capteur.php');
}


}
?>