<?php

namespace ConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $url = $this->generateUrl('fos_user_profile_show');
        $response = new RedirectResponse($url);
        return $response;      
    }
}
