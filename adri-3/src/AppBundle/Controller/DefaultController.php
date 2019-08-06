<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Pais;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }

    /**
     * @Route("/paises", name="paises")
     */
    public function paisesAction(Request $request)
    {
        dump("fasdfasdfasdasd");

        // replace this example code with whatever you need
        // return $this->render('frontal/paises.html.twig');

        $em = $this->getDoctrine()->getManager();
       

        $paises = $em->getRepository(Pais::class)->findAll();

        dump($paises);

        return $this->render('frontal/paises.html.twig', ['paises' => $paises]);
    }

      /**
     * @Route("/provincias", name="provincias")
     */
    public function provinciasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/provincias.html.twig');
    }



}
