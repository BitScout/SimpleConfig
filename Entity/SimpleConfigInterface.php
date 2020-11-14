<?php

namespace Bitscout\SimpleConfig\Entity;

/**
 * Class SimpleConfigInterface
 *
 * @author Christian Kollross
 */
interface SimpleConfigInterface
{
    public function setValue($value);
    public function getValue();
}