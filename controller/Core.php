<?php

class Redirect
{
  public function __construct()
  {}

  public function home(){
    ob_start();
    require('view/home.php');
    require('view/produits.php');
    require('view/magasins.php');
    require('view/quisommesnous.php');
    require('view/contact.php');
    $content = ob_get_clean();
    require('view/template/default.php');
  }

    // public function produits(){
    //   ob_start();
    //   require('view/produits.php');
    //   $content2 = ob_get_clean();
    //   require('view/template/default.php');
    // }
    //
    //   public function magasins(){
    //     ob_start();
    //     require('view/magasins.php');
    //     $content3 = ob_get_clean();
    //     require('view/template/default.php');
    //   }
    //
    //     public function quisommesnous(){
    //       ob_start();
    //       require('view/quisommesnous.php');
    //       $content4 = ob_get_clean();
    //       require('view/template/default.php');
    //     }
    //
    //       public function contact(){
    //         ob_start();
    //         require('view/contact.php');
    //         $content5 = ob_get_clean();
    //         require('view/template/default.php');
    //       }
}

?>
