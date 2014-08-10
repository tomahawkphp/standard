<?php

namespace Acme\Controller;

use Tomahawk\Routing\Controller;

class HomeController extends Controller
{
    public function indexGet()
    {

        $users = $this->database->connection()->table('users')->get();

        dd($users);
        //dd($this->hasher->make('password'));

        $ret = $this->auth->attempt(array(
            'email' => 'tellishtc@gmail.com',
            'password' => 'password'
        ));

        //dd($ret);
        //dd($this->auth->getUser()->getAuthIdentifier());

        //$users = $this->database->table('users')->get();

        //dd($users);

        return $this->render('AcmeBundle:Home:welcome', array(
            'name' => 'Tom'
        ));
    }
}