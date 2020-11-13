<?php

use \Hcode\Model\User;

function formatPrice(float $vlprice)
{
	return number_format($vlprice, 2, ",", ".");
}

function checkLogin($inadmin = true)
{
	return User::checkLogin($inadmin);
}

function getUserName()
{

	$user = User::getFromSession();

	//$iduser = $user->getiduser();

	//$user->get($iduser);

	return $user->getdesperson();

}

?>