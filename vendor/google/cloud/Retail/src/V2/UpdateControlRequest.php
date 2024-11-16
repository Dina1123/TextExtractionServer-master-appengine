<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/control_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateControl method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.UpdateControlRequest</code>
 */
class UpdateControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Control to update.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Control control = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $control = null;
    /**
     * Indicates which fields in the provided
     * [Control][google.cloud.retail.v2.Control] to update. The following are NOT
     * supported:
     * * [Control.name][google.cloud.retail.v2.Control.name]
     * If not set or empty, all supported fields are updated.
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
     *     @type \Google\Cloud\Retail\V2\Control $control
     *           Required. The Control to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Indicates which fields in the provided
     *           [Control][google.cloud.retail.v2.Control] to update. The following are NOT
     *           supported:
     *           * [Control.name][google.cloud.retail.v2.Control.name]
     *           If not set or empty, all supported fields are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ControlService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Control to update.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Control control = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\Control|null
     */
    public function getControl()
    {
        return $this->control;
    }

    public function hasControl()
    {
        return isset($this->control);
    }

    public function clearControl()
    {
        unset($this->control);
    }

    /**
     * Required. The Control to update.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Control control = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\Control $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Control::class);
        $this->control = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided
     * [Control][google.cloud.retail.v2.Control] to update. The following are NOT
     * supported:
     * * [Control.name][google.cloud.retail.v2.Control.name]
     * If not set or empty, all supported fields are updated.
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
     * Indicates which fields in the provided
     * [Control][google.cloud.retail.v2.Control] to update. The following are NOT
     * supported:
     * * [Control.name][google.cloud.retail.v2.Control.name]
     * If not set or empty, all supported fields are updated.
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

