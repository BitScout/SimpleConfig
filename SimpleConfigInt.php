<?php


namespace Bitscout\SimpleConfig\Entity;


class SimpleConfigInt extends AbstractSimpleConfig
{
    /**
     * @var int
     */
    protected $intValue;

    public function setValue(int $value): self {
        $this->intValue = $value;

        return $this;
    }

    public function getValue(): int {
        return $this->intValue;
    }
}