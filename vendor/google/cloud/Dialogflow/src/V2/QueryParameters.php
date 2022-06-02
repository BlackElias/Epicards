<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the parameters of the conversational query.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.QueryParameters</code>
 */
class QueryParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * The time zone of this conversational query from the
     * [time zone database](https://www.iana.org/time-zones), e.g.,
     * America/New_York, Europe/Paris. If not provided, the time zone specified in
     * agent settings is used.
     *
     * Generated from protobuf field <code>string time_zone = 1;</code>
     */
    private $time_zone = '';
    /**
     * The geo location of this conversational query.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_location = 2;</code>
     */
    private $geo_location = null;
    /**
     * The collection of contexts to be activated before this query is
     * executed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context contexts = 3;</code>
     */
    private $contexts;
    /**
     * Specifies whether to delete all contexts in the current session
     * before the new ones are activated.
     *
     * Generated from protobuf field <code>bool reset_contexts = 4;</code>
     */
    private $reset_contexts = false;
    /**
     * Additional session entity types to replace or extend developer
     * entity types with. The entity synonyms apply to all languages and persist
     * for the session of this query.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SessionEntityType session_entity_types = 5;</code>
     */
    private $session_entity_types;
    /**
     * This field can be used to pass custom data to your webhook.
     * Arbitrary JSON objects are supported.
     * If supplied, the value is used to populate the
     * `WebhookRequest.original_detect_intent_request.payload`
     * field sent to your webhook.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 6;</code>
     */
    private $payload = null;
    /**
     * Configures the type of sentiment analysis to perform. If not
     * provided, sentiment analysis is not performed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SentimentAnalysisRequestConfig sentiment_analysis_request_config = 10;</code>
     */
    private $sentiment_analysis_request_config = null;
    /**
     * This field can be used to pass HTTP headers for a webhook
     * call. These headers will be sent to webhook along with the headers that
     * have been configured through the Dialogflow web console. The headers
     * defined within this field will overwrite the headers configured through the
     * Dialogflow console if there is a conflict. Header names are
     * case-insensitive. Google's specified headers are not allowed. Including:
     * "Host", "Content-Length", "Connection", "From", "User-Agent",
     * "Accept-Encoding", "If-Modified-Since", "If-None-Match", "X-Forwarded-For",
     * etc.
     *
     * Generated from protobuf field <code>map<string, string> webhook_headers = 14;</code>
     */
    private $webhook_headers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $time_zone
     *           The time zone of this conversational query from the
     *           [time zone database](https://www.iana.org/time-zones), e.g.,
     *           America/New_York, Europe/Paris. If not provided, the time zone specified in
     *           agent settings is used.
     *     @type \Google\Type\LatLng $geo_location
     *           The geo location of this conversational query.
     *     @type \Google\Cloud\Dialogflow\V2\Context[]|\Google\Protobuf\Internal\RepeatedField $contexts
     *           The collection of contexts to be activated before this query is
     *           executed.
     *     @type bool $reset_contexts
     *           Specifies whether to delete all contexts in the current session
     *           before the new ones are activated.
     *     @type \Google\Cloud\Dialogflow\V2\SessionEntityType[]|\Google\Protobuf\Internal\RepeatedField $session_entity_types
     *           Additional session entity types to replace or extend developer
     *           entity types with. The entity synonyms apply to all languages and persist
     *           for the session of this query.
     *     @type \Google\Protobuf\Struct $payload
     *           This field can be used to pass custom data to your webhook.
     *           Arbitrary JSON objects are supported.
     *           If supplied, the value is used to populate the
     *           `WebhookRequest.original_detect_intent_request.payload`
     *           field sent to your webhook.
     *     @type \Google\Cloud\Dialogflow\V2\SentimentAnalysisRequestConfig $sentiment_analysis_request_config
     *           Configures the type of sentiment analysis to perform. If not
     *           provided, sentiment analysis is not performed.
     *     @type array|\Google\Protobuf\Internal\MapField $webhook_headers
     *           This field can be used to pass HTTP headers for a webhook
     *           call. These headers will be sent to webhook along with the headers that
     *           have been configured through the Dialogflow web console. The headers
     *           defined within this field will overwrite the headers configured through the
     *           Dialogflow console if there is a conflict. Header names are
     *           case-insensitive. Google's specified headers are not allowed. Including:
     *           "Host", "Content-Length", "Connection", "From", "User-Agent",
     *           "Accept-Encoding", "If-Modified-Since", "If-None-Match", "X-Forwarded-For",
     *           etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * The time zone of this conversational query from the
     * [time zone database](https://www.iana.org/time-zones), e.g.,
     * America/New_York, Europe/Paris. If not provided, the time zone specified in
     * agent settings is used.
     *
     * Generated from protobuf field <code>string time_zone = 1;</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * The time zone of this conversational query from the
     * [time zone database](https://www.iana.org/time-zones), e.g.,
     * America/New_York, Europe/Paris. If not provided, the time zone specified in
     * agent settings is used.
     *
     * Generated from protobuf field <code>string time_zone = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * The geo location of this conversational query.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_location = 2;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getGeoLocation()
    {
        return $this->geo_location;
    }

    public function hasGeoLocation()
    {
        return isset($this->geo_location);
    }

    public function clearGeoLocation()
    {
        unset($this->geo_location);
    }

    /**
     * The geo location of this conversational query.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_location = 2;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setGeoLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->geo_location = $var;

        return $this;
    }

    /**
     * The collection of contexts to be activated before this query is
     * executed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context contexts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContexts()
    {
        return $this->contexts;
    }

    /**
     * The collection of contexts to be activated before this query is
     * executed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context contexts = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\Context[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Context::class);
        $this->contexts = $arr;

        return $this;
    }

    /**
     * Specifies whether to delete all contexts in the current session
     * before the new ones are activated.
     *
     * Generated from protobuf field <code>bool reset_contexts = 4;</code>
     * @return bool
     */
    public function getResetContexts()
    {
        return $this->reset_contexts;
    }

    /**
     * Specifies whether to delete all contexts in the current session
     * before the new ones are activated.
     *
     * Generated from protobuf field <code>bool reset_contexts = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetContexts($var)
    {
        GPBUtil::checkBool($var);
        $this->reset_contexts = $var;

        return $this;
    }

    /**
     * Additional session entity types to replace or extend developer
     * entity types with. The entity synonyms apply to all languages and persist
     * for the session of this query.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SessionEntityType session_entity_types = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessionEntityTypes()
    {
        return $this->session_entity_types;
    }

    /**
     * Additional session entity types to replace or extend developer
     * entity types with. The entity synonyms apply to all languages and persist
     * for the session of this query.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SessionEntityType session_entity_types = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\SessionEntityType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessionEntityTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SessionEntityType::class);
        $this->session_entity_types = $arr;

        return $this;
    }

    /**
     * This field can be used to pass custom data to your webhook.
     * Arbitrary JSON objects are supported.
     * If supplied, the value is used to populate the
     * `WebhookRequest.original_detect_intent_request.payload`
     * field sent to your webhook.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 6;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * This field can be used to pass custom data to your webhook.
     * Arbitrary JSON objects are supported.
     * If supplied, the value is used to populate the
     * `WebhookRequest.original_detect_intent_request.payload`
     * field sent to your webhook.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Configures the type of sentiment analysis to perform. If not
     * provided, sentiment analysis is not performed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SentimentAnalysisRequestConfig sentiment_analysis_request_config = 10;</code>
     * @return \Google\Cloud\Dialogflow\V2\SentimentAnalysisRequestConfig|null
     */
    public function getSentimentAnalysisRequestConfig()
    {
        return $this->sentiment_analysis_request_config;
    }

    public function hasSentimentAnalysisRequestConfig()
    {
        return isset($this->sentiment_analysis_request_config);
    }

    public function clearSentimentAnalysisRequestConfig()
    {
        unset($this->sentiment_analysis_request_config);
    }

    /**
     * Configures the type of sentiment analysis to perform. If not
     * provided, sentiment analysis is not performed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SentimentAnalysisRequestConfig sentiment_analysis_request_config = 10;</code>
     * @param \Google\Cloud\Dialogflow\V2\SentimentAnalysisRequestConfig $var
     * @return $this
     */
    public function setSentimentAnalysisRequestConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SentimentAnalysisRequestConfig::class);
        $this->sentiment_analysis_request_config = $var;

        return $this;
    }

    /**
     * This field can be used to pass HTTP headers for a webhook
     * call. These headers will be sent to webhook along with the headers that
     * have been configured through the Dialogflow web console. The headers
     * defined within this field will overwrite the headers configured through the
     * Dialogflow console if there is a conflict. Header names are
     * case-insensitive. Google's specified headers are not allowed. Including:
     * "Host", "Content-Length", "Connection", "From", "User-Agent",
     * "Accept-Encoding", "If-Modified-Since", "If-None-Match", "X-Forwarded-For",
     * etc.
     *
     * Generated from protobuf field <code>map<string, string> webhook_headers = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getWebhookHeaders()
    {
        return $this->webhook_headers;
    }

    /**
     * This field can be used to pass HTTP headers for a webhook
     * call. These headers will be sent to webhook along with the headers that
     * have been configured through the Dialogflow web console. The headers
     * defined within this field will overwrite the headers configured through the
     * Dialogflow console if there is a conflict. Header names are
     * case-insensitive. Google's specified headers are not allowed. Including:
     * "Host", "Content-Length", "Connection", "From", "User-Agent",
     * "Accept-Encoding", "If-Modified-Since", "If-None-Match", "X-Forwarded-For",
     * etc.
     *
     * Generated from protobuf field <code>map<string, string> webhook_headers = 14;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setWebhookHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->webhook_headers = $arr;

        return $this;
    }

}

