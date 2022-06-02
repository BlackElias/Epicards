<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Google Cloud Storage location for the output content.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.GcsDestination</code>
 */
class GcsDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The bucket used in 'output_uri_prefix' must exist and there must
     * be no files under 'output_uri_prefix'. 'output_uri_prefix' must end with
     * "/" and start with "gs://". One 'output_uri_prefix' can only be used by one
     * batch translation job at a time. Otherwise an INVALID_ARGUMENT (400) error
     * is returned.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $output_uri_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $output_uri_prefix
     *           Required. The bucket used in 'output_uri_prefix' must exist and there must
     *           be no files under 'output_uri_prefix'. 'output_uri_prefix' must end with
     *           "/" and start with "gs://". One 'output_uri_prefix' can only be used by one
     *           batch translation job at a time. Otherwise an INVALID_ARGUMENT (400) error
     *           is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The bucket used in 'output_uri_prefix' must exist and there must
     * be no files under 'output_uri_prefix'. 'output_uri_prefix' must end with
     * "/" and start with "gs://". One 'output_uri_prefix' can only be used by one
     * batch translation job at a time. Otherwise an INVALID_ARGUMENT (400) error
     * is returned.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOutputUriPrefix()
    {
        return $this->output_uri_prefix;
    }

    /**
     * Required. The bucket used in 'output_uri_prefix' must exist and there must
     * be no files under 'output_uri_prefix'. 'output_uri_prefix' must end with
     * "/" and start with "gs://". One 'output_uri_prefix' can only be used by one
     * batch translation job at a time. Otherwise an INVALID_ARGUMENT (400) error
     * is returned.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri_prefix = $var;

        return $this;
    }

}
