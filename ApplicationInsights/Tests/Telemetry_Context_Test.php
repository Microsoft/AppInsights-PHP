<?php

namespace ApplicationInsights\Tests;

/**
 * Contains tests for Telemetry_Context class
 */
class Telemetry_Context_Test extends \PHPUnit_Framework_TestCase {

    public function testInstrumentationKey() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $instrumentationKey = Utils::getTestInstrumentationKey();
        $telemetryContext->setInstrumentationKey($instrumentationKey);
        $this->assertEquals($instrumentationKey, $telemetryContext->getInstrumentationKey());
    }

    public function testDeviceContext() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $context = $telemetryContext->getDeviceContext();
        $this->assertEquals($context, new \ApplicationInsights\Channel\Contracts\Device());
        $telemetryContext->setDeviceContext(Utils::getSampleDeviceContext());
        $this->assertEquals($context, Utils::getSampleDeviceContext());
    }

    public function testApplicationContext() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $context = $telemetryContext->getApplicationContext();
        $this->assertEquals($context, new \ApplicationInsights\Channel\Contracts\Application());
        $telemetryContext->setApplicationContext(Utils::getSampleApplicationContext());
        $this->assertEquals($context, Utils::getSampleApplicationContext());
    }

    public function testUserContext() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $context = $telemetryContext->getUserContext();
        $this->assertEquals($context, new \ApplicationInsights\Channel\Contracts\User());
        $telemetryContext->setUserContext(Utils::getSampleUserContext());
        $this->assertEquals($context, Utils::getSampleUserContext());
    }

    public function testLocationContext() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $context = $telemetryContext->getLocationContext();
        $this->assertEquals($context, new \ApplicationInsights\Channel\Contracts\Location());
        $telemetryContext->setLocationContext(Utils::getSampleLocationContext());
        $this->assertEquals($context, Utils::getSampleLocationContext());
    }

    public function testOperationContext() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $context = $telemetryContext->getOperationContext();
        $this->assertEquals($context, new \ApplicationInsights\Channel\Contracts\Operation());
        $telemetryContext->setOperationContext(Utils::getSampleOperationContext());
        $this->assertEquals($context, Utils::getSampleOperationContext());
    }

    public function testSessionContext() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $context = $telemetryContext->getSessionContext();
        $this->assertEquals($context, new \ApplicationInsights\Channel\Contracts\Session());
        $telemetryContext->setSessionContext(Utils::getSampleSessionContext());
        $this->assertEquals($context, Utils::getSampleSessionContext());
    }

    public function testProperties() {
        $telemetryContext = new \ApplicationInsights\Telemetry_Context();
        $properties = $telemetryContext->getProperties();
        $this->assertEquals($properties, []);
        $telemetryContext->setProperties(Utils::getSampleCustomProperties());
        $this->assertEquals($properties, Utils::getSampleCustomProperties());
    }

}
