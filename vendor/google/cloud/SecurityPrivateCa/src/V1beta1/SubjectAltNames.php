<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [SubjectAltNames][google.cloud.security.privateca.v1beta1.SubjectAltNames] corresponds to a more modern way of listing what
 * the asserted identity is in a certificate (i.e., compared to the "common
 * name" in the distinguished name).
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.SubjectAltNames</code>
 */
class SubjectAltNames extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains only valid, fully-qualified host names.
     *
     * Generated from protobuf field <code>repeated string dns_names = 1;</code>
     */
    private $dns_names;
    /**
     * Contains only valid RFC 3986 URIs.
     *
     * Generated from protobuf field <code>repeated string uris = 2;</code>
     */
    private $uris;
    /**
     * Contains only valid RFC 2822 E-mail addresses.
     *
     * Generated from protobuf field <code>repeated string email_addresses = 3;</code>
     */
    private $email_addresses;
    /**
     * Contains only valid 32-bit IPv4 addresses or RFC 4291 IPv6 addresses.
     *
     * Generated from protobuf field <code>repeated string ip_addresses = 4;</code>
     */
    private $ip_addresses;
    /**
     * Contains additional subject alternative name values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.X509Extension custom_sans = 5;</code>
     */
    private $custom_sans;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dns_names
     *           Contains only valid, fully-qualified host names.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uris
     *           Contains only valid RFC 3986 URIs.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $email_addresses
     *           Contains only valid RFC 2822 E-mail addresses.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ip_addresses
     *           Contains only valid 32-bit IPv4 addresses or RFC 4291 IPv6 addresses.
     *     @type array<\Google\Cloud\Security\PrivateCA\V1beta1\X509Extension>|\Google\Protobuf\Internal\RepeatedField $custom_sans
     *           Contains additional subject alternative name values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains only valid, fully-qualified host names.
     *
     * Generated from protobuf field <code>repeated string dns_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDnsNames()
    {
        return $this->dns_names;
    }

    /**
     * Contains only valid, fully-qualified host names.
     *
     * Generated from protobuf field <code>repeated string dns_names = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDnsNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dns_names = $arr;

        return $this;
    }

    /**
     * Contains only valid RFC 3986 URIs.
     *
     * Generated from protobuf field <code>repeated string uris = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * Contains only valid RFC 3986 URIs.
     *
     * Generated from protobuf field <code>repeated string uris = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

    /**
     * Contains only valid RFC 2822 E-mail addresses.
     *
     * Generated from protobuf field <code>repeated string email_addresses = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmailAddresses()
    {
        return $this->email_addresses;
    }

    /**
     * Contains only valid RFC 2822 E-mail addresses.
     *
     * Generated from protobuf field <code>repeated string email_addresses = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmailAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->email_addresses = $arr;

        return $this;
    }

    /**
     * Contains only valid 32-bit IPv4 addresses or RFC 4291 IPv6 addresses.
     *
     * Generated from protobuf field <code>repeated string ip_addresses = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpAddresses()
    {
        return $this->ip_addresses;
    }

    /**
     * Contains only valid 32-bit IPv4 addresses or RFC 4291 IPv6 addresses.
     *
     * Generated from protobuf field <code>repeated string ip_addresses = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ip_addresses = $arr;

        return $this;
    }

    /**
     * Contains additional subject alternative name values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.X509Extension custom_sans = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomSans()
    {
        return $this->custom_sans;
    }

    /**
     * Contains additional subject alternative name values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.X509Extension custom_sans = 5;</code>
     * @param array<\Google\Cloud\Security\PrivateCA\V1beta1\X509Extension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomSans($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1beta1\X509Extension::class);
        $this->custom_sans = $arr;

        return $this;
    }

}

