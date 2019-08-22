<?php

namespace Falabella;

use Falabella\Responsibility\MultipleResponsibility;

/**
 * Class Client
 * @package Falabella
 */
class Client extends Result
{
    private $multipleResponsibility;
    private $response;

    /**
     * Function constructor.
     */
    public function __construct()
    {
        $this->multipleResponsibility = new MultipleResponsibility();
        $this->response = new Response();
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Falabella\Result::getResult()
     */
    public function getResult() : Response
    {
        foreach ($this->getCount()->getNumbers() as $number) {
            $this->response->addResponse(
                $this->multipleResponsibility->client($number)
            );
        }
        return $this->response;
    }
}
?>
