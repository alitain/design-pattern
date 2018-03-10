<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/10
 * Time: 下午2:40
 */

namespace Alitain\DesignPattern\Behavioral\ChainOfResponsibility;


class Request
{
    /**
     * @var string $uri
     */
    private $uri;

    /**
     * @var string $method
     */
    private $method;

    /**
     * @var array $params
     */
    private $params;

    public function __construct($uri, $method, $params)
    {
       $this->uri = $uri;
       $this->method = $method;
       $this->params = $params;
    }

    /**
     * method getter
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * params getter
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * uri getter
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
}