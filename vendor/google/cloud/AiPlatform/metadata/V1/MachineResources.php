<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/machine_resources.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class MachineResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\AcceleratorType::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
2google/cloud/aiplatform/v1/machine_resources.protogoogle.cloud.aiplatform.v11google/cloud/aiplatform/v1/accelerator_type.proto"�
MachineSpec
machine_type (	B�AJ
accelerator_type (2+.google.cloud.aiplatform.v1.AcceleratorTypeB�A
accelerator_count ("�
DedicatedResourcesE
machine_spec (2\'.google.cloud.aiplatform.v1.MachineSpecB�A�A!
min_replica_count (B�A�A
max_replica_count (B�AX
autoscaling_metric_specs (21.google.cloud.aiplatform.v1.AutoscalingMetricSpecB�A"T
AutomaticResources
min_replica_count (B�A
max_replica_count (B�A"�
BatchDedicatedResourcesE
machine_spec (2\'.google.cloud.aiplatform.v1.MachineSpecB�A�A#
starting_replica_count (B�A
max_replica_count (B�A"/
ResourcesConsumed
replica_hours (B�A"=
DiskSpec
boot_disk_type (	
boot_disk_size_gb ("L
NfsMount
server (	B�A
path (	B�A
mount_point (	B�A"A
AutoscalingMetricSpec
metric_name (	B�A
target (B�
com.google.cloud.aiplatform.v1BMachineResourcesProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

