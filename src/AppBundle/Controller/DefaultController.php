<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Number;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Pages:index.html.twig', []);
    }


    /**
     * @Route("/create/number", name="add_number")
     */
    public function addNumberAction()
    {
        $em = $this->getDoctrine()->getManager();

       
        dump("Fini");
        die;

    }


}
