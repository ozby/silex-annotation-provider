<?php

namespace DDesrosiers\Test\SilexAnnotations\Controller2;

use DDesrosiers\SilexAnnotations\Annotations as SLX;
use Exception;
use Symfony\Component\HttpFoundation\Response;

/**
 * @SLX\Controller(prefix="before2")
 * @SLX\Before("DDesrosiers\Test\SilexAnnotations\Controller\BeforeTestController::beforeCallback")
 */
class BeforeCollectionTestController
{
    /**
     * @SLX\Request(method="GET", uri="/test")
     */
    public function testMethod($var)
    {
        return new Response($var);
    }

    public static function beforeCallback()
    {
        throw new Exception("before callback");
    }
}
