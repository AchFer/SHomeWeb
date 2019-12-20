<?PHP 
        
class Noeud {
  protected $id;
  private $NomNoeud;
   private $maison_id;
  private $image;
  
  
 /*******************************/
public function __construct($id,$NomNoeud,$maison_id,$image){
   $this->id=$id;
   $this->NomNoeud=$NomNoeud;
   $this->maison_id=$maison_id;
   $this->image=$image;
  }
  /**********************************/
   public function getId(){
    return $this->id;
  }
  public function setIdMai($id){
    $this->id=$id;
  }
 public function getNomNoeud(){
    return $this->NomNoeud;
  }
 public function setNomNoeud($NomNoeud){
    $this->NomNoeud=$NomNoeud;
  }
   public function getImage(){
    return $this->image;
  }
 public function setImage($image){
    $this->image=$image;
  }
   public function getMaison_id(){
    return $this->maison_id;
  }
 public function setMaison_id($maison_id){
    $this->maison_id=$maison_id;
  }

     public static function Ajouter_Noeud($id_maison) {
      $db = Db::getInstance();
    
      $qry =$db->exec("INSERT INTO noeud ( NomNoeud, maison_id , image ) VALUES ('cuisine','$id_maison','cuisine.jpg')");
         $qeryy =$db->exec("INSERT INTO noeud ( NomNoeud, maison_id , image ) VALUES ('salle de bain','$id_maison','salle_de_bain.jpg')");
       $qery =$db->exec("INSERT INTO noeud ( NomNoeud, maison_id , image ) VALUES ('salon','$id_maison','sallonn.jpg')");
    
      // echo $qry;
    }
  public static function Ajouter_Noeud1($NomNoeud,$image,$maison_idMai) {
      $db = Db::getInstance();
      $qry =$db->exec("INSERT INTO noeud ( NomNoeud, maison_id , image ) VALUES ('$NomNoeud','$maison_idMai','$image')");
    }

   public static function Afficher() {
      $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from noeud  order by id");
       foreach($results->fetchAll() as $noeud)
        {$liste[] = new noeud($noeud['id'],$noeud['NomNoeud'],$noeud['maison_id'],$noeud['image']);}
      return $liste;
    }
     
  public static function supprimer($id_noeud)
  {  //zid fazet kif tfassa5 maison tfasa5 les utilisateur ili feha 
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM noeud WHERE id='$id_noeud'");
  }
  public static function chercher_nom_noeud($id_noeud)
  {

    $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from noeud  where id='$id_noeud'");
       foreach($results->fetchAll() as $noeud)
        {$liste[] = new noeud($noeud['id'],$noeud['NomNoeud'],$noeud['maison_id'],$noeud['image']);}
      return $liste;
  }
    public static function chercher_id_noeud($id_maison)
  {

    $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from noeud  where maison_id='$id_maison'");
       foreach($results->fetchAll() as $noeud)
        {$liste[] = new noeud($noeud['id'],$noeud['NomNoeud'],$noeud['maison_id'],$noeud['image']);}
      return $liste;
  }
  public static function supprimer_byidmaison($id_maison)
  {
   $db=Db::getInstance();
    $req=$db->query("DELETE FROM noeud WHERE maison_id='$id_maison'");

  }
 
  public static function updating_node($noeud_id,$NomNoeud,$image)
  {

     $db = Db::getInstance();
      $qry =$db->exec(" UPDATE noeud SET NomNoeud='$NomNoeud', image='$image' WHERE id='$noeud_id'");
  }
  
}