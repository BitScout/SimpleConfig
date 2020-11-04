<?php

namespace Bitscout\SimpleConfig\Entity;

interface SimpleConfigInterface
{
    public function setValue($value);
    public function getValue();
}