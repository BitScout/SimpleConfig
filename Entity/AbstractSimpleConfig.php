<?php

namespace Bitscout\SimpleConfig\Entity;

/**
 * Class AbstractSimpleConfig
 *
 * @author Christian Kollross
 */
abstract class AbstractSimpleConfig implements SimpleConfigInterface
{
    public const TYPE_STRING = 'string';
    public const TYPE_INT    = 'int';
}