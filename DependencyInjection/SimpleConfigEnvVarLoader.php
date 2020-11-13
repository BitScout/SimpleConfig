<?php


namespace Bitscout\SimpleConfig\DependencyInjection;

use Symfony\Component\DependencyInjection\EnvVarLoaderInterface;

class SimpleConfigEnvVarLoader implements EnvVarLoaderInterface
{
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
        dump('loading');
        dump($this->fields);

        return ['FOO' => 'bar'];
    }
}