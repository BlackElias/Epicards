<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/service.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.ExportData][google.cloud.automl.v1.AutoMl.ExportData].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ExportDataRequest</code>
 */
class ExportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the dataset.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.OutputConfig output_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the dataset.
     *     @type \Google\Cloud\AutoMl\V1\OutputConfig $output_config
     *           Required. The desired output location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the dataset.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the dataset.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.OutputConfig output_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.OutputConfig output_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

