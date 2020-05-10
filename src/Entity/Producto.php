<?php

namespace TDW\DemoDoctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity
 */
class Producto
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


}
