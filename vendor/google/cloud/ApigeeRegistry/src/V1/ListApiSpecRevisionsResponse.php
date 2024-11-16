<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListApiSpecRevisionsResponse.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.ListApiSpecRevisionsResponse</code>
 */
class ListApiSpecRevisionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The revisions of the spec.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeregistry.v1.ApiSpec api_specs = 1;</code>
     */
    private $api_specs;
    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ApigeeRegistry\V1\ApiSpec>|\Google\Protobuf\Internal\RepeatedField $api_specs
     *           The revisions of the spec.
     *     @type string $next_page_token
     *           A token that can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * The revisions of the spec.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeregistry.v1.ApiSpec api_specs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApiSpecs()
    {
        return $this->api_specs;
    }

    /**
     * The revisions of the spec.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeregistry.v1.ApiSpec api_specs = 1;</code>
     * @param array<\Google\Cloud\ApigeeRegistry\V1\ApiSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApiSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApigeeRegistry\V1\ApiSpec::class);
        $this->api_specs = $arr;

        return $this;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

