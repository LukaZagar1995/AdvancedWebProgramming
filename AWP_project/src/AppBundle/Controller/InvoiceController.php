<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Invoice;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/invoice", name="invoice_")
 */
class InvoiceController extends Controller
{
    /**
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/list", name="list")
     */
    public function listAction(EntityManagerInterface $entityManager)
    {
        $invoices = $entityManager->getRepository('AppBundle:Invoice')->findAll();

        return $this->render(
            'invoice/list.html.twig', [
                'invoices' => $invoices

        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/create", name="create")
     */
    public function createAction(Request $request, EntityManagerInterface $entityManager)
    {
        $invoice = new Invoice();

        $form = $this->createForm('AppBundle\Form\InvoiceType', $invoice, [

            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $invoice->setLocked(false);

            $entityManager->persist($invoice);
            $entityManager->flush();

            return $this->redirectToRoute('invoice_list');
        }

        return $this->render(
            'invoice/create.html.twig', [

            'form' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param Invoice $invoice
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/edit/{id}", name="edit")
     */
    public function editAction(Request $request, EntityManagerInterface $entityManager, Invoice $invoice)
    {

        $form = $this->createForm('AppBundle\Form\InvoiceType', $invoice, [

            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($invoice);
            $entityManager->flush();

            return $this->redirectToRoute('invoice_list');
        }

        return $this->render(
            'invoice/create.html.twig', [

            'form' => $form->createView()
        ]);
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @param Invoice $invoice
     * @Route("/lock/{id}", name="lock")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function lockAction(EntityManagerInterface $entityManager, Invoice $invoice){

        $invoice->setLocked(true);
        $entityManager->persist($invoice);
        $entityManager->flush();


        return $this->redirectToRoute('invoice_list');
    }

    /**
     * @param Invoice $invoice
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/details/{id}", name="details")
     *
     */

    public function detailsAction(EntityManagerInterface $entityManager, Invoice $invoice){

        $invoice_products = $entityManager->getRepository('AppBundle:Invoice_Product')->findBy(array(
            'invoice_id' => $invoice->getId()
        ));

        return $this->render(
            'invoice/details.html.twig', [
            'invoice' => $invoice,
                'invoice_products' => $invoice_products
        ]);
    }






}