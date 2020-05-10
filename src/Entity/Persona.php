<?php

namespace TDW\DemoDoctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="personas")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected int $id;

    /**
     * @ORM\Column(name="firstName", type="string", length=40, nullable=false)
     */
    protected string $firstName;

    /**
     * @ORM\Column(name="lastName", type="string", length=40, nullable=false)
     */
    protected string $lastName;



}