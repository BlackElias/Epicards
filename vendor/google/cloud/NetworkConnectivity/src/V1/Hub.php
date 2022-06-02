<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A hub is a collection of spokes. A single hub can contain spokes from
 * multiple regions. However, if any of a hub's spokes use the data transfer
 * feature, the resources associated with those spokes must all reside in the
 * same VPC network. Spokes that do not use data transfer can be associated
 * with any VPC network in your project.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.Hub</code>
 */
class Hub extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The name of the hub. Hub names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/global/hubs/{hub_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Output only. The time the hub was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time the hub was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional labels in key:value format. For more information about labels, see
     * [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * An optional description of the hub.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Output only. The Google-generated UUID for the hub. This value is unique across all hub
     * resources. If a hub is deleted and another with the same name is created,
     * the new hub is assigned a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $unique_id = '';
    /**
     * Output only. The current lifecycle state of this hub.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * The VPC networks associated with this hub's spokes.
     * This field is read-only. Network Connectivity Center automatically
     * populates it based on the set of spokes attached to the hub.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.RoutingVPC routing_vpcs = 10;</code>
     */
    private $routing_vpcs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The name of the hub. Hub names must be unique. They use the
     *           following form:
     *               `projects/{project_number}/locations/global/hubs/{hub_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the hub was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the hub was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional labels in key:value format. For more information about labels, see
     *           [Requirements for
     *           labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *     @type string $description
     *           An optional description of the hub.
     *     @type string $unique_id
     *           Output only. The Google-generated UUID for the hub. This value is unique across all hub
     *           resources. If a hub is deleted and another with the same name is created,
     *           the new hub is assigned a different unique_id.
     *     @type int $state
     *           Output only. The current lifecycle state of this hub.
     *     @type \Google\Cloud\NetworkConnectivity\V1\RoutingVPC[]|\Google\Protobuf\Internal\RepeatedField $routing_vpcs
     *           The VPC networks associated with this hub's spokes.
     *           This field is read-only. Network Connectivity Center automatically
     *           populates it based on the set of spokes attached to the hub.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The name of the hub. Hub names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/global/hubs/{hub_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The name of the hub. Hub names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/global/hubs/{hub_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Output only. The time the hub was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the hub was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the hub was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the hub was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional labels in key:value format. For more information about labels, see
     * [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional labels in key:value format. For more information about labels, see
     * [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * An optional description of the hub.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of the hub.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The Google-generated UUID for the hub. This value is unique across all hub
     * resources. If a hub is deleted and another with the same name is created,
     * the new hub is assigned a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Output only. The Google-generated UUID for the hub. This value is unique across all hub
     * resources. If a hub is deleted and another with the same name is created,
     * the new hub is assigned a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * Output only. The current lifecycle state of this hub.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current lifecycle state of this hub.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The VPC networks associated with this hub's spokes.
     * This field is read-only. Network Connectivity Center automatically
     * populates it based on the set of spokes attached to the hub.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.RoutingVPC routing_vpcs = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoutingVpcs()
    {
        return $this->routing_vpcs;
    }

    /**
     * The VPC networks associated with this hub's spokes.
     * This field is read-only. Network Connectivity Center automatically
     * populates it based on the set of spokes attached to the hub.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.RoutingVPC routing_vpcs = 10;</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\RoutingVPC[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoutingVpcs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkConnectivity\V1\RoutingVPC::class);
        $this->routing_vpcs = $arr;

        return $this;
    }

}

