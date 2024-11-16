<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta;

use UnexpectedValueException;

/**
 * View on Instance. Pass this enum to rpcs that returns an Instance message to
 * control which subsets of fields to get.
 *
 * Protobuf type <code>google.cloud.alloydb.v1beta.InstanceView</code>
 */
class InstanceView
{
    /**
     * INSTANCE_VIEW_UNSPECIFIED Not specified, equivalent to BASIC.
     *
     * Generated from protobuf enum <code>INSTANCE_VIEW_UNSPECIFIED = 0;</code>
     */
    const INSTANCE_VIEW_UNSPECIFIED = 0;
    /**
     * BASIC server responses for a primary or read instance include all the
     * relevant instance details, excluding the details of each node in the
     * instance. The default value.
     *
     * Generated from protobuf enum <code>INSTANCE_VIEW_BASIC = 1;</code>
     */
    const INSTANCE_VIEW_BASIC = 1;
    /**
     * FULL response is equivalent to BASIC for primary instance (for now).
     * For read pool instance, this includes details of each node in the pool.
     *
     * Generated from protobuf enum <code>INSTANCE_VIEW_FULL = 2;</code>
     */
    const INSTANCE_VIEW_FULL = 2;

    private static $valueToName = [
        self::INSTANCE_VIEW_UNSPECIFIED => 'INSTANCE_VIEW_UNSPECIFIED',
        self::INSTANCE_VIEW_BASIC => 'INSTANCE_VIEW_BASIC',
        self::INSTANCE_VIEW_FULL => 'INSTANCE_VIEW_FULL',
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

