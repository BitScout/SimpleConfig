<?php


namespace Bitscout\SimpleConfig\Entity;


class SimpleConfigString extends AbstractSimpleConfig
{
    /**
     * @var string
     */
    protected $stringValue;

    public function setValue(string $value): self {
        $this->stringValue = $value;

        return $this;
    }

    public function getValue(): string {
        return $this->stringValue;
    }
}