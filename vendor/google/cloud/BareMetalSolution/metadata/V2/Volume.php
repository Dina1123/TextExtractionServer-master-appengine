<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/volume.proto

namespace GPBMetadata\Google\Cloud\Baremetalsolution\V2;

class Volume
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/baremetalsolution/v2/volume.proto!google.cloud.baremetalsolution.v2google/api/resource.proto google/protobuf/field_mask.proto"�	
Volume
name (	B�A

id (	K
storage_type (25.google.cloud.baremetalsolution.v2.Volume.StorageType>
state (2/.google.cloud.baremetalsolution.v2.Volume.State
requested_size_gib (
current_size_gib (
emergency_size_gib (
auto_grown_size_gib (
remaining_space_gib (h
snapshot_reservation_detail (2C.google.cloud.baremetalsolution.v2.Volume.SnapshotReservationDetailk
snapshot_auto_delete_behavior	 (2D.google.cloud.baremetalsolution.v2.Volume.SnapshotAutoDeleteBehaviorE
labels (25.google.cloud.baremetalsolution.v2.Volume.LabelsEntry
snapshot_enabled (
pod (	B�A�
SnapshotReservationDetail
reserved_space_gib (#
reserved_space_used_percent ($
reserved_space_remaining_gib (
reserved_space_percent (-
LabelsEntry
key (	
value (	:8"=
StorageType
STORAGE_TYPE_UNSPECIFIED 
SSD
HDD"E
State
STATE_UNSPECIFIED 
CREATING	
READY
DELETING"}
SnapshotAutoDeleteBehavior-
)SNAPSHOT_AUTO_DELETE_BEHAVIOR_UNSPECIFIED 
DISABLED
OLDEST_FIRST
NEWEST_FIRST:f�Ac
\'baremetalsolution.googleapis.com/Volume8projects/{project}/locations/{location}/volumes/{volume}"Q
GetVolumeRequest=
name (	B/�A�A)
\'baremetalsolution.googleapis.com/Volume"�
ListVolumesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"
ListVolumesResponse:
volumes (2).google.cloud.baremetalsolution.v2.Volume
next_page_token (	
unreachable (	"�
UpdateVolumeRequest>
volume (2).google.cloud.baremetalsolution.v2.VolumeB�A/
update_mask (2.google.protobuf.FieldMask"h
ResizeVolumeRequest?
volume (	B/�A�A)
\'baremetalsolution.googleapis.com/Volume
size_gib (B�
%com.google.cloud.baremetalsolution.v2BVolumeProtoPZScloud.google.com/go/baremetalsolution/apiv2/baremetalsolutionpb;baremetalsolutionpb�!Google.Cloud.BareMetalSolution.V2�!Google\\Cloud\\BareMetalSolution\\V2�$Google::Cloud::BareMetalSolution::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

