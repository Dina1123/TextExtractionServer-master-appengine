<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `AzureClusters.ListAzureClients` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.ListAzureClientsResponse</code>
 */
class ListAzureClientsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of [AzureClient][google.cloud.gkemulticloud.v1.AzureClient]
     * resources in the specified Google Cloud project and region region.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureClient azure_clients = 1;</code>
     */
    private $azure_clients;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AzureClient>|\Google\Protobuf\Internal\RepeatedField $azure_clients
     *           A list of [AzureClient][google.cloud.gkemulticloud.v1.AzureClient]
     *           resources in the specified Google Cloud project and region region.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of [AzureClient][google.cloud.gkemulticloud.v1.AzureClient]
     * resources in the specified Google Cloud project and region region.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureClient azure_clients = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAzureClients()
    {
        return $this->azure_clients;
    }

    /**
     * A list of [AzureClient][google.cloud.gkemulticloud.v1.AzureClient]
     * resources in the specified Google Cloud project and region region.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureClient azure_clients = 1;</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AzureClient>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAzureClients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AzureClient::class);
        $this->azure_clients = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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

