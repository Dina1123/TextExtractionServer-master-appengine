<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.UpdateEntityType][google.cloud.aiplatform.v1.FeaturestoreService.UpdateEntityType].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateEntityTypeRequest</code>
 */
class UpdateEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The EntityType's `name` field is used to identify the EntityType
     * to be updated. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EntityType entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entity_type = null;
    /**
     * Field mask is used to specify the fields to be overwritten in the
     * EntityType resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `description`
     *   * `labels`
     *   * `monitoring_config.snapshot_analysis.disabled`
     *   * `monitoring_config.snapshot_analysis.monitoring_interval_days`
     *   * `monitoring_config.snapshot_analysis.staleness_days`
     *   * `monitoring_config.import_features_analysis.state`
     *   * `monitoring_config.import_features_analysis.anomaly_detection_baseline`
     *   * `monitoring_config.numerical_threshold_config.value`
     *   * `monitoring_config.categorical_threshold_config.value`
     *   * `offline_storage_ttl_days` (available in Preview)
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
     *     @type \Google\Cloud\AIPlatform\V1\EntityType $entity_type
     *           Required. The EntityType's `name` field is used to identify the EntityType
     *           to be updated. Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask is used to specify the fields to be overwritten in the
     *           EntityType resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then only the non-empty fields present in the
     *           request will be overwritten. Set the update_mask to `*` to override all
     *           fields.
     *           Updatable fields:
     *             * `description`
     *             * `labels`
     *             * `monitoring_config.snapshot_analysis.disabled`
     *             * `monitoring_config.snapshot_analysis.monitoring_interval_days`
     *             * `monitoring_config.snapshot_analysis.staleness_days`
     *             * `monitoring_config.import_features_analysis.state`
     *             * `monitoring_config.import_features_analysis.anomaly_detection_baseline`
     *             * `monitoring_config.numerical_threshold_config.value`
     *             * `monitoring_config.categorical_threshold_config.value`
     *             * `offline_storage_ttl_days` (available in Preview)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The EntityType's `name` field is used to identify the EntityType
     * to be updated. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EntityType entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\EntityType|null
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    public function hasEntityType()
    {
        return isset($this->entity_type);
    }

    public function clearEntityType()
    {
        unset($this->entity_type);
    }

    /**
     * Required. The EntityType's `name` field is used to identify the EntityType
     * to be updated. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EntityType entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\EntityType $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EntityType::class);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the
     * EntityType resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `description`
     *   * `labels`
     *   * `monitoring_config.snapshot_analysis.disabled`
     *   * `monitoring_config.snapshot_analysis.monitoring_interval_days`
     *   * `monitoring_config.snapshot_analysis.staleness_days`
     *   * `monitoring_config.import_features_analysis.state`
     *   * `monitoring_config.import_features_analysis.anomaly_detection_baseline`
     *   * `monitoring_config.numerical_threshold_config.value`
     *   * `monitoring_config.categorical_threshold_config.value`
     *   * `offline_storage_ttl_days` (available in Preview)
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
     * Field mask is used to specify the fields to be overwritten in the
     * EntityType resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `description`
     *   * `labels`
     *   * `monitoring_config.snapshot_analysis.disabled`
     *   * `monitoring_config.snapshot_analysis.monitoring_interval_days`
     *   * `monitoring_config.snapshot_analysis.staleness_days`
     *   * `monitoring_config.import_features_analysis.state`
     *   * `monitoring_config.import_features_analysis.anomaly_detection_baseline`
     *   * `monitoring_config.numerical_threshold_config.value`
     *   * `monitoring_config.categorical_threshold_config.value`
     *   * `offline_storage_ttl_days` (available in Preview)
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
