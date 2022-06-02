<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HTTP2HealthCheck</code>
 */
class HTTP2HealthCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * The value of the host header in the HTTP/2 health check request. If left empty (default value), the IP on behalf of which this health check is performed will be used.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     */
    private $host = null;
    /**
     * The TCP port number for the health check request. The default value is 443. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>optional int32 port = 3446913;</code>
     */
    private $port = null;
    /**
     * Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *
     * Generated from protobuf field <code>optional string port_name = 41534345;</code>
     */
    private $port_name = null;
    /**
     * Specifies how port is selected for health checking, can be one of following values: USE_FIXED_PORT: The port number in port is used for health checking. USE_NAMED_PORT: The portName is used for health checking. USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking. If not specified, HTTP2 health check follows behavior specified in port and portName fields.
     * Check the PortSpecification enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_specification = 51590597;</code>
     */
    private $port_specification = null;
    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     * Check the ProxyHeader enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string proxy_header = 160374142;</code>
     */
    private $proxy_header = null;
    /**
     * The request path of the HTTP/2 health check request. The default value is /.
     *
     * Generated from protobuf field <code>optional string request_path = 229403605;</code>
     */
    private $request_path = null;
    /**
     * The string to match anywhere in the first 1024 bytes of the response body. If left empty (the default value), the status code determines health. The response data can only be ASCII.
     *
     * Generated from protobuf field <code>optional string response = 196547649;</code>
     */
    private $response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host
     *           The value of the host header in the HTTP/2 health check request. If left empty (default value), the IP on behalf of which this health check is performed will be used.
     *     @type int $port
     *           The TCP port number for the health check request. The default value is 443. Valid values are 1 through 65535.
     *     @type string $port_name
     *           Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *     @type string $port_specification
     *           Specifies how port is selected for health checking, can be one of following values: USE_FIXED_PORT: The port number in port is used for health checking. USE_NAMED_PORT: The portName is used for health checking. USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking. If not specified, HTTP2 health check follows behavior specified in port and portName fields.
     *           Check the PortSpecification enum for the list of possible values.
     *     @type string $proxy_header
     *           Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *           Check the ProxyHeader enum for the list of possible values.
     *     @type string $request_path
     *           The request path of the HTTP/2 health check request. The default value is /.
     *     @type string $response
     *           The string to match anywhere in the first 1024 bytes of the response body. If left empty (the default value), the status code determines health. The response data can only be ASCII.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of the host header in the HTTP/2 health check request. If left empty (default value), the IP on behalf of which this health check is performed will be used.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @return string
     */
    public function getHost()
    {
        return isset($this->host) ? $this->host : '';
    }

    public function hasHost()
    {
        return isset($this->host);
    }

    public function clearHost()
    {
        unset($this->host);
    }

    /**
     * The value of the host header in the HTTP/2 health check request. If left empty (default value), the IP on behalf of which this health check is performed will be used.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * The TCP port number for the health check request. The default value is 443. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>optional int32 port = 3446913;</code>
     * @return int
     */
    public function getPort()
    {
        return isset($this->port) ? $this->port : 0;
    }

    public function hasPort()
    {
        return isset($this->port);
    }

    public function clearPort()
    {
        unset($this->port);
    }

    /**
     * The TCP port number for the health check request. The default value is 443. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>optional int32 port = 3446913;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *
     * Generated from protobuf field <code>optional string port_name = 41534345;</code>
     * @return string
     */
    public function getPortName()
    {
        return isset($this->port_name) ? $this->port_name : '';
    }

    public function hasPortName()
    {
        return isset($this->port_name);
    }

    public function clearPortName()
    {
        unset($this->port_name);
    }

    /**
     * Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *
     * Generated from protobuf field <code>optional string port_name = 41534345;</code>
     * @param string $var
     * @return $this
     */
    public function setPortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_name = $var;

        return $this;
    }

    /**
     * Specifies how port is selected for health checking, can be one of following values: USE_FIXED_PORT: The port number in port is used for health checking. USE_NAMED_PORT: The portName is used for health checking. USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking. If not specified, HTTP2 health check follows behavior specified in port and portName fields.
     * Check the PortSpecification enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_specification = 51590597;</code>
     * @return string
     */
    public function getPortSpecification()
    {
        return isset($this->port_specification) ? $this->port_specification : '';
    }

    public function hasPortSpecification()
    {
        return isset($this->port_specification);
    }

    public function clearPortSpecification()
    {
        unset($this->port_specification);
    }

    /**
     * Specifies how port is selected for health checking, can be one of following values: USE_FIXED_PORT: The port number in port is used for health checking. USE_NAMED_PORT: The portName is used for health checking. USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking. If not specified, HTTP2 health check follows behavior specified in port and portName fields.
     * Check the PortSpecification enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_specification = 51590597;</code>
     * @param string $var
     * @return $this
     */
    public function setPortSpecification($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_specification = $var;

        return $this;
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     * Check the ProxyHeader enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string proxy_header = 160374142;</code>
     * @return string
     */
    public function getProxyHeader()
    {
        return isset($this->proxy_header) ? $this->proxy_header : '';
    }

    public function hasProxyHeader()
    {
        return isset($this->proxy_header);
    }

    public function clearProxyHeader()
    {
        unset($this->proxy_header);
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     * Check the ProxyHeader enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string proxy_header = 160374142;</code>
     * @param string $var
     * @return $this
     */
    public function setProxyHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->proxy_header = $var;

        return $this;
    }

    /**
     * The request path of the HTTP/2 health check request. The default value is /.
     *
     * Generated from protobuf field <code>optional string request_path = 229403605;</code>
     * @return string
     */
    public function getRequestPath()
    {
        return isset($this->request_path) ? $this->request_path : '';
    }

    public function hasRequestPath()
    {
        return isset($this->request_path);
    }

    public function clearRequestPath()
    {
        unset($this->request_path);
    }

    /**
     * The request path of the HTTP/2 health check request. The default value is /.
     *
     * Generated from protobuf field <code>optional string request_path = 229403605;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_path = $var;

        return $this;
    }

    /**
     * The string to match anywhere in the first 1024 bytes of the response body. If left empty (the default value), the status code determines health. The response data can only be ASCII.
     *
     * Generated from protobuf field <code>optional string response = 196547649;</code>
     * @return string
     */
    public function getResponse()
    {
        return isset($this->response) ? $this->response : '';
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * The string to match anywhere in the first 1024 bytes of the response body. If left empty (the default value), the status code determines health. The response data can only be ASCII.
     *
     * Generated from protobuf field <code>optional string response = 196547649;</code>
     * @param string $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->response = $var;

        return $this;
    }

}

