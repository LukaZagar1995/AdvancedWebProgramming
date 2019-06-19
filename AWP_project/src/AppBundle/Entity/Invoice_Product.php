<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice_Product
 *
 * @ORM\Table(name="invoice__product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Invoice_ProductRepository")
 */
class Invoice_Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;



    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product", inversedBy="invoices", fetch="EAGER")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     */
    protected $product_id;

    private  $type;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invoice", inversedBy="products", fetch="EAGER")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id", nullable=false)
     */
    protected $invoice_id;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return Invoice_Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set productId.
     *
     * @param \AppBundle\Entity\Product $productId
     *
     * @return Invoice_Product
     */
    public function setProductId(\AppBundle\Entity\Product $productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set invoiceId.
     *
     * @param \AppBundle\Entity\Invoice $invoiceId
     *
     * @return Invoice_Product
     */
    public function setInvoiceId(\AppBundle\Entity\Invoice $invoiceId)
    {
        $this->invoice_id = $invoiceId;

        return $this;
    }

    /**
     * Get invoiceId.
     *
     * @return \AppBundle\Entity\Invoice
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }
}
