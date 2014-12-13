<?php

namespace MyPackage\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class HomeController extends Controller
{
    public function homeAction(Request $request)
    {
        return $this->renderView('MyBundle:Home:welcome');
    }

}