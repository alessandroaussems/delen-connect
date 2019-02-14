<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class Config
{
    /** @var ContainerInterface container */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->em = $container->get('doctrine')->getManager();
        $this->request = $container->get('request_stack')->getMasterRequest();
    }
}
