<?PHP 
        
class Reclamation {
  protected $idRec;
  private $nom_rec;
  private $description;
  private $utilisateur_id;
  
 /*******************************/
public function __construct($idRec,$description,$nom_rec,$utilisateur_id){
   $this->idRec=$idRec;
   $this->description=$description;
   $this->nom_rec=$nom_rec;
   $this->utilisateur_id=$utilisateur_id;
  }
  /**********************************/
   public function getIdRec(){
    return $this->idRec;
  }
  public function setIdRec($idRec){
    $this->idRec=$idRec;
  }
 public function getNom_rec(){
    return $this->nom_rec;
  }
 public function setNom_rec($nom_rec){
    $this->nom_rec=$nom_rec;
  }
   public function getDescription(){
    return $this->description;
  }
 public function setDescription($description){
    $this->description=$description;
  }
    public function getUtilisateur_id(){
    return $this->utilisateur_id;
  }
 public function setUtilisateur_id($utilisateur_id){
    $this->utilisateur_id=$utilisateur_id;
  }
  
   

   public static function Afficher() {
      $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from reclamation  order by idRec");
       foreach($results->fetchAll() as $reclamation)
        {$liste[] = new reclamation($reclamation['idRec'],$reclamation['description'],$reclamation['nom_rec'],$reclamation['utilisateur_id']);}

      return $liste;
    }
     
      public static function nbr_reclamtion() 
      {   
        $db = Db::getInstance();
        $list = [];
        $res = $db->query("SELECT count(*) from reclamation ");
        $rows =$res->fetchAll();
        return $rows[0];
  }
    public static function supprimer($idRec)
  {  //zid fazet kif tfassa5 maison tfasa5 les utilisateur ili feha 
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM reclamation WHERE idRec='$idRec'");
  } 
  public static function nbr_reclamtion_user($utilisateur_id) 
      {   
        $db = Db::getInstance();
        $list = [];
        $res = $db->query("SELECT count(*) from reclamation where utilisateur_id='$utilisateur_id' ");
        $rows =$res->fetchAll();
        return $rows[0];
  }
}