<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListAnnotatedDatasets.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ListAnnotatedDatasetsRequest</code>
 */
class ListAnnotatedDatasetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the dataset to list annotated datasets, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Filter is not supported at this moment.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. Requested page size. Server may return fewer results than
     * requested. Default value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained by
     * [ListAnnotatedDatasetsResponse.next_page_token][google.cloud.datalabeling.v1beta1.ListAnnotatedDatasetsResponse.next_page_token] of the previous
     * [DataLabelingService.ListAnnotatedDatasets] call.
     * Return first page if empty.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the dataset to list annotated datasets, format:
     *           projects/{project_id}/datasets/{dataset_id}
     *     @type string $filter
     *           Optional. Filter is not supported at this moment.
     *     @type int $page_size
     *           Optional. Requested page size. Server may return fewer results than
     *           requested. Default value is 100.
     *     @type string $page_token
     *           Optional. A token identifying a page of results for the server to return.
     *           Typically obtained by
     *           [ListAnnotatedDatasetsResponse.next_page_token][google.cloud.datalabeling.v1beta1.ListAnnotatedDatasetsResponse.next_page_token] of the previous
     *           [DataLabelingService.ListAnnotatedDatasets] call.
     *           Return first page if empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the dataset to list annotated datasets, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the dataset to list annotated datasets, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Filter is not supported at this moment.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter is not supported at this moment.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server may return fewer results than
     * requested. Default value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server may return fewer results than
     * requested. Default value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained by
     * [ListAnnotatedDatasetsResponse.next_page_token][google.cloud.datalabeling.v1beta1.ListAnnotatedDatasetsResponse.next_page_token] of the previous
     * [DataLabelingService.ListAnnotatedDatasets] call.
     * Return first page if empty.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained by
     * [ListAnnotatedDatasetsResponse.next_page_token][google.cloud.datalabeling.v1beta1.ListAnnotatedDatasetsResponse.next_page_token] of the previous
     * [DataLabelingService.ListAnnotatedDatasets] call.
     * Return first page if empty.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

