<?php
namespace Falabella;

/**
 * Class Response
 * @package Falabella
 */
class Response
{
    
    private $response = array();

    public function addResponse($response) : void
    {
        array_push($this->response, $response);
    }
    
    /**
     * @return string
     */
    public function toJson() : string
    {
        return json_encode($this->response, JSON_UNESCAPED_UNICODE);
    }
    
    /**
     * @return array
     */
    public function toArray() : array
    {
        return $this->response;
    }
    
    /**
     * @return string
     */
    public function toPrintConsole() : void
    {
        foreach ($this->response as $item) {
            print $item . PHP_EOL;
        }
    }
    
    /**
     * @return string
     */
    public function toPrintHtml() : void
    {
        foreach ($this->response as $item) {
            print $item . '<br>';
        }
    }
}