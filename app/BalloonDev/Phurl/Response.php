<?php

namespace BalloonDev\Phurl;

/**
 * Class Response
 * @package app
 */
abstract class Response {

    /**
     * Método abtracto para hacer el render.
     * @return mixed
     */
    abstract public function execute();

}