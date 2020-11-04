<?php


namespace Bitscout\SimpleConfig\DependencyInjection;

use Symfony\Component\DependencyInjection\EnvVarLoaderInterface;

class SimpleConfigEnvVarLoader implements EnvVarLoaderInterface
{
    /**
     * @inheritDoc
     */
    public function loadEnvVars(): array
    {
        dump('loading');

        return ['FOO' => 'bar'];
    }
}