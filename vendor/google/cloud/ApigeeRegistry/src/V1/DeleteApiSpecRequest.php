<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteApiSpec.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.DeleteApiSpecRequest</code>
 */
class DeleteApiSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the spec to delete.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If set to true, any child resources will also be deleted.
     * (Otherwise, the request will only work if there are no child resources.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the spec to delete.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *     @type bool $force
     *           If set to true, any child resources will also be deleted.
     *           (Otherwise, the request will only work if there are no child resources.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the spec to delete.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the spec to delete.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If set to true, any child resources will also be deleted.
     * (Otherwise, the request will only work if there are no child resources.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, any child resources will also be deleted.
     * (Otherwise, the request will only work if there are no child resources.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

