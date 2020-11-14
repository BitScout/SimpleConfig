<?php


namespace Bitscout\SimpleConfig\DependencyInjection;

use Symfony\Component\DependencyInjection\EnvVarLoaderInterface;

/**
 * Class SimpleConfigEnvVarLoader
 *
 * @author Christian Kollross
 */
class SimpleConfigEnvVarLoader implements EnvVarLoaderInterface
{
    const PREFIX = 'SIMPLE_CONFIG';

    /**
     * @var array
     */
    private $fields;

    public function __construct(array $fields = []) {
        $this->fields = $fields;
    }

    /**
     * @inheritDoc
     */
    public function loadEnvVars(): array
    {
        dump($this->fields);

        $vars = [];

        foreach ($this->fields as $fieldName => $field) {
            $vars[sprintf('%s_%s', static::PREFIX, strtoupper($fieldName))] = $field[Configuration::FIELD_DEFAULT];
        }

        dump($vars);

        return $vars;
    }
}