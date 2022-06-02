<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A streaming speech recognition result corresponding to a portion of the audio
 * that is currently being processed.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.StreamingRecognitionResult</code>
 */
class StreamingRecognitionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * These alternatives are ordered in terms of accuracy, with the top (first)
     * alternative being the most probable, as ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    private $alternatives;
    /**
     * If `false`, this `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, this is the final time the
     * speech service will return this particular `StreamingRecognitionResult`,
     * the recognizer will not return any further hypotheses for this portion of
     * the transcript and corresponding audio.
     *
     * Generated from protobuf field <code>bool is_final = 2;</code>
     */
    private $is_final = false;
    /**
     * An estimate of the likelihood that the recognizer will not
     * change its guess about this interim result. Values range from 0.0
     * (completely unstable) to 1.0 (completely stable).
     * This field is only provided for interim results (`is_final=false`).
     * The default of 0.0 is a sentinel value indicating `stability` was not set.
     *
     * Generated from protobuf field <code>float stability = 3;</code>
     */
    private $stability = 0.0;
    /**
     * Time offset of the end of this result relative to the
     * beginning of the audio.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration result_end_time = 4;</code>
     */
    private $result_end_time = null;
    /**
     * For multi-channel audio, this is the channel number corresponding to the
     * recognized result for the audio from that channel.
     * For audio_channel_count = N, its output values can range from '1' to 'N'.
     *
     * Generated from protobuf field <code>int32 channel_tag = 5;</code>
     */
    private $channel_tag = 0;
    /**
     * Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     * language tag of the language in this result. This language code was
     * detected to have the most likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $alternatives
     *           May contain one or more recognition hypotheses (up to the
     *           maximum specified in `max_alternatives`).
     *           These alternatives are ordered in terms of accuracy, with the top (first)
     *           alternative being the most probable, as ranked by the recognizer.
     *     @type bool $is_final
     *           If `false`, this `StreamingRecognitionResult` represents an
     *           interim result that may change. If `true`, this is the final time the
     *           speech service will return this particular `StreamingRecognitionResult`,
     *           the recognizer will not return any further hypotheses for this portion of
     *           the transcript and corresponding audio.
     *     @type float $stability
     *           An estimate of the likelihood that the recognizer will not
     *           change its guess about this interim result. Values range from 0.0
     *           (completely unstable) to 1.0 (completely stable).
     *           This field is only provided for interim results (`is_final=false`).
     *           The default of 0.0 is a sentinel value indicating `stability` was not set.
     *     @type \Google\Protobuf\Duration $result_end_time
     *           Time offset of the end of this result relative to the
     *           beginning of the audio.
     *     @type int $channel_tag
     *           For multi-channel audio, this is the channel number corresponding to the
     *           recognized result for the audio from that channel.
     *           For audio_channel_count = N, its output values can range from '1' to 'N'.
     *     @type string $language_code
     *           Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     *           language tag of the language in this result. This language code was
     *           detected to have the most likelihood of being spoken in the audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * These alternatives are ordered in terms of accuracy, with the top (first)
     * alternative being the most probable, as ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }

    /**
     * May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * These alternatives are ordered in terms of accuracy, with the top (first)
     * alternative being the most probable, as ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @param \Google\Cloud\Speech\V1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlternatives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1\SpeechRecognitionAlternative::class);
        $this->alternatives = $arr;

        return $this;
    }

    /**
     * If `false`, this `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, this is the final time the
     * speech service will return this particular `StreamingRecognitionResult`,
     * the recognizer will not return any further hypotheses for this portion of
     * the transcript and corresponding audio.
     *
     * Generated from protobuf field <code>bool is_final = 2;</code>
     * @return bool
     */
    public function getIsFinal()
    {
        return $this->is_final;
    }

    /**
     * If `false`, this `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, this is the final time the
     * speech service will return this particular `StreamingRecognitionResult`,
     * the recognizer will not return any further hypotheses for this portion of
     * the transcript and corresponding audio.
     *
     * Generated from protobuf field <code>bool is_final = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinal($var)
    {
        GPBUtil::checkBool($var);
        $this->is_final = $var;

        return $this;
    }

    /**
     * An estimate of the likelihood that the recognizer will not
     * change its guess about this interim result. Values range from 0.0
     * (completely unstable) to 1.0 (completely stable).
     * This field is only provided for interim results (`is_final=false`).
     * The default of 0.0 is a sentinel value indicating `stability` was not set.
     *
     * Generated from protobuf field <code>float stability = 3;</code>
     * @return float
     */
    public function getStability()
    {
        return $this->stability;
    }

    /**
     * An estimate of the likelihood that the recognizer will not
     * change its guess about this interim result. Values range from 0.0
     * (completely unstable) to 1.0 (completely stable).
     * This field is only provided for interim results (`is_final=false`).
     * The default of 0.0 is a sentinel value indicating `stability` was not set.
     *
     * Generated from protobuf field <code>float stability = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setStability($var)
    {
        GPBUtil::checkFloat($var);
        $this->stability = $var;

        return $this;
    }

    /**
     * Time offset of the end of this result relative to the
     * beginning of the audio.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration result_end_time = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getResultEndTime()
    {
        return $this->result_end_time;
    }

    public function hasResultEndTime()
    {
        return isset($this->result_end_time);
    }

    public function clearResultEndTime()
    {
        unset($this->result_end_time);
    }

    /**
     * Time offset of the end of this result relative to the
     * beginning of the audio.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration result_end_time = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setResultEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->result_end_time = $var;

        return $this;
    }

    /**
     * For multi-channel audio, this is the channel number corresponding to the
     * recognized result for the audio from that channel.
     * For audio_channel_count = N, its output values can range from '1' to 'N'.
     *
     * Generated from protobuf field <code>int32 channel_tag = 5;</code>
     * @return int
     */
    public function getChannelTag()
    {
        return $this->channel_tag;
    }

    /**
     * For multi-channel audio, this is the channel number corresponding to the
     * recognized result for the audio from that channel.
     * For audio_channel_count = N, its output values can range from '1' to 'N'.
     *
     * Generated from protobuf field <code>int32 channel_tag = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_tag = $var;

        return $this;
    }

    /**
     * Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     * language tag of the language in this result. This language code was
     * detected to have the most likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     * language tag of the language in this result. This language code was
     * detected to have the most likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

