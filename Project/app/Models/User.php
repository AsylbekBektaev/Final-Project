<?php
   namespace CL\Models;
   use CL\Core\DBManager;
   use PDO;
   class User{
    public $log;
    public $pas;
    public $name;
     private $dbManager;
      public function __construct(){
         $this->dbManager = new DBManager("localhost", "bitlab", "root", "");
      }
      public function getAllproduct(){
         try{
            $query = $this->dbManager->getConnection()->prepare("SELECT * FROM `pro`");
            $query->execute();
            $result = $query->fetchAll();
             return $result;
         }catch(Exception $e){
            echo $e->getMessage();
         }
      }

      public function users(){
         try{
            $query = $this->dbManager->getConnection()->prepare("SELECT * FROM `tusers`");
            $query->execute();
            $result = $query->fetchAll();
             return $result;
         }catch(Exception $e){
            echo $e->getMessage();
         }
      }


      function Reg(){
      $conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
    $sql="INSERT INTO `tusers`(login,password,full_name) VALUES (:log,:pas,:fn);";
        $query = $conn->prepare($sql);
        $query->execute([
          'log'=>$this->log,
            'pas'=>$this->pas,
          'fn'=>$this->name
          
        ]);
      }

   }
?>