<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [MetadataService.ListMetadataStores][google.cloud.aiplatform.v1.MetadataService.ListMetadataStores].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListMetadataStoresResponse</code>
 */
class ListMetadataStoresResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The MetadataStores found for the Location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.MetadataStore metadata_stores = 1;</code>
     */
    private $metadata_stores;
    /**
     * A token, which can be sent as
     * [ListMetadataStoresRequest.page_token][google.cloud.aiplatform.v1.ListMetadataStoresRequest.page_token] to retrieve the next
     * page. If this field is not populated, there are no subsequent pages.
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
     *     @type \Google\Cloud\AIPlatform\V1\MetadataStore[]|\Google\Protobuf\Internal\RepeatedField $metadata_stores
     *           The MetadataStores found for the Location.
     *     @type string $next_page_token
     *           A token, which can be sent as
     *           [ListMetadataStoresRequest.page_token][google.cloud.aiplatform.v1.ListMetadataStoresRequest.page_token] to retrieve the next
     *           page. If this field is not populated, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * The MetadataStores found for the Location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.MetadataStore metadata_stores = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadataStores()
    {
        return $this->metadata_stores;
    }

    /**
     * The MetadataStores found for the Location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.MetadataStore metadata_stores = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\MetadataStore[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadataStores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\MetadataStore::class);
        $this->metadata_stores = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as
     * [ListMetadataStoresRequest.page_token][google.cloud.aiplatform.v1.ListMetadataStoresRequest.page_token] to retrieve the next
     * page. If this field is not populated, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as
     * [ListMetadataStoresRequest.page_token][google.cloud.aiplatform.v1.ListMetadataStoresRequest.page_token] to retrieve the next
     * page. If this field is not populated, there are no subsequent pages.
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

