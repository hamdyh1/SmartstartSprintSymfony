<?php

namespace FeedbackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Feedback/Default/index.html.twig');
    }
}
