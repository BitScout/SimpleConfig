<?php

namespace Bitscout\SimpleConfig\Entity;

/**
 * Class SimpleConfigInt
 *
 * @author Christian Kollross
 */
class SimpleConfigInt extends AbstractSimpleConfig
{
    /**
     * @var int
     */
    protected $intValue;

    public function setValue($value) {
        $this->intValue = $value;

        return $this;
    }

    public function getValue(): int {
        return $this->intValue;
    }
}