<?php

namespace AppBundle\Controller;



use AppBundle\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class EmployeeController
 * @Route("/product", name="product_")
 */
class ProductController extends Controller
{
    /**
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/list", name="list")
     */
    public function listAction(EntityManagerInterface $entityManager)
    {

        $products = $entityManager->getRepository('AppBundle:Product')->findAll();

        return $this->render(
            'product/list.html.twig', [
            'products' => $products,
            'inventory' => null,
            'user' => $this->getUser()
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/create", name="create")
     * @throws \Exception
     */
    public function createAction(Request $request, EntityManagerInterface $entityManager)
    {
        $product = new Product();

        $form = $this->createForm('AppBundle\Form\ProductType', $product, [
            'entityManager' => $entityManager,
            'product' => $product,
            'user' => $this->getUser()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->persist($product);
            $entityManager->flush();


            return $this->redirectToRoute('product_list');
        }



        return $this->render(
            'product/create.html.twig', [
            'form' => $form->createView(),
            'product' => $product,

        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/edit/{id}", name="edit")
     * @throws \Exception
     */
    public function editAction(Request $request, EntityManagerInterface $entityManager, Product $product)
    {

        $form = $this->createForm('AppBundle\Form\ProductType', $product, [
            'entityManager' => $entityManager,
            'product' => $product,
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($product);
            $entityManager->flush();
            return $this->redirectToRoute('product_details', ['id' => $product->getId()]);
        }


        return $this->render(
            'product/create.html.twig', [
            'form' => $form->createView(),
            'product' => $product,

        ]);
    }

    /**
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/details/{id}", name="details")
     */
    public function detailsAction(Product $product)
    {
        return $this->render(
            'product/details.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/delete/{id}", name="delete")
     * @throws \Exception
     */
    public function deleteAction(EntityManagerInterface $entityManager, Product $product)
    {



        $entityManager->remove($product);

        $entityManager->flush();
        return $this->redirectToRoute('product_list');
    }


}