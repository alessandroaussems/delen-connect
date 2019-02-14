<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;

class BaseController extends Controller
{
    /** @var ContainerInterface $container */
    protected $container;

    /** @var \Doctrine\Common\Persistence\ObjectManager|object $em */
    protected $em;

    /** @var string $page */
    protected $page;

    public function __construct(ContainerInterface $container, TranslatorInterface $translator)
    {
        $this->container = $container;
        $this->em = $this->container->get('doctrine')->getManager();
        $requestStack = $container->get('request_stack');
        $masterRequest = $requestStack->getMasterRequest() ?: new Request();

        $this->page = $masterRequest->getRequestUri();
        $this->translator = $translator;
    }

    public function dd($var)
    {
        dump($var);
        die;
    }
}
