<?PHP 
        
class Maison {
  protected $id;
  private $adresse;
  private $utilisateur_id;
  private $image;
  
 /*******************************/
public function __construct($id,$adresse,$utilisateur_id,$image){
   $this->id=$id;
   $this->adresse=$adresse;
   $this->image=$image;
    $this->utilisateur_id=$utilisateur_id;
  }
  /**********************************/
   public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id=$id;
  }
 public function getAdresse(){
    return $this->adresse;
  }
 public function setAdresse($adresse){
    $this->adresse=$adresse;
  }
   public function getImage(){
    return $this->image;
  }
 public function setImage($image){
    $this->image=$image;
  }
  public function getUtilisateur_id(){
    return $this->utilisateur_id;
  }
 public function setUtilisateur_id($utilisateur_id){
    $this->utilisateur_id=$utilisateur_id;
  }
  
     public static function Ajouter_Maison($adresse,$image,$user_id) {
      $db = Db::getInstance();
      $qry =$db->exec("INSERT INTO maison (Adresse, image,utilisateur_id) VALUES ('$adresse','$image','$user_id')");
       echo $qry;
    }
     

   public static function Afficher() {
      $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from maison  order by id");
       foreach($results->fetchAll() as $maison)
        {$liste[] = new maison($maison['id'],$maison['Adresse'],$maison['utilisateur_id'],$maison['image']);}
      return $liste;
    }
     
  public static function supprimer($id_maison)
  {  //zid fazet kif tfassa5 maison tfasa5 les utilisateur ili feha 
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM maison WHERE id='$id_maison'");
  }
  public static function chercher_nom_maison($id_maison)
  {
      $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from maison  WHERE id='$id_maison' ");
       foreach($results->fetchAll() as $maison)
        {$liste[] = new maison($maison['id'],$maison['Adresse'],$maison['utilisateur_id'],$maison['image']);}
      return $liste;
  }
public static function chercher_maison_user($id){
 $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from maison  WHERE utilisateur_id='$id' ");
       foreach($results->fetchAll() as $maison)
        {$liste[] = new maison($maison['id'],$maison['Adresse'],$maison['utilisateur_id'],$maison['image']);}
      return $liste;

}
public static function Update_Maison($adresse,$image,$home_id)
{

 $db = Db::getInstance();
      $qry =$db->exec("UPDATE maison SET Adresse='$adresse',image='$image' WHERE id='$home_id'");
       echo $qry;

}



}