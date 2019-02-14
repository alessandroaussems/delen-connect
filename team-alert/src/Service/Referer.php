<?php


namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

class Referer
{
    /** @var RequestStack */
    private $requestStack;

    /** @var RouterInterface */
    private $router;

    public function __construct(RequestStack $requestStack, RouterInterface $router)
    {
        $this->requestStack = $requestStack;
        $this->router = $router;
    }

    public function getReferer(): string
    {
        $request = $this->requestStack->getMasterRequest();
        if (null === $request) {
            return '';
        }
        $uri = (string)$request->headers->get('referer');
        return $uri;
    }
}
