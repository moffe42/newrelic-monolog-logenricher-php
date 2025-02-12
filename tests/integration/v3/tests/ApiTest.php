<?php

/**
 * Copyright [2019] New Relic Corporation. All rights reserved.
 * SPDX-License-Identifier: Apache-2.0
 *
 * This file contains a test verifying that the test suite is being run against
 * the correct version of Monolog.
 *
 * @author New Relic PHP <php-agent@newrelic.com>
 */

namespace NewRelic\Monolog\Enricher\IntegrationTest\V1;

use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testApiVersion()
    {
        $this->assertSame(3, Logger::API);
    }
}
