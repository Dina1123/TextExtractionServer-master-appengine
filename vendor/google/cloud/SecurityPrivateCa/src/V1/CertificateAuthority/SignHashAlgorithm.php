<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateAuthority;

use UnexpectedValueException;

/**
 * The algorithm of a Cloud KMS CryptoKeyVersion of a
 * [CryptoKey][google.cloud.kms.v1.CryptoKey] with the
 * [CryptoKeyPurpose][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose] value
 * `ASYMMETRIC_SIGN`. These values correspond to the
 * [CryptoKeyVersionAlgorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
 * values. For RSA signing algorithms, the PSS algorithms should be preferred,
 * use PKCS1 algorithms if required for compatibility. For further
 * recommendations, see
 * https://cloud.google.com/kms/docs/algorithms#algorithm_recommendations.
 *
 * Protobuf type <code>google.cloud.security.privateca.v1.CertificateAuthority.SignHashAlgorithm</code>
 */
class SignHashAlgorithm
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>SIGN_HASH_ALGORITHM_UNSPECIFIED = 0;</code>
     */
    const SIGN_HASH_ALGORITHM_UNSPECIFIED = 0;
    /**
     * maps to CryptoKeyVersionAlgorithm.RSA_SIGN_PSS_2048_SHA256
     *
     * Generated from protobuf enum <code>RSA_PSS_2048_SHA256 = 1;</code>
     */
    const RSA_PSS_2048_SHA256 = 1;
    /**
     * maps to CryptoKeyVersionAlgorithm. RSA_SIGN_PSS_3072_SHA256
     *
     * Generated from protobuf enum <code>RSA_PSS_3072_SHA256 = 2;</code>
     */
    const RSA_PSS_3072_SHA256 = 2;
    /**
     * maps to CryptoKeyVersionAlgorithm.RSA_SIGN_PSS_4096_SHA256
     *
     * Generated from protobuf enum <code>RSA_PSS_4096_SHA256 = 3;</code>
     */
    const RSA_PSS_4096_SHA256 = 3;
    /**
     * maps to CryptoKeyVersionAlgorithm.RSA_SIGN_PKCS1_2048_SHA256
     *
     * Generated from protobuf enum <code>RSA_PKCS1_2048_SHA256 = 6;</code>
     */
    const RSA_PKCS1_2048_SHA256 = 6;
    /**
     * maps to CryptoKeyVersionAlgorithm.RSA_SIGN_PKCS1_3072_SHA256
     *
     * Generated from protobuf enum <code>RSA_PKCS1_3072_SHA256 = 7;</code>
     */
    const RSA_PKCS1_3072_SHA256 = 7;
    /**
     * maps to CryptoKeyVersionAlgorithm.RSA_SIGN_PKCS1_4096_SHA256
     *
     * Generated from protobuf enum <code>RSA_PKCS1_4096_SHA256 = 8;</code>
     */
    const RSA_PKCS1_4096_SHA256 = 8;
    /**
     * maps to CryptoKeyVersionAlgorithm.EC_SIGN_P256_SHA256
     *
     * Generated from protobuf enum <code>EC_P256_SHA256 = 4;</code>
     */
    const EC_P256_SHA256 = 4;
    /**
     * maps to CryptoKeyVersionAlgorithm.EC_SIGN_P384_SHA384
     *
     * Generated from protobuf enum <code>EC_P384_SHA384 = 5;</code>
     */
    const EC_P384_SHA384 = 5;

    private static $valueToName = [
        self::SIGN_HASH_ALGORITHM_UNSPECIFIED => 'SIGN_HASH_ALGORITHM_UNSPECIFIED',
        self::RSA_PSS_2048_SHA256 => 'RSA_PSS_2048_SHA256',
        self::RSA_PSS_3072_SHA256 => 'RSA_PSS_3072_SHA256',
        self::RSA_PSS_4096_SHA256 => 'RSA_PSS_4096_SHA256',
        self::RSA_PKCS1_2048_SHA256 => 'RSA_PKCS1_2048_SHA256',
        self::RSA_PKCS1_3072_SHA256 => 'RSA_PKCS1_3072_SHA256',
        self::RSA_PKCS1_4096_SHA256 => 'RSA_PKCS1_4096_SHA256',
        self::EC_P256_SHA256 => 'EC_P256_SHA256',
        self::EC_P384_SHA384 => 'EC_P384_SHA384',
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


