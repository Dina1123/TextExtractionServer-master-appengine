<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig;

use UnexpectedValueException;

/**
 * Defines how volume data should be restored
 *
 * Protobuf type <code>google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy</code>
 */
class VolumeDataRestorePolicy
{
    /**
     * Unspecified (illegal).
     *
     * Generated from protobuf enum <code>VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED = 0;</code>
     */
    const VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED = 0;
    /**
     * For each PVC to be restored, will create a new underlying volume (and PV)
     * from the corresponding VolumeBackup contained within the Backup.
     *
     * Generated from protobuf enum <code>RESTORE_VOLUME_DATA_FROM_BACKUP = 1;</code>
     */
    const RESTORE_VOLUME_DATA_FROM_BACKUP = 1;
    /**
     * For each PVC to be restored, attempt to reuse the original PV contained
     * in the Backup (with its original underlying volume).  Note that option
     * is likely only usable when restoring a workload to its original cluster.
     *
     * Generated from protobuf enum <code>REUSE_VOLUME_HANDLE_FROM_BACKUP = 2;</code>
     */
    const REUSE_VOLUME_HANDLE_FROM_BACKUP = 2;
    /**
     * For each PVC to be restored, PVCs will be created without any particular
     * action to restore data.  In this case, the normal Kubernetes provisioning
     * logic would kick in, and this would likely result in either dynamically
     * provisioning blank PVs or binding to statically provisioned PVs.
     *
     * Generated from protobuf enum <code>NO_VOLUME_DATA_RESTORATION = 3;</code>
     */
    const NO_VOLUME_DATA_RESTORATION = 3;

    private static $valueToName = [
        self::VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED => 'VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED',
        self::RESTORE_VOLUME_DATA_FROM_BACKUP => 'RESTORE_VOLUME_DATA_FROM_BACKUP',
        self::REUSE_VOLUME_HANDLE_FROM_BACKUP => 'REUSE_VOLUME_HANDLE_FROM_BACKUP',
        self::NO_VOLUME_DATA_RESTORATION => 'NO_VOLUME_DATA_RESTORATION',
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


