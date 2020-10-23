<?php

namespace Codanux\Components\Tests;

use Orchestra\Testbench\TestCase;
use Codanux\Components\ComponentsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ComponentsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
