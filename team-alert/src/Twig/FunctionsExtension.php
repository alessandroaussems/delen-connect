<?php

namespace App\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class FunctionsExtension extends AbstractExtension
{

    protected $container = null;
    protected $em = null;

    public function __construct(ContainerInterface $containerInterface)
    {
        $this->container = $containerInterface;
        $this->em = $this->container->get('doctrine')->getManager();
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('casttoarray', [$this, 'castToArray'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [
        ];
    }

    public function castToArray($stdClassObject)
    {
        $response = (array)$stdClassObject;
        return $response;
    }
}
