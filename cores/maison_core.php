<?php
 include("entities/maison.php");
 include("entities/utilisateur.php");
   include("entities/reclamtion.php");
 include("entities/noeud.php");
include("entities/capteur.php");
 Class maison_core{
public function login (){
  
  
  require_once('C:/xampp/htdocs/admin_m/views/login.php');
}
public function verifAdmin()
{




    if((($_POST['pseudo'])=='admin')&&(($_POST['mot_de_passe'])=='admin'))
        { $users = Utilisateur::nbr_user();
          $utlisateurs=Utilisateur::Afficher();
          foreach($utlisateurs as $utlisateur) 
                { 
                 
                $nbrs=Reclamation::nbr_reclamtion_user($utlisateur->getId()); 
             //  var_dump($nbrs);

                 } 
        //    die();
          $reclamations= Reclamation:: nbr_reclamtion();

           require_once('C:/xampp/htdocs/admin_m/views/acceuil.php');
        }

 

    else if($_POST['pseudo'] !='admin')
        { ?>
          <script>
            Javascript:alert('Merci de verifier votre pseudo !')
            document.location.replace("?core=maison&action=login");
          </script>
          <?php
        }

    else if($_POST['mot_de_passe'] !='admin')
        {?>
          <script>
            Javascript:alert('Merci de verifier votre mot_de_passe  !')
            document.location.replace("?core=maison&action=login");
          </script>
          <?php
         }
 }
 public function acceuil_admin(){ 
 $users = Utilisateur::nbr_user();

          $utlisateurs=Utilisateur::Afficher();
        
          $reclamations= Reclamation:: nbr_reclamtion();
$reclamations= Reclamation:: nbr_reclamtion();
  require_once('C:/xampp/htdocs/admin_m/views/acceuil.php');}



public function home_list(){
  $reclamations= Reclamation:: nbr_reclamtion();
  $maisons = Maison::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_home.php');
}


public function delete()
{$reclamations= Reclamation:: nbr_reclamtion();
  $id_maison=$_GET['id_maison'];
  
  $noeuds=Noeud::chercher_id_noeud($id_maison);
   foreach($noeuds as $noeud) { $id_noeud=$noeud->getId();
   $capteurdelete=Capteur::supprimerbyid_noeud($id_noeud);}

  $noeudelete=Noeud::supprimer_byidmaison($id_maison);
  $results = Maison::supprimer($id_maison);
  
  $maisons = Maison::Afficher();
  include 'C:/xampp/htdocs/admin_m/views/list_home.php';
}

  public function Users_list()
  {$reclamations= Reclamation:: nbr_reclamtion();
  $users = Utilisateur::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_users.php');

  }


  public function delete_user()
{$id_maison=NULL;
  $reclamations= Reclamation:: nbr_reclamtion();
  $id=$_GET['id'];

  $maisons=Maison::chercher_maison_user($id);
  foreach($maisons as $maison) { $id_maison=$maison->getId();}

   $noeuds=Noeud::chercher_id_noeud($id_maison);
   foreach($noeuds as $noeud) { $id_noeud=$noeud->getId();
   $capteurdelete=Capteur::supprimerbyid_noeud($id_noeud);}

  if($id_maison==NULL){ 
    $result = Utilisateur::supprimer($id);
    $users = Utilisateur::Afficher();}
  else{

    $noeudelete=Noeud::supprimer_byidmaison($id_maison);
    $results = Maison::supprimer($id_maison);
    $result = Utilisateur::supprimer($id);
  $users = Utilisateur::Afficher();}
  include 'C:/xampp/htdocs/admin_m/views/list_users.php';
}


public function page_add_user()
{$reclamations= Reclamation:: nbr_reclamtion();
  // $id_maison=$_GET['id_maison'];
 //  $results = Maison::chercher_nom_maison($id_maison);

  require_once('C:/xampp/htdocs/admin_m/views/add_user.php');
}


public function add_user(){
$reclamations= Reclamation:: nbr_reclamtion();
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$Email=$_POST['Email'];
$password=$_POST['password'];
//$maison_id=$_POST['id'];

if($_FILES["image"]['name'])
    {
      $image=$_FILES["image"]["name"];
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
    }

$results = Utilisateur::ajouter_user($Email, $nom, $prenom, $password, $image);


  if(!empty($results)){
             ?>
          <script>
            Javascript:alert('User ajouter !')
          </script>
          <?php
        
          }

             $users = Utilisateur::Afficher();
  require_once('views/list_users.php');
      }


 public function add_maison()
 {
$reclamations= Reclamation:: nbr_reclamtion();
  $user_id=$_POST['user_id'];
  $adresse=$_POST['adresse'];

if($_FILES["image"]['name'])
    {
      $image=$_FILES["image"]["name"];
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
    }

  $results = Maison::Ajouter_Maison($adresse,$image,$user_id) ;

  $maisons = Maison::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_home.php');


 }
 public function add_maison_page()
 {$reclamations= Reclamation:: nbr_reclamtion();
  $id=$_GET['id'];
 $results= Utilisateur::chercher_nom_user($id);
 
 require_once('C:/xampp/htdocs/admin_m/views/add_home.php');
 }


public function page_add_node()
{
  $reclamations= Reclamation:: nbr_reclamtion();
  $id_maison=$_GET['id_maison'];

  $maisons = Maison::chercher_nom_maison($id_maison);
   foreach($maisons as $maison)
   {
   $id_user = $maison->getUtilisateur_id();
   }
   $users=Utilisateur::chercher_nom_user($id_user);


   $results = Noeud:: Ajouter_Noeud($id_maison);
   $nodes = Noeud::Afficher();
   require_once('C:/xampp/htdocs/admin_m/views/list_nodes.php');

// require_once('/views/add_node.php');


  
}

public function update_user_page()
{$reclamations= Reclamation:: nbr_reclamtion();
  $id_user=$_GET['id'];
   $users=Utilisateur::chercher_nom_user($id_user);
     require_once('C:/xampp/htdocs/admin_m/views/update_user_page.php');
}

public function update_user()
{
$reclamations= Reclamation:: nbr_reclamtion();
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$user_id=$_POST['user_id'];

if($_FILES["image"]['name'])
    {
      $image=$_FILES["image"]["name"];
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
    }

$results = Utilisateur::update_user($Email, $nom, $prenom, $password, $image,$user_id);


  if(!empty($results)){
             ?>
          <script>
            Javascript:alert('User Updated !')
          </script>
          <?php
        
          }

             $users = Utilisateur::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_users.php');

}
public function page_update_home()
{
  $reclamations= Reclamation:: nbr_reclamtion();
  $id_Home=$_GET['id'];
   $homes=Maison::chercher_nom_maison($id_Home);
     require_once('C:/xampp/htdocs/admin_m/views/update_home_page.php');
}

public function update_maison(){

$reclamations= Reclamation:: nbr_reclamtion();
 $home_id=$_POST['home_id'];
  $adresse=$_POST['adresse'];

if($_FILES["image"]['name'])
    {
      $image=$_FILES["image"]["name"];
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
    }

  $results = Maison::Update_Maison($adresse,$image,$home_id) ;

  $maisons = Maison::Afficher();
  require_once('C:/xampp/htdocs/admin_m/views/list_home.php');


}
public function send_mail()
{$reclamations= Reclamation:: nbr_reclamtion();
  $idUser=$_GET['idUser'];
  $emails=Utilisateur::chercher_nom_user($idUser);
  foreach ($emails as $email) {
    $adresse_mail=$email->getEmail();
 
  }

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = true;
$mail->Debugoutput='html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 25;
$mail->isHTML(true);
$mail->Username = "sahar.meth@gmail.com";
$mail->Password = "*S07219190";
$mail->setFrom("sahar.meth@gmail.com");
$mail->Subject = "Reclamation vu";
$mail->Body= "Dear client, a technicial team should be at your location to fix the problem as soon as possible.
thank you for your patience";
$mail->AltBody ="5demt  baby";
$mail->AddAddress($adresse_mail);
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//var_dump($mail);
if (!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo;
} else{


       ?>
          <script>
            Javascript:alert('Mail sent !');
          </script>
          <?php


 $Reclamations = Reclamation::Afficher();
}


include 'C:/xampp/htdocs/admin_m/views/list_reclamation.php';

}


}
?>