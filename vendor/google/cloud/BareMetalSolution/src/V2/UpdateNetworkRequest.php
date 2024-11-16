<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/network.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message requesting to updating a network.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.UpdateNetworkRequest</code>
 */
class UpdateNetworkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The network to update.
     * The `name` field is used to identify the instance to update.
     * Format: projects/{project}/locations/{location}/networks/{network}
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Network network = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $network = null;
    /**
     * The list of fields to update.
     * The only currently supported fields are:
     *   `labels`, `reservations`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BareMetalSolution\V2\Network $network
     *           Required. The network to update.
     *           The `name` field is used to identify the instance to update.
     *           Format: projects/{project}/locations/{location}/networks/{network}
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to update.
     *           The only currently supported fields are:
     *             `labels`, `reservations`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Network::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The network to update.
     * The `name` field is used to identify the instance to update.
     * Format: projects/{project}/locations/{location}/networks/{network}
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Network network = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BareMetalSolution\V2\Network|null
     */
    public function getNetwork()
    {
        return $this->network;
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Required. The network to update.
     * The `name` field is used to identify the instance to update.
     * Format: projects/{project}/locations/{location}/networks/{network}
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Network network = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BareMetalSolution\V2\Network $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BareMetalSolution\V2\Network::class);
        $this->network = $var;

        return $this;
    }

    /**
     * The list of fields to update.
     * The only currently supported fields are:
     *   `labels`, `reservations`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to update.
     * The only currently supported fields are:
     *   `labels`, `reservations`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
