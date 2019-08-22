<?php
namespace Falabella;

use Falabella\Factory\Multiply;

use Falabella\Exception\MultipleException;

/**
 * Class Lookup
 * @author iyappan
 *
 */
class Lookup extends Result
{
    private $lookupTable = [
        [
            'values' => [5, 3] ,
            'text' => 'Linianos'
        ],
        [
            'values' => [5] ,
            'text' => 'IT'
        ],
        [
            'values' => [3] ,
            'text' => 'Linio'
        ],
    ];
    
    private $multiply;
    private $response;
    
    /**
     * constructor
     */
    public function __construct()
    {
        $this->multiply = new Multiply();
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
                $this->lookup($number, $this->lookupTable)
                );
        }
        return $this->response;
    }
    
    /**
     * @param $number
     * @param $lookupTable
     * @return mixed
     */
    private function lookup($number, $lookupTable)
    {
        $iterator = new \ArrayIterator($lookupTable);
        while ($iterator->valid()) {
            $table = $iterator->current();
            try {
                $this->findMultipleOrFail($number, $table['values']);
                return $table['text'];
            } catch (MultipleException $exception) {
                $iterator->offsetUnset($iterator->key());
                $this->lookup($number, $iterator->getArrayCopy());
            }
        }
        return $number;
    }
    
    /**
     * @param $number
     * @param $values
     */
    private function findMultipleOrFail($number, $values) : void
    {
        foreach ($values as $value) {
            $this->multiply->isMultiple($number, $value);
        }
    }
}
