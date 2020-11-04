<?php


namespace Bitscout\SimpleConfig\Entity;


abstract class AbstractSimpleConfig implements SimpleConfigInterface
{
    public const TYPE_STRING = 'string';
    public const TYPE_INT    = 'int';
}