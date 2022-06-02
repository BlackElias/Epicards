<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A topic resource.
 *
 * Generated from protobuf message <code>google.pubsub.v1.Topic</code>
 */
class Topic extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * See [Creating and managing labels]
     * (https://cloud.google.com/pubsub/docs/labels).
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;
    /**
     * Policy constraining the set of Google Cloud Platform regions where messages
     * published to the topic may be stored. If not present, then no constraints
     * are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     */
    private $message_storage_policy = null;
    /**
     * The resource name of the Cloud KMS CryptoKey to be used to protect access
     * to messages published on this topic.
     * The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string kms_key_name = 5;</code>
     */
    private $kms_key_name = '';
    /**
     * Settings for validating messages published against a schema.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.SchemaSettings schema_settings = 6;</code>
     */
    private $schema_settings = null;
    /**
     * Reserved for future use. This field is set only in responses from the
     * server; it is ignored if it is set in any requests.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 7;</code>
     */
    private $satisfies_pzs = false;
    /**
     * Indicates the minimum duration to retain a message after it is published to
     * the topic. If this field is set, messages published to the topic in the
     * last `message_retention_duration` are always available to subscribers. For
     * instance, it allows any attached subscription to [seek to a
     * timestamp](https://cloud.google.com/pubsub/docs/replay-overview#seek_to_a_time)
     * that is up to `message_retention_duration` in the past. If this field is
     * not set, message retention is controlled by settings on individual
     * subscriptions. Cannot be more than 7 days or less than 10 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration message_retention_duration = 8;</code>
     */
    private $message_retention_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the topic. It must have the format
     *           `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     *           and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     *           underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     *           signs (`%`). It must be between 3 and 255 characters in length, and it
     *           must not start with `"goog"`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           See [Creating and managing labels]
     *           (https://cloud.google.com/pubsub/docs/labels).
     *     @type \Google\Cloud\PubSub\V1\MessageStoragePolicy $message_storage_policy
     *           Policy constraining the set of Google Cloud Platform regions where messages
     *           published to the topic may be stored. If not present, then no constraints
     *           are in effect.
     *     @type string $kms_key_name
     *           The resource name of the Cloud KMS CryptoKey to be used to protect access
     *           to messages published on this topic.
     *           The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *     @type \Google\Cloud\PubSub\V1\SchemaSettings $schema_settings
     *           Settings for validating messages published against a schema.
     *     @type bool $satisfies_pzs
     *           Reserved for future use. This field is set only in responses from the
     *           server; it is ignored if it is set in any requests.
     *     @type \Google\Protobuf\Duration $message_retention_duration
     *           Indicates the minimum duration to retain a message after it is published to
     *           the topic. If this field is set, messages published to the topic in the
     *           last `message_retention_duration` are always available to subscribers. For
     *           instance, it allows any attached subscription to [seek to a
     *           timestamp](https://cloud.google.com/pubsub/docs/replay-overview#seek_to_a_time)
     *           that is up to `message_retention_duration` in the past. If this field is
     *           not set, message retention is controlled by settings on individual
     *           subscriptions. Cannot be more than 7 days or less than 10 minutes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * See [Creating and managing labels]
     * (https://cloud.google.com/pubsub/docs/labels).
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * See [Creating and managing labels]
     * (https://cloud.google.com/pubsub/docs/labels).
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
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
     * Policy constraining the set of Google Cloud Platform regions where messages
     * published to the topic may be stored. If not present, then no constraints
     * are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     * @return \Google\Cloud\PubSub\V1\MessageStoragePolicy|null
     */
    public function getMessageStoragePolicy()
    {
        return $this->message_storage_policy;
    }

    public function hasMessageStoragePolicy()
    {
        return isset($this->message_storage_policy);
    }

    public function clearMessageStoragePolicy()
    {
        unset($this->message_storage_policy);
    }

    /**
     * Policy constraining the set of Google Cloud Platform regions where messages
     * published to the topic may be stored. If not present, then no constraints
     * are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     * @param \Google\Cloud\PubSub\V1\MessageStoragePolicy $var
     * @return $this
     */
    public function setMessageStoragePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\MessageStoragePolicy::class);
        $this->message_storage_policy = $var;

        return $this;
    }

    /**
     * The resource name of the Cloud KMS CryptoKey to be used to protect access
     * to messages published on this topic.
     * The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string kms_key_name = 5;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The resource name of the Cloud KMS CryptoKey to be used to protect access
     * to messages published on this topic.
     * The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string kms_key_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Settings for validating messages published against a schema.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.SchemaSettings schema_settings = 6;</code>
     * @return \Google\Cloud\PubSub\V1\SchemaSettings|null
     */
    public function getSchemaSettings()
    {
        return $this->schema_settings;
    }

    public function hasSchemaSettings()
    {
        return isset($this->schema_settings);
    }

    public function clearSchemaSettings()
    {
        unset($this->schema_settings);
    }

    /**
     * Settings for validating messages published against a schema.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.SchemaSettings schema_settings = 6;</code>
     * @param \Google\Cloud\PubSub\V1\SchemaSettings $var
     * @return $this
     */
    public function setSchemaSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\SchemaSettings::class);
        $this->schema_settings = $var;

        return $this;
    }

    /**
     * Reserved for future use. This field is set only in responses from the
     * server; it is ignored if it is set in any requests.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 7;</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Reserved for future use. This field is set only in responses from the
     * server; it is ignored if it is set in any requests.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Indicates the minimum duration to retain a message after it is published to
     * the topic. If this field is set, messages published to the topic in the
     * last `message_retention_duration` are always available to subscribers. For
     * instance, it allows any attached subscription to [seek to a
     * timestamp](https://cloud.google.com/pubsub/docs/replay-overview#seek_to_a_time)
     * that is up to `message_retention_duration` in the past. If this field is
     * not set, message retention is controlled by settings on individual
     * subscriptions. Cannot be more than 7 days or less than 10 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration message_retention_duration = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMessageRetentionDuration()
    {
        return $this->message_retention_duration;
    }

    public function hasMessageRetentionDuration()
    {
        return isset($this->message_retention_duration);
    }

    public function clearMessageRetentionDuration()
    {
        unset($this->message_retention_duration);
    }

    /**
     * Indicates the minimum duration to retain a message after it is published to
     * the topic. If this field is set, messages published to the topic in the
     * last `message_retention_duration` are always available to subscribers. For
     * instance, it allows any attached subscription to [seek to a
     * timestamp](https://cloud.google.com/pubsub/docs/replay-overview#seek_to_a_time)
     * that is up to `message_retention_duration` in the past. If this field is
     * not set, message retention is controlled by settings on individual
     * subscriptions. Cannot be more than 7 days or less than 10 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration message_retention_duration = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMessageRetentionDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->message_retention_duration = $var;

        return $this;
    }

}

