<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to annotate one single file, e.g. a PDF, TIFF or GIF file.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.AnnotateFileRequest</code>
 */
class AnnotateFileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Information about the input file.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.InputConfig input_config = 1;</code>
     */
    private $input_config = null;
    /**
     * Required. Requested features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Feature features = 2;</code>
     */
    private $features;
    /**
     * Additional context that may accompany the image(s) in the file.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageContext image_context = 3;</code>
     */
    private $image_context = null;
    /**
     * Pages of the file to perform image annotation.
     * Pages starts from 1, we assume the first page of the file is page 1.
     * At most 5 pages are supported per request. Pages can be negative.
     * Page 1 means the first page.
     * Page 2 means the second page.
     * Page -1 means the last page.
     * Page -2 means the second to the last page.
     * If the file is GIF instead of PDF or TIFF, page refers to GIF frames.
     * If this field is empty, by default the service performs image annotation
     * for the first 5 pages of the file.
     *
     * Generated from protobuf field <code>repeated int32 pages = 4;</code>
     */
    private $pages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\InputConfig $input_config
     *           Required. Information about the input file.
     *     @type \Google\Cloud\Vision\V1\Feature[]|\Google\Protobuf\Internal\RepeatedField $features
     *           Required. Requested features.
     *     @type \Google\Cloud\Vision\V1\ImageContext $image_context
     *           Additional context that may accompany the image(s) in the file.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pages
     *           Pages of the file to perform image annotation.
     *           Pages starts from 1, we assume the first page of the file is page 1.
     *           At most 5 pages are supported per request. Pages can be negative.
     *           Page 1 means the first page.
     *           Page 2 means the second page.
     *           Page -1 means the last page.
     *           Page -2 means the second to the last page.
     *           If the file is GIF instead of PDF or TIFF, page refers to GIF frames.
     *           If this field is empty, by default the service performs image annotation
     *           for the first 5 pages of the file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Information about the input file.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.InputConfig input_config = 1;</code>
     * @return \Google\Cloud\Vision\V1\InputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Required. Information about the input file.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.InputConfig input_config = 1;</code>
     * @param \Google\Cloud\Vision\V1\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * Required. Requested features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Feature features = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Required. Requested features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Feature features = 2;</code>
     * @param \Google\Cloud\Vision\V1\Feature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Feature::class);
        $this->features = $arr;

        return $this;
    }

    /**
     * Additional context that may accompany the image(s) in the file.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageContext image_context = 3;</code>
     * @return \Google\Cloud\Vision\V1\ImageContext|null
     */
    public function getImageContext()
    {
        return $this->image_context;
    }

    public function hasImageContext()
    {
        return isset($this->image_context);
    }

    public function clearImageContext()
    {
        unset($this->image_context);
    }

    /**
     * Additional context that may accompany the image(s) in the file.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageContext image_context = 3;</code>
     * @param \Google\Cloud\Vision\V1\ImageContext $var
     * @return $this
     */
    public function setImageContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ImageContext::class);
        $this->image_context = $var;

        return $this;
    }

    /**
     * Pages of the file to perform image annotation.
     * Pages starts from 1, we assume the first page of the file is page 1.
     * At most 5 pages are supported per request. Pages can be negative.
     * Page 1 means the first page.
     * Page 2 means the second page.
     * Page -1 means the last page.
     * Page -2 means the second to the last page.
     * If the file is GIF instead of PDF or TIFF, page refers to GIF frames.
     * If this field is empty, by default the service performs image annotation
     * for the first 5 pages of the file.
     *
     * Generated from protobuf field <code>repeated int32 pages = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Pages of the file to perform image annotation.
     * Pages starts from 1, we assume the first page of the file is page 1.
     * At most 5 pages are supported per request. Pages can be negative.
     * Page 1 means the first page.
     * Page 2 means the second page.
     * Page -1 means the last page.
     * Page -2 means the second to the last page.
     * If the file is GIF instead of PDF or TIFF, page refers to GIF frames.
     * If this field is empty, by default the service performs image annotation
     * for the first 5 pages of the file.
     *
     * Generated from protobuf field <code>repeated int32 pages = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->pages = $arr;

        return $this;
    }

}
