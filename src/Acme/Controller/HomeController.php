<?php

namespace Acme\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('AcmeBundle:Home:welcome');
    }
}