<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListTensorboardsRequest</code>
 */
class ListTensorboardsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to list Tensorboards.
     * Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Lists the Tensorboards that match the filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * The maximum number of Tensorboards to return. The service may return
     * fewer than this value. If unspecified, at most 100 Tensorboards are
     * returned. The maximum value is 100; values above 100 are coerced to
     * 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous
     * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    private $order_by = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     */
    private $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to list Tensorboards.
     *           Format:
     *           `projects/{project}/locations/{location}`
     *     @type string $filter
     *           Lists the Tensorboards that match the filter expression.
     *     @type int $page_size
     *           The maximum number of Tensorboards to return. The service may return
     *           fewer than this value. If unspecified, at most 100 Tensorboards are
     *           returned. The maximum value is 100; values above 100 are coerced to
     *           100.
     *     @type string $page_token
     *           A page token, received from a previous
     *           [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     *           must match the call that provided the page token.
     *     @type string $order_by
     *           Field to use to sort the list.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Mask specifying which fields to read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to list Tensorboards.
     * Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to list Tensorboards.
     * Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Lists the Tensorboards that match the filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Lists the Tensorboards that match the filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of Tensorboards to return. The service may return
     * fewer than this value. If unspecified, at most 100 Tensorboards are
     * returned. The maximum value is 100; values above 100 are coerced to
     * 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of Tensorboards to return. The service may return
     * fewer than this value. If unspecified, at most 100 Tensorboards are
     * returned. The maximum value is 100; values above 100 are coerced to
     * 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous
     * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [TensorboardService.ListTensorboards][google.cloud.aiplatform.v1.TensorboardService.ListTensorboards]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}
