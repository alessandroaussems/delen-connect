<?php

namespace App\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouterInterface;

class Sitemap
{
    /** @var ContainerInterface $container */
    protected $container;

    /** @var RouterInterface $router */
    protected $router;

    /** @var  EntityManager $entityManager */
    protected $entityManager;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->router = $container->get('router');
        $this->request = $container->get('request_stack')->getMasterRequest();
        $this->entityManager = $container->get('doctrine')->getManager();
    }

    public function slugify($text)
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        if (function_exists('iconv')) {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);

        return $text;
    }
}