<?php

    session_start();

require_once ('controller/Core.php');
require_once ('controller/Controller.php');
$controller = new Controller();

try
{
	if(isset($_GET['p']))
	{
		$call = new Redirect();

		if($_GET['p'] == 'home')
		{$call->home();}

  	else if($_GET['p'] == 'index')
		{$call->home();}

      	// else if($_GET['p'] == 'contact')
    		// {$call->contact();}
        //
        //   	else if($_GET['p'] == 'quisommesnous')
        // 		{$call->quisommesnous();}
        //
        //       	else if($_GET['p'] == 'produits')
        //     		{$call->produits();}
        //
        //           	else if($_GET['p'] == 'magasins')
        //         		{$call->magasins();}
    //
		// else if($_GET['p'] == 'forum')
		// {$call->forum();}
    //
		// else if($_GET['p'] == 'boutique')
		// {$call->boutique();}
    //
		// else if($_GET['p'] == 'admin')
		// {$call->admin();}
		else
		{throw new Exception('Aucune page correspondante');}
	}
	else
	{
		header('Location: index.php?p=home');
	}
}


catch(Exception $e)
{
    $errorMessage = $e->getMessage();
    require ('view/errorView.php');
}

if (isset($_POST)) {
  if(isset($_POST['nom'])) {
    $controller->getForm();
  }
}
?>
