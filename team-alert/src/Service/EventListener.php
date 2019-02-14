<?php


namespace App\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Routing\RouterInterface;

class EventListener
{
    /** @var ContainerInterface $container */
    protected $container;

    /** @var  EntityManager $em */
    protected $em;

    /** @var  Request $request */
    protected $request;

    private $router;

    public function __construct(ContainerInterface $container, RouterInterface $router)
    {
        $this->container = $container;
        $this->em = $container->get('doctrine')->getManager();
        $this->request = $container->get('request_stack')->getMasterRequest();
        $this->router = $router;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {

    }

    public function onKernelResponse(FilterResponseEvent $event)
    {

    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $code = $event->getException() instanceof HttpExceptionInterface ? $event->getException()->getStatusCode() : $event->getException()->getCode();
        $message = $event->getException()->getMessage();
        $response = new Response($this->container->get('twig')->render('default/login.html.twig', array(
            "code" => $code,
            "message" => $message,
        )));
    }
}
