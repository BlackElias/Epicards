<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore.proto

namespace Google\Cloud\AIPlatform\V1\Featurestore;

use UnexpectedValueException;

/**
 * Possible states a featurestore can have.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Featurestore.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * State when the featurestore configuration is not being updated and the
     * fields reflect the current configuration of the featurestore. The
     * featurestore is usable in this state.
     *
     * Generated from protobuf enum <code>STABLE = 1;</code>
     */
    const STABLE = 1;
    /**
     * The state of the featurestore configuration when it is being updated.
     * During an update, the fields reflect either the original configuration
     * or the updated configuration of the featurestore. For example,
     * `online_serving_config.fixed_node_count` can take minutes to update.
     * While the update is in progress, the featurestore is in the UPDATING
     * state, and the value of `fixed_node_count` can be the original value or
     * the updated value, depending on the progress of the operation. Until the
     * update completes, the actual number of nodes can still be the original
     * value of `fixed_node_count`. The featurestore is still usable in this
     * state.
     *
     * Generated from protobuf enum <code>UPDATING = 2;</code>
     */
    const UPDATING = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STABLE => 'STABLE',
        self::UPDATING => 'UPDATING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


