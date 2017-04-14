<?php

namespace Dingo\Api\Tests\Stubs;

use Illuminate\Container\Container;
use ArrayAccess;

class ApplicationStub extends Container implements ArrayAccess
{
    public function version()
    {
        return 'v1';
    }

    public function basePath()
    {
        //
    }

    public function environment()
    {
        return 'testing';
    }

    public function isDownForMaintenance()
    {
        return false;
    }

    public function registerConfiguredProviders()
    {
        //
    }

    public function register($provider, $options = [], $force = false)
    {
        //
    }

    public function registerDeferredProvider($provider, $service = null)
    {
        //
    }

    public function getCachedCompilePath()
    {
        //
    }

    public function getCachedServicesPath()
    {
        //
    }

    public function boot()
    {
        //
    }

    public function booting($callback)
    {
        //
    }

    public function booted($callback)
    {
        //
    }
}
