<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/client_tls_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the GetClientTlsPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.GetClientTlsPolicyRequest</code>
 */
class GetClientTlsPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A name of the ClientTlsPolicy to get. Must be in the format
     * `projects/&#42;&#47;locations/{location}/clientTlsPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A name of the ClientTlsPolicy to get. Must be in the format
     *           `projects/&#42;&#47;locations/{location}/clientTlsPolicies/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\ClientTlsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A name of the ClientTlsPolicy to get. Must be in the format
     * `projects/&#42;&#47;locations/{location}/clientTlsPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A name of the ClientTlsPolicy to get. Must be in the format
     * `projects/&#42;&#47;locations/{location}/clientTlsPolicies/&#42;`.
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

}

