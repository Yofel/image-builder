<?php

namespace ImageBuilder\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Build
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Embedded(class="BuildConfiguration");
     */
    protected $configuration;

    /**
     * @ORM\Column(type="date")
     */
    protected $createdAt;

    /**
     * @ORM\Column
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $createdBy;

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->configuration = new BuildConfiguration();
    }
}
