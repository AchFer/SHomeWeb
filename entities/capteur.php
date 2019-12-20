<?PHP 
        
class Capteur {
  protected $idCap;
  private $nomCapteur;
  private $reference;
  private $noeuds_id;
  
 /*******************************/
public function __construct($idCap,$nomCapteur,$reference,$noeuds_id){
   $this->idCap=$idCap;
   $this->nomCapteur=$nomCapteur;
   $this->reference=$reference;
   $this->noeuds_id=$noeuds_id;
  }
  /**********************************/
   public function getIdCap(){
    return $this->idCap;
  }
  public function setIdCap($idCap){
    $this->idCap=$idCap;
  }
 public function getNomCapteur(){
    return $this->nomCapteur;
  }
 public function setNomCapteur($nomCapteur){
    $this->nomCapteur=$nomCapteur;
  }
   public function getReference(){
    return $this->reference;
  }
 public function setReference($reference){
    $this->reference=$reference;
  }
     public function getNoeuds_id(){
    return $this->noeuds_id;
  }
 public function setNoeuds_id($noeuds_id){
    $this->noeuds_id=$noeuds_id;
  }
  
  
     public static function Ajouter_Capteur($nomCapteur,$reference,$id) {
      $db = Db::getInstance();
      $qry =$db->exec("INSERT INTO capteur (nomCapteur, reference,noeuds_id) VALUES ('$nomCapteur','$reference','$id')");
       echo $qry;
    }
    
   
     
     

   public static function Afficher() {
      $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from capteur  order by idCap");
       foreach($results->fetchAll() as $capteur)
        {$liste[] = new capteur($capteur['idCap'],$capteur['nomCapteur'],$capteur['reference'],$capteur['noeuds_id']);}
      return $liste;
    }
     
  public static function supprimer($idCap)
  {  //zid fazet kif tfassa5 maison tfasa5 les utilisateur ili feha 
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM capteur WHERE idCap='$idCap'");
  }
   public static function supprimerbyid_noeud($noeuds_id)
  {  //zid fazet kif tfassa5 maison tfasa5 les utilisateur ili feha 
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM capteur WHERE noeuds_id='$noeuds_id'");
  }
  public static function chercher_id_capteur($noeud_id)
  {
   $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from capteur  WHERE idCap='$noeud_id' ");
       foreach($results->fetchAll() as $capteur)
        {$liste[] = new capteur($capteur['idCap'],$capteur['nomCapteur'],$capteur['reference'],$capteur['noeuds_id']);}
      return $liste;

  }

}