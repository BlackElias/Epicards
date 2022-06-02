<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_configs.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A game server config resource.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.GameServerConfig</code>
 */
class GameServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the game server config, in the following form:
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}`.
     * For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * The labels associated with this game server config. Each label is a
     * key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * FleetConfig contains a list of Agones fleet specs. Only one FleetConfig
     * is allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.FleetConfig fleet_configs = 5;</code>
     */
    private $fleet_configs;
    /**
     * The autoscaling settings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.ScalingConfig scaling_configs = 6;</code>
     */
    private $scaling_configs;
    /**
     * The description of the game server config.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the game server config, in the following form:
     *           `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}`.
     *           For example,
     *           `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels associated with this game server config. Each label is a
     *           key-value pair.
     *     @type \Google\Cloud\Gaming\V1\FleetConfig[]|\Google\Protobuf\Internal\RepeatedField $fleet_configs
     *           FleetConfig contains a list of Agones fleet specs. Only one FleetConfig
     *           is allowed.
     *     @type \Google\Cloud\Gaming\V1\ScalingConfig[]|\Google\Protobuf\Internal\RepeatedField $scaling_configs
     *           The autoscaling settings.
     *     @type string $description
     *           The description of the game server config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerConfigs::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the game server config, in the following form:
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}`.
     * For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the game server config, in the following form:
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}`.
     * For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. The creation time.
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
     * Output only. The creation time.
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
     * Output only. The last-modified time.
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
     * Output only. The last-modified time.
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
     * The labels associated with this game server config. Each label is a
     * key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels associated with this game server config. Each label is a
     * key-value pair.
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
     * FleetConfig contains a list of Agones fleet specs. Only one FleetConfig
     * is allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.FleetConfig fleet_configs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFleetConfigs()
    {
        return $this->fleet_configs;
    }

    /**
     * FleetConfig contains a list of Agones fleet specs. Only one FleetConfig
     * is allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.FleetConfig fleet_configs = 5;</code>
     * @param \Google\Cloud\Gaming\V1\FleetConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFleetConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\FleetConfig::class);
        $this->fleet_configs = $arr;

        return $this;
    }

    /**
     * The autoscaling settings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.ScalingConfig scaling_configs = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScalingConfigs()
    {
        return $this->scaling_configs;
    }

    /**
     * The autoscaling settings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.ScalingConfig scaling_configs = 6;</code>
     * @param \Google\Cloud\Gaming\V1\ScalingConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScalingConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\ScalingConfig::class);
        $this->scaling_configs = $arr;

        return $this;
    }

    /**
     * The description of the game server config.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the game server config.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}
