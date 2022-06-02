<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for GlobalForwardingRules.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetGlobalForwardingRuleRequest</code>
 */
class GetGlobalForwardingRuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the ForwardingRule resource to return.
     *
     * Generated from protobuf field <code>string forwarding_rule = 269964030 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $forwarding_rule = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $forwarding_rule
     *           Name of the ForwardingRule resource to return.
     *     @type string $project
     *           Project ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the ForwardingRule resource to return.
     *
     * Generated from protobuf field <code>string forwarding_rule = 269964030 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getForwardingRule()
    {
        return $this->forwarding_rule;
    }

    /**
     * Name of the ForwardingRule resource to return.
     *
     * Generated from protobuf field <code>string forwarding_rule = 269964030 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setForwardingRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->forwarding_rule = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

