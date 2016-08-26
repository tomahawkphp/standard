<?php

namespace MyApplication\Bundle\MyBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Tomahawk\HttpCore\Request;
use Tomahawk\Routing\Controller\Controller;

class HomeController extends Controller
{
    public function welcomeAction(Request $request)
    {
        //$this->get('session')->set('name', 'Tom');
        //return new RedirectResponse($this->get('url_generator')->route('form'));

        $templateName = 'MyBundle:Home:welcome.twig';

        $parser = $this->container->get('template.name_parser');
        $locator = $this->container->get('template.locator');

        $path = $locator->locate($parser->parse($templateName));

        return $this->renderView($templateName, array(
            'controller_class' => get_class($this),
            'template_name'    => $templateName,
            'route_fp'         => $path
        ));
    }
}
