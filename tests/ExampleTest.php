<?php

namespace CreatvStudio\SocialiteAuth\Tests;

use Orchestra\Testbench\TestCase;
use CreatvStudio\SocialiteAuth\SocialiteAuthServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SocialiteAuthServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
