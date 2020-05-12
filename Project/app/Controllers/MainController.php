<?php
   namespace CL\Controllers;
   use CL\Controllers\Controller;
   use CL\Models\User;
   class MainController extends Controller{
      private $user;

      public function __construct(){
         $this->user =new User();
      }

    public function count(){
      $count = $this->user->counts();
       echo json_encode($count);
        }

    public function city(){
      $us = new User();
    $us->cou = $_POST['cou'];
    $hh=$us->citys(); 
    echo json_encode($hh);
   }

       public function selectproduct(){
         $product = $this->user->getAllproduct();
         $_REQUEST['PRO_LIST'] = $product;
         return "product";
      }
     
     public function cart(){
       $product = $this->user->getAllproduct();
         $_REQUEST['PRO_LIST'] = $product;
         return "cart";
     }

      public function id(){
         session_start();
           if (isset($_POST['id'])) {

      if (!isset($_SESSION['cart'])) {

         $_SESSION['cart'] = [];
      }

      if (!isset($_SESSION['cart'][$_POST['id']])) {
         $_SESSION['cart'][$_POST['id']] = 0;
      }

      $_SESSION['cart'][$_POST['id']] = $_SESSION['cart'][$_POST['id']] + 1;
      }
      $product = $this->user->getAllproduct();
         $_REQUEST['PRO_LIST'] = $product;
      return 'product';
      }


      public function id2(){
         session_start();
         if (isset($_POST['id2'])) {
      $_SESSION['cart'][$_POST['id2']] = $_SESSION['cart'][$_POST['id2']] + 1;
       }
       $product = $this->user->getAllproduct();
         $_REQUEST['PRO_LIST'] = $product;
      return 'cart';
      }

      public function id3(){
         session_start();
         if(isset($_POST['id3'])){
            $_SESSION['cart'][$_POST['id3']] = $_SESSION['cart'][$_POST['id3']] - 1;
      }
      $product = $this->user->getAllproduct();
         $_REQUEST['PRO_LIST'] = $product;
      return 'cart';
      }

      public function del(){
         session_start();
         if(isset($_POST['del'])){
            $_SESSION['cart'][$_POST['del']] = 0;
         }
         $product = $this->user->getAllproduct();
         $_REQUEST['PRO_LIST'] = $product;
         return"cart";
      }


      public function vhod(){
        return "vhod";
      }
      public function exit(){
        session_start();
       unset($_SESSION['login']);
        return"Enbek";
      }

      public function reg(){
        return "reg";
      }

      public function registr(){
        if ($_SERVER['REQUEST_METHOD']=='POST') {
    try{

      if( isset($_POST['log']) && !empty($_POST['log']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['pas1']) && !empty($_POST['pas1']) && isset($_POST['pas2']) && !empty($_POST['pas2'])){

        $nnn=true;
           $loggo = $this->user->users();
        foreach ($loggo as  $value) {
          if($_POST['log'] === $value['login']){
            $nnn=false;
            echo "<div  class='w-100 mb-3 mt-3  alert alert-dark' role='alert'>Ваш Email есть в базе!</div>";
            $login="";
          }
        }
          if($nnn===true){
            $login=$_POST['log'];
          }


          // проверка пароля
        if($_POST['pas1'] != $_POST['pas2']){
          echo "<div  class='w-100 mb-3 mt-3  alert alert-dark' role='alert'>Пароли не совпадают!</div>";
          $password="";
          
        }else{
          $password=$_POST['pas1'];
        }
        

        // проверка имени
        if(isset($_POST['name']) && !empty($_POST['name'])){
          $name=$_POST['name'];
        }

      // заполнение
        if(empty($login)){
          $login="";
        }else{
          if(isset($login) && !empty($login) && isset($name) && !empty($name) && isset($password) && !empty($password) ){
           
          $us = new User();
         $us->log=$login;
         $us->pas=$password;
         $us->name=$name;
         $this->user->Regs($us);
 

            echo "<div  class='w-100 mb-3 mt-3  alert alert-dark' role='alert'>Вы Зарегрестрировались!</div>";
          }
        }

      }else{
        echo "<div  class='w-100 mb-3 mt-3  alert alert-dark' role='alert'>НЕ ВСЕ ПОЛЯ ЗАПОЛНЕНЫ!</div>";

      }
  }catch(PDOException $e){
     echo "Error!: " . $e->getMessage() . "<br/>";
  }
  }else{
    return"reg";
  }
      }




      public function auto(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
          $users = $this->user->users();

    if(isset($_POST['log']) && !empty($_POST['log']) && isset($_POST['pas']) && !empty($_POST['pas'])){
      $bul=true;
      foreach ($users as  $value) {
        if($_POST['log'] == $value['login'] && $_POST['pas'] == $value['password']){
          $bul=false;
          // echo json_encode('ВЫ ПРОХОДИТЕ ДАЛЬШЕ Логин и Пароль правильный!')
           session_start();
           $_SESSION['login']=$_POST['log'];
           
           $string3="Добро пожаловать";
           echo json_encode($string3);
            // return"vhod";
        }
      }
      if($bul===true){
        $string2="Ваш Логин или Пароль Неправильный";
        // $_REQUEST['text2']=$string2;
        // return"vhod";
      echo json_encode($string2);
    }
      
    }else{
    $string="НЕ заполнены все поля";
    // $_REQUEST['text']=$string;
      echo json_encode($string);
    // return"vhod";
    }
  }else{
    return "vhod";
  }
 
      }
   }  
?>