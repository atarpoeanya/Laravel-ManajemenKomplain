<?php


  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->role);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 'admin':
        return 'admin';
        break;
      case 'super':
        return 'super';
        break;
      default:
        return 'user';
        break;
    }
    
  }


?>