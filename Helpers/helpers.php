<?php

use Illuminate\Support\Str;

define("PageCreate","create");
define("PageEdit","edit");
define("PageListe","liste");





function setMenuStyle($route,$classe)
{ $routeactuel=request()->route()->getName();
   if(containes($routeactuel,$route))
   {
    return $classe;
   }
   return "";
}


function setMenuActive($route)
{ $routeactuel=request()->route()->getName();
   if($routeactuel === $route)
   {
    return "active";
   }
   return "";
}
function getRoles()
{
    $roleName="";
    $i=0;
    foreach(auth()->user()->roles as $role)
    {
        $roleName.=$role->nom;
        if($i<sizeof(auth()->user()->roles)-1)
        {
            $roleName.=",";
        }
        $i++;
    }
return $roleName;
}

function containes($container,$contenu)
{
  return Str::contains($container,$contenu);
}







?>
