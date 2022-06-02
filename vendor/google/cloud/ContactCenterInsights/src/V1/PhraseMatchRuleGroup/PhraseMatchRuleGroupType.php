<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\PhraseMatchRuleGroup;

use UnexpectedValueException;

/**
 * Specifies how to combine each phrase match rule for whether there is a
 * match.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup.PhraseMatchRuleGroupType</code>
 */
class PhraseMatchRuleGroupType
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>PHRASE_MATCH_RULE_GROUP_TYPE_UNSPECIFIED = 0;</code>
     */
    const PHRASE_MATCH_RULE_GROUP_TYPE_UNSPECIFIED = 0;
    /**
     * Must meet all phrase match rules or there is no match.
     *
     * Generated from protobuf enum <code>ALL_OF = 1;</code>
     */
    const ALL_OF = 1;
    /**
     * If any of the phrase match rules are met, there is a match.
     *
     * Generated from protobuf enum <code>ANY_OF = 2;</code>
     */
    const ANY_OF = 2;

    private static $valueToName = [
        self::PHRASE_MATCH_RULE_GROUP_TYPE_UNSPECIFIED => 'PHRASE_MATCH_RULE_GROUP_TYPE_UNSPECIFIED',
        self::ALL_OF => 'ALL_OF',
        self::ANY_OF => 'ANY_OF',
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


