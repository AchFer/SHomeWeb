<?PHP 
        
class Utilisateur {
  protected $id;
  private $Email;
  private $Nom;
  private $Prenom;
  private $password;
  private $image;

 /*******************************/
public function __construct($id,$Email,$Nom,$Prenom,$password,$image)
{
   $this->id=$id;
   $this->Email=$Email;
   $this->Nom=$Nom;
   $this->Prenom=$Prenom;
   $this->password=$password;
   $this->image=$image;
   
  }
  /**********************************/
    public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id=$id;
  }
 public function getNom(){
    return $this->Nom;
  }
 public function setNom_rec($Nom){
    $this->Nom=$Nom;
  }
 public function getEmail(){
    return $this->Email;
  }
 public function setEmail($Email){
    $this->Email=$Email;
  }
   
    public function getPrenom(){
    return $this->Prenom;
  }
 public function setPrenom($Prenom){
    $this->Prenom=$Prenom;
  }
    public function getPassword(){
    return $this->password;
  }
 public function setPassword($password){
    $this->password=$password;
  }

   public function getImage(){
    return $this->image;
  }
 public function setImage($image){
    $this->image=$image;
  }
  
  

   public static function Afficher() {
      $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from utilisateur  order by id");
       foreach($results->fetchAll() as $user)
        {$liste[] = new utilisateur($user['id'],$user['Email'],$user['Nom'],$user['Prenom'],$user['password'],$user['image']);}
      return $liste;
    }
     
  public static function supprimer($id)
  {  
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM utilisateur WHERE id='$id'");
  }
 /* public static function supprimer_bymaison($id_maison)
  {$db=Db::getInstance();
    $req=$db->query("DELETE FROM utilisateur WHERE maison_idMai='$id_maison'");
  }*/
   public static function ajouter_user($Email, $nom, $prenom, $password, $image)
  {
    $db=Db::getInstance();

    $qry =$db->exec("INSERT INTO utilisateur( Email, Nom, Prenom, password, image) VALUES ('$Email','$nom','$prenom','$password','$image')");
    echo $qry;
 }
 public static function nbr_user() 
      {   
        $db = Db::getInstance();
        $list = [];
        $res = $db->query("SELECT count(*) from utilisateur ");
        $rows =$res->fetchAll();
        return $rows[0];
  }
  
   public static function chercher_nom_user ($id)
   {
        $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from utilisateur  WHERE id='$id' ");
       foreach($results->fetchAll() as $user)
        {$liste[] = new utilisateur($user['id'],$user['Email'],$user['Nom'],$user['Prenom'],$user['password'],$user['image']);}
      return $liste;
  }
public static function update_user($Email, $nom, $prenom, $password, $image,$user_id)
{
    $db=Db::getInstance();

    $qry =$db->exec("UPDATE utilisateur SET Email='$Email',Nom='$nom',Prenom='$prenom',password='$password',image='$image' WHERE id='$user_id'");
    echo $qry;

}
   
        public static function chercher_nom_user1 ($user)
   {
        $liste = [];
      $db = Db::getInstance();
      $results =$db->query("SELECT * from utilisateur  WHERE Nom='$user' ");
       foreach($results->fetchAll() as $user)
        {$liste[] = new utilisateur($user['id'],$user['Email'],$user['Nom'],$user['Prenom'],$user['password'],$user['image']);}
      return $liste;
  }
 


}