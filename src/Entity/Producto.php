<?php

namespace TDW\DemoDoctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity
 */
class Producto implements \JsonSerializable
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected int $id;

    /**
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    protected string $name;

    /**
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    protected ?string $description;

    /**
     * @ORM\Column(
     *     name="price", type="float", precision=10, scale=0, nullable=false,
     *     options={ "default"= 0 }
     *     )
     */
    protected float $price;

    /**
     * Producto constructor.
     * @param string $name
     * @param float $price
     * @param string $description
     */
    public function __construct(string $name = '', float $price = 0, ?string $description = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): Producto
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): Producto
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price
     * @return Producto
     */
    public function setPrice($price): Producto
    {
        $this->price = $price;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf('Product [id=' . $this->getId() . ', name=' . $this->getName() . ']');
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'price' => $this->getPrice()
        ];
    }

}
