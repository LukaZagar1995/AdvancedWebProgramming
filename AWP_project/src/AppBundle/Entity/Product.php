<?php

namespace AppBundle\Entity;


use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;



/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{


    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"basic", "productInfo"})
     */
    private $id;

    /**
     * @var string
     * @Groups("basic")
     * @ORM\Column(name="name", type="string", length=255)
     * @Groups("productInfo")
     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string
     * @Groups("productInfo")
     * @ORM\Column(name="serialNumber", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Regex(
     *     pattern="/^[0-9a-zA-Z]*$/",
     *     message="Serial number can only contain numbers and letters"
     * )
     */
    private $serialNumber;

    /**
     * @var string
     * @ORM\Column(name="Description", type="string", length=255)
     * @Assert\NotBlank
     */
    private $description;




    /**
     * @var string
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     * @Assert\NotNull
     * @Assert\Range(
     *      min = 0,
     *      max = 1000000,
     *      minMessage = "Price cannot be less than 0",
     *      maxMessage = "Price cannot be more than 1000000"
     * )
     */
    private $price;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Invoice_Product", mappedBy="product_id")
     */
    protected $invoices;



    /**
     * @var int
     * @ORM\Column(name="stock", type="integer")
     * @Assert\NotNull
     * @Assert\Range(
     *      min = 0,
     *      max = 1000000,
     *      minMessage = "Stock cannot be less than 0",
     *      maxMessage = "Stock cannot be more than 1000000"
     * )
     *
     */
    protected $stock;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set serialNumber.
     *
     * @param string $serialNumber
     *
     * @return Product
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set price.
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invoices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add invoice.
     *
     * @param \AppBundle\Entity\Invoice_Product $invoice
     *
     * @return Product
     */
    public function addInvoice(\AppBundle\Entity\Invoice_Product $invoice)
    {
        $this->invoices[] = $invoice;

        return $this;
    }

    /**
     * Remove invoice.
     *
     * @param \AppBundle\Entity\Invoice_Product $invoice
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeInvoice(\AppBundle\Entity\Invoice_Product $invoice)
    {
        return $this->invoices->removeElement($invoice);
    }

    /**
     * Get invoices.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * Set stock.
     *
     * @param int $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock.
     *
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    public function __toString(){
        return $this->getName() . " - " . $this->getStock() . " available";
    }
}
