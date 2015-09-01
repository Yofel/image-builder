<?php

namespace ImageBuilder\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class BuildConfiguration {

    /**
     * @ORM\Column(type="simple_array")
     */
    protected $architectures;

    /**
     * @ORM\Column(type="simple_array")
     */
    protected $flavors;
}