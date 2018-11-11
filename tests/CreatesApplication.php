<?php
namespace Tests;
use Hash;
use Illuminate\Contracts\Console\Kernel;
trait CreatesApplication
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://nexgenpet.activatelearning.test';
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        ini_set('memory_limit','1024M');

        // add this line
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();

        Hash::setRounds(5);

        return $app;
    }
}