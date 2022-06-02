<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a address.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * The usage of the address. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     */
    private $usage = 0;
    /**
     * Indicates if it's the person's current address.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue current = 4;</code>
     */
    private $current = null;
    protected $address;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $usage
     *           The usage of the address. For example, SCHOOL, WORK, PERSONAL.
     *     @type string $unstructured_address
     *           Unstructured address.
     *           For example, "1600 Amphitheatre Pkwy, Mountain View, CA 94043",
     *           "Sunnyvale, California".
     *           Number of characters allowed is 100.
     *     @type \Google\Type\PostalAddress $structured_address
     *           Structured address that contains street address, city, state, country,
     *           and so on.
     *     @type \Google\Protobuf\BoolValue $current
     *           Indicates if it's the person's current address.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * The usage of the address. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * The usage of the address. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\ContactInfoUsage::class);
        $this->usage = $var;

        return $this;
    }

    /**
     * Unstructured address.
     * For example, "1600 Amphitheatre Pkwy, Mountain View, CA 94043",
     * "Sunnyvale, California".
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string unstructured_address = 2;</code>
     * @return string
     */
    public function getUnstructuredAddress()
    {
        return $this->readOneof(2);
    }

    public function hasUnstructuredAddress()
    {
        return $this->hasOneof(2);
    }

    /**
     * Unstructured address.
     * For example, "1600 Amphitheatre Pkwy, Mountain View, CA 94043",
     * "Sunnyvale, California".
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string unstructured_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnstructuredAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Structured address that contains street address, city, state, country,
     * and so on.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress structured_address = 3;</code>
     * @return \Google\Type\PostalAddress|null
     */
    public function getStructuredAddress()
    {
        return $this->readOneof(3);
    }

    public function hasStructuredAddress()
    {
        return $this->hasOneof(3);
    }

    /**
     * Structured address that contains street address, city, state, country,
     * and so on.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress structured_address = 3;</code>
     * @param \Google\Type\PostalAddress $var
     * @return $this
     */
    public function setStructuredAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PostalAddress::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Indicates if it's the person's current address.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue current = 4;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getCurrent()
    {
        return $this->current;
    }

    public function hasCurrent()
    {
        return isset($this->current);
    }

    public function clearCurrent()
    {
        unset($this->current);
    }

    /**
     * Returns the unboxed value from <code>getCurrent()</code>

     * Indicates if it's the person's current address.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue current = 4;</code>
     * @return bool|null
     */
    public function getCurrentValue()
    {
        return $this->readWrapperValue("current");
    }

    /**
     * Indicates if it's the person's current address.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue current = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->current = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates if it's the person's current address.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue current = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setCurrentValue($var)
    {
        $this->writeWrapperValue("current", $var);
        return $this;}

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->whichOneof("address");
    }

}

