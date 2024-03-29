<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Voyage extends \App\Entity\Voyage implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'destination' => [parent::class, 'destination', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'prix' => [parent::class, 'prix', null],
        "\0".parent::class."\0".'programme' => [parent::class, 'programme', null],
        "\0".parent::class."\0".'res' => [parent::class, 'res', null],
        "\0".parent::class."\0".'type' => [parent::class, 'type', null],
        'date' => [parent::class, 'date', null],
        'destination' => [parent::class, 'destination', null],
        'id' => [parent::class, 'id', null],
        'prix' => [parent::class, 'prix', null],
        'programme' => [parent::class, 'programme', null],
        'res' => [parent::class, 'res', null],
        'type' => [parent::class, 'type', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
