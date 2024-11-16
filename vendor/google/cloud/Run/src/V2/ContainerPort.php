<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ContainerPort represents a network port in a single container.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.ContainerPort</code>
 */
class ContainerPort extends \Google\Protobuf\Internal\Message
{
    /**
     * If specified, used to specify which protocol to use.
     * Allowed values are "http1" and "h2c".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Port number the container listens on.
     * This must be a valid TCP port number, 0 < container_port < 65536.
     *
     * Generated from protobuf field <code>int32 container_port = 3;</code>
     */
    private $container_port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           If specified, used to specify which protocol to use.
     *           Allowed values are "http1" and "h2c".
     *     @type int $container_port
     *           Port number the container listens on.
     *           This must be a valid TCP port number, 0 < container_port < 65536.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * If specified, used to specify which protocol to use.
     * Allowed values are "http1" and "h2c".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * If specified, used to specify which protocol to use.
     * Allowed values are "http1" and "h2c".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Port number the container listens on.
     * This must be a valid TCP port number, 0 < container_port < 65536.
     *
     * Generated from protobuf field <code>int32 container_port = 3;</code>
     * @return int
     */
    public function getContainerPort()
    {
        return $this->container_port;
    }

    /**
     * Port number the container listens on.
     * This must be a valid TCP port number, 0 < container_port < 65536.
     *
     * Generated from protobuf field <code>int32 container_port = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setContainerPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->container_port = $var;

        return $this;
    }

}

