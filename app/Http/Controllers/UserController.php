<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\information;
use App\article;
class UserController extends Controller
{

    public function index()
    {
        $liste = article::all();
        $listeInfo = information::all();
        return view('user/Acceuill_user', [
            'listeInfo' => $listeInfo,
            'listePub' => $liste,
        ]);
    }

     //login admin
     public function log_user(Request $request)
     {
          //login
          $login = Users::loggin(request('mail'),request('mdp'));
         if($login == 0)
         {
             return view('user/User_index',[
                 'erreur' => 'Email ou mot de passe errone',
                     ]);
         }
         else
         {
             return view('user/Acceuill_user');
         }
     }

     public function liste()
     {
        $liste = article::all();
        return view('user/liste',[
            'liste' => $liste,
        ]);
     }

      public function fiche()
    {
        $url = request('id');
        $tab = array();
        $tab = explode("-", $url);
        $id = $tab[count($tab)-1];
        $liste = article::find($id);
        return view('user/fiche',[
            'liste' => $liste,
        ]);
    }


}
