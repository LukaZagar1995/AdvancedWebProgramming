<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(EntityManagerInterface $entityManager)
    {
        $products = $entityManager->getRepository('AppBundle:Product')->findAll();

        return $this->render(
            'default/index.html.twig', [
            'products' => $products,
            'inventory' => null,
            'user' => $this->getUser()
        ]);
    }
}
