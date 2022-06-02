<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [FeaturestoreService.ListEntityTypes][google.cloud.aiplatform.v1.FeaturestoreService.ListEntityTypes].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListEntityTypesResponse</code>
 */
class ListEntityTypesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The EntityTypes matching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.EntityType entity_types = 1;</code>
     */
    private $entity_types;
    /**
     * A token, which can be sent as [ListEntityTypesRequest.page_token][google.cloud.aiplatform.v1.ListEntityTypesRequest.page_token] to
     * retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\EntityType[]|\Google\Protobuf\Internal\RepeatedField $entity_types
     *           The EntityTypes matching the request.
     *     @type string $next_page_token
     *           A token, which can be sent as [ListEntityTypesRequest.page_token][google.cloud.aiplatform.v1.ListEntityTypesRequest.page_token] to
     *           retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * The EntityTypes matching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.EntityType entity_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityTypes()
    {
        return $this->entity_types;
    }

    /**
     * The EntityTypes matching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.EntityType entity_types = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\EntityType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\EntityType::class);
        $this->entity_types = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as [ListEntityTypesRequest.page_token][google.cloud.aiplatform.v1.ListEntityTypesRequest.page_token] to
     * retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as [ListEntityTypesRequest.page_token][google.cloud.aiplatform.v1.ListEntityTypesRequest.page_token] to
     * retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

