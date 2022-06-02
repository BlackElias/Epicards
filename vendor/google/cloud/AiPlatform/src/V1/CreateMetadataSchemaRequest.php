<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.CreateMetadataSchema][google.cloud.aiplatform.v1.MetadataService.CreateMetadataSchema].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateMetadataSchemaRequest</code>
 */
class CreateMetadataSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the MetadataStore where the MetadataSchema should
     * be created.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The MetadataSchema to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MetadataSchema metadata_schema = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $metadata_schema = null;
    /**
     * The {metadata_schema} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/metadataSchemas/{metadataschema}`
     * If not provided, the MetadataStore's ID will be a UUID generated by the
     * service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all MetadataSchemas in the parent Location.
     * (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     * if the caller can't view the preexisting MetadataSchema.)
     *
     * Generated from protobuf field <code>string metadata_schema_id = 3;</code>
     */
    private $metadata_schema_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the MetadataStore where the MetadataSchema should
     *           be created.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *     @type \Google\Cloud\AIPlatform\V1\MetadataSchema $metadata_schema
     *           Required. The MetadataSchema to create.
     *     @type string $metadata_schema_id
     *           The {metadata_schema} portion of the resource name with the format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/metadataSchemas/{metadataschema}`
     *           If not provided, the MetadataStore's ID will be a UUID generated by the
     *           service.
     *           Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     *           Must be unique across all MetadataSchemas in the parent Location.
     *           (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     *           if the caller can't view the preexisting MetadataSchema.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the MetadataStore where the MetadataSchema should
     * be created.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the MetadataStore where the MetadataSchema should
     * be created.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
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
     * Required. The MetadataSchema to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MetadataSchema metadata_schema = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\MetadataSchema|null
     */
    public function getMetadataSchema()
    {
        return $this->metadata_schema;
    }

    public function hasMetadataSchema()
    {
        return isset($this->metadata_schema);
    }

    public function clearMetadataSchema()
    {
        unset($this->metadata_schema);
    }

    /**
     * Required. The MetadataSchema to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MetadataSchema metadata_schema = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\MetadataSchema $var
     * @return $this
     */
    public function setMetadataSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MetadataSchema::class);
        $this->metadata_schema = $var;

        return $this;
    }

    /**
     * The {metadata_schema} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/metadataSchemas/{metadataschema}`
     * If not provided, the MetadataStore's ID will be a UUID generated by the
     * service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all MetadataSchemas in the parent Location.
     * (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     * if the caller can't view the preexisting MetadataSchema.)
     *
     * Generated from protobuf field <code>string metadata_schema_id = 3;</code>
     * @return string
     */
    public function getMetadataSchemaId()
    {
        return $this->metadata_schema_id;
    }

    /**
     * The {metadata_schema} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/metadataSchemas/{metadataschema}`
     * If not provided, the MetadataStore's ID will be a UUID generated by the
     * service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all MetadataSchemas in the parent Location.
     * (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     * if the caller can't view the preexisting MetadataSchema.)
     *
     * Generated from protobuf field <code>string metadata_schema_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataSchemaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata_schema_id = $var;

        return $this;
    }

}

