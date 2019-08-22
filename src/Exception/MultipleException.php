<?php
namespace Falabella\Exception;

use Throwable;

/**
 * Class MultipleException
 * @package Falabella\Exception
 */
class MultipleException extends \Exception
{

    const MESSAGE = 'Not Found. There are no multiple for this number.';
    const CODE = 404;
    
    /**
     * MultipleException constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct(
        $message = self::MESSAGE,
        $code = self::CODE,
        Throwable $previous = null
        ) {
            parent::__construct($message, $code, $previous);
    }
}
