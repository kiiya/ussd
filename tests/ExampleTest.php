<?php

namespace Kiiya\Ussd\Tests;

use Orchestra\Testbench\TestCase;
use Kiiya\Ussd\UssdServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [UssdServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
