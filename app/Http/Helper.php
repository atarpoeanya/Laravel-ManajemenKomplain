<?php


  function checkPermission($permissions){
    if(auth()->user()) {
    $userAccess = getMyPermission(auth()->user()->role);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
    }
    else
    return 1;
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