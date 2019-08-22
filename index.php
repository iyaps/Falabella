<?php

require_once 'vendor/autoload.php';

/*
 * Falabella : chain of responsibility pattern
 */
$falabellaClient = new \Falabella\Client();
$falabellaClient->getResult()->toPrintConsole();

/*
 * Falabella : uses recursion and lookup table
 */
$falabellaLookup = new \Falabella\Lookup();
$falabellaLookup->getResult()->toPrintConsole();

/*
 * getResult() metnod:
 *
 * getResult()->toJson() : strings
 * getResult()->toArray() : array
 * getResult()->toPrintConsole() : void
 * getResult()->toPrintHtml() : void
 */