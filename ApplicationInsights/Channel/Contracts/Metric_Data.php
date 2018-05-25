/**
*  
*  
* THIS FILE IS AUTO-GENERATED.  
* Please do not edit manually. 
*  
* Use script at <root>/Schema/generateSchema.ps1 
*  
*/
<?php
namespace ApplicationInsights\Channel\Contracts;

/**
* Data contract class for type Metric_Data. 
*/
class Metric_Data extends Base_Data implements Data_Interface
{

    /**
    * Creates a new MetricData. 
    */
    function __construct()
    {
        $this->_envelopeTypeName = 'Microsoft.ApplicationInsights.Metric';
        $this->_dataTypeName = 'MetricData';
        $this->_data['ver'] = 2;
        $this->_data['metrics'] = [];
    }

    /**
    * Gets the ver field. 
    */
    public function getVer()
    {
        if (array_key_exists('ver', $this->_data)) { return $this->_data['ver']; }
        return NULL;
    }

    /**
    * Sets the ver field. 
    */
    public function setVer($ver)
    {
        $this->_data['ver'] = $ver;
    }

    /**
    * Gets the metrics field. 
    */
    public function getMetrics()
    {
        if (array_key_exists('metrics', $this->_data)) { return $this->_data['metrics']; }
        return NULL;
    }

    /**
    * Sets the metrics field. 
    */
    public function setMetrics($metrics)
    {
        $this->_data['metrics'] = $metrics;
    }

    /**
    * Gets the properties field. 
    */
    public function getProperties()
    {
        if (array_key_exists('properties', $this->_data)) { return $this->_data['properties']; }
        return NULL;
    }

    /**
    * Sets the properties field. 
    */
    public function setProperties($properties)
    {
        $this->_data['properties'] = $properties;
    }
}
