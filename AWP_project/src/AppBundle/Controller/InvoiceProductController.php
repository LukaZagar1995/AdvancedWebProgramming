<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Invoice;
use AppBundle\Entity\Product;
use AppBundle\Entity\Invoice_Product;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/invoice_product", name="invoice_product")
 */
class InvoiceProductController extends Controller

{
    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param Invoice $invoice
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/add/{id}", name="_add")
     */
    public function addAction(Request $request, EntityManagerInterface $entityManager, Invoice $invoice){

        $invoiceProduct = new Invoice_Product();


        $form = $this->createForm('AppBundle\Form\Invoice_ProductType', $invoiceProduct, [
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $invoiceProduct->setInvoiceId($invoice);


            $product = $form["product_id"]->getData();
            $quantity = $form["quantity"]->getData();

            $oldEntry = $entityManager->getRepository('AppBundle:Invoice_Product')->findOneBy(array(
                'product_id' =>$product->getId(),
                'invoice_id' => $invoice->getId()
            ));
            if($form["type"]->getData()== array( 0 => false)) {
            if($quantity > $product->getStock()){
                $this->addFlash("error", "Not enough products in stock");
                return $this->redirectToRoute('invoice_product_add', [
                    'id' => $invoice->getId(),
                    ]);
            }
            }
            if($oldEntry){
                if($form["type"]->getData()== array( 0 => false)) {
                $oldEntry->setQuantity($oldEntry->getQuantity()+$quantity);
                $entityManager->persist($oldEntry);
                } else {
                    $oldEntry->setQuantity($oldEntry->getQuantity()-$quantity);
                    $entityManager->persist($oldEntry);
                }

            }
            else{
                $entityManager->persist($invoiceProduct);

            }

            if($form["type"]->getData()== array( 0 => true)) {
                $product->setStock($product->getStock() - $quantity);
            } else {
                $product->setStock($product->getStock() + $quantity);
            }

            $entityManager->persist($product);

            $entityManager->flush();

            return $this->redirectToRoute('invoice_details', ['id' => $invoice->getId()]);
        }

        return $this->render(
            'invoice_product/create.html.twig', [

            'form' => $form->createView()
        ]);


    }





}