<?php
function authentication ($user, $pass){
  global $wp, $wp_rewrite, $wp_the_query, $wp_query;
  

  if(empty($user) || empty($pass)){
    return false;
  } else {

    //require_once('wp-blog-header.php');
    require_once('wp-load.php');
    $status = false;
    $auth = wp_authenticate($user, $pass );
    if( is_wp_error($auth) ) {      
      $status = false;
    } else {
      $status = true;
    }
    return $status;
  } 
}

function getUser ($username){
  global $wp, $wp_rewrite, $wp_the_query, $wp_query;

  if(empty($username)){
    return false;
  } else {

    //require_once('wp-blog-header.php');
    require_once('wp-load.php');
    $data = null;
    $user = get_user_by( 'login', $username );
    //echo 'User is ' . $user->first_name . ' ' . $user->last_name;
    if( is_wp_error($user) ) {      
      $data = null;
    } else {
      $data = $user;
    }
    return $data;
  } 
}


$username = $_POST['username'];
$password = $_POST['password'];
//username = "aldaircastelan";
//password = "castelan123";

if (authentication($username, $password)) $res = 'true';
else $res = 'false';

$oUser = getUser($username);
//print_r($oUser->roles);


echo '{"auth":[{"valido":' . $res  . ', "id": ' . $oUser->id . ', "nombre_completo": "' . $oUser->first_name . " " . $oUser->last_name . "" .'", "rol":"' . $oUser->roles['0'] .'","correo":"'.$oUser->user_email.'"}]}';











?>
