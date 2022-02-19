<?php

namespace Modulizm\Core\Modular\Base\Tests;

use App\Console\Kernel;

abstract class SimpleTestCase extends BaseTestCase
{
    protected function getEnvName(): string
    {
        return '.env.testing';
    }

    protected function getConsoleKernelClassName(): string
    {
        return Kernel::class;
    }

}
