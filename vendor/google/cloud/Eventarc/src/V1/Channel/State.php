<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/channel.proto

namespace Google\Cloud\Eventarc\V1\Channel;

use UnexpectedValueException;

/**
 * State lists all the possible states of a Channel
 *
 * Protobuf type <code>google.cloud.eventarc.v1.Channel.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The PENDING state indicates that a Channel has been created successfully
     * and there is a new activation token available for the subscriber to use
     * to convey the Channel to the provider in order to create a Connection.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The ACTIVE state indicates that a Channel has been successfully
     * connected with the event provider.
     * An ACTIVE Channel is ready to receive and route events from the
     * event provider.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The INACTIVE state indicates that the Channel cannot receive events
     * permanently. There are two possible cases this state can happen:
     * 1. The SaaS provider disconnected from this Channel.
     * 2. The Channel activation token has expired but the SaaS provider
     *    wasn't connected.
     * To re-establish a Connection with a provider, the subscriber
     * should create a new Channel and give it to the provider.
     *
     * Generated from protobuf enum <code>INACTIVE = 3;</code>
     */
    const INACTIVE = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::ACTIVE => 'ACTIVE',
        self::INACTIVE => 'INACTIVE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

