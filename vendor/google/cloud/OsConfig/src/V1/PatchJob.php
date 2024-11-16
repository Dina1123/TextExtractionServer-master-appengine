<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A high level representation of a patch job that is either in progress
 * or has completed.
 * Instance details are not included in the job. To paginate through instance
 * details, use ListPatchJobInstanceDetails.
 * For more information about patch jobs, see
 * [Creating patch
 * jobs](https://cloud.google.com/compute/docs/os-patch-management/create-patch-job).
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.PatchJob</code>
 */
class PatchJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier for this patch job in the form
     * `projects/&#42;&#47;patchJobs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Display name for this patch job. This is not a unique identifier.
     *
     * Generated from protobuf field <code>string display_name = 14;</code>
     */
    private $display_name = '';
    /**
     * Description of the patch job. Length of the description is limited
     * to 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Time this patch job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    private $create_time = null;
    /**
     * Last time this patch job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     */
    private $update_time = null;
    /**
     * The current state of the PatchJob.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchJob.State state = 5;</code>
     */
    private $state = 0;
    /**
     * Instances to patch.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchInstanceFilter instance_filter = 13;</code>
     */
    private $instance_filter = null;
    /**
     * Patch configuration being applied.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig patch_config = 7;</code>
     */
    private $patch_config = null;
    /**
     * Duration of the patch job. After the duration ends, the
     * patch job times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 8;</code>
     */
    private $duration = null;
    /**
     * Summary of instance details.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchJob.InstanceDetailsSummary instance_details_summary = 9;</code>
     */
    private $instance_details_summary = null;
    /**
     * If this patch job is a dry run, the agent reports that it has
     * finished without running any updates on the VM instance.
     *
     * Generated from protobuf field <code>bool dry_run = 10;</code>
     */
    private $dry_run = false;
    /**
     * If this patch job failed, this message provides information about the
     * failure.
     *
     * Generated from protobuf field <code>string error_message = 11;</code>
     */
    private $error_message = '';
    /**
     * Reflects the overall progress of the patch job in the range of
     * 0.0 being no progress to 100.0 being complete.
     *
     * Generated from protobuf field <code>double percent_complete = 12;</code>
     */
    private $percent_complete = 0.0;
    /**
     * Output only. Name of the patch deployment that created this patch job.
     *
     * Generated from protobuf field <code>string patch_deployment = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $patch_deployment = '';
    /**
     * Rollout strategy being applied.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout rollout = 16;</code>
     */
    private $rollout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Unique identifier for this patch job in the form
     *           `projects/&#42;&#47;patchJobs/&#42;`
     *     @type string $display_name
     *           Display name for this patch job. This is not a unique identifier.
     *     @type string $description
     *           Description of the patch job. Length of the description is limited
     *           to 1024 characters.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Time this patch job was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Last time this patch job was updated.
     *     @type int $state
     *           The current state of the PatchJob.
     *     @type \Google\Cloud\OsConfig\V1\PatchInstanceFilter $instance_filter
     *           Instances to patch.
     *     @type \Google\Cloud\OsConfig\V1\PatchConfig $patch_config
     *           Patch configuration being applied.
     *     @type \Google\Protobuf\Duration $duration
     *           Duration of the patch job. After the duration ends, the
     *           patch job times out.
     *     @type \Google\Cloud\OsConfig\V1\PatchJob\InstanceDetailsSummary $instance_details_summary
     *           Summary of instance details.
     *     @type bool $dry_run
     *           If this patch job is a dry run, the agent reports that it has
     *           finished without running any updates on the VM instance.
     *     @type string $error_message
     *           If this patch job failed, this message provides information about the
     *           failure.
     *     @type float $percent_complete
     *           Reflects the overall progress of the patch job in the range of
     *           0.0 being no progress to 100.0 being complete.
     *     @type string $patch_deployment
     *           Output only. Name of the patch deployment that created this patch job.
     *     @type \Google\Cloud\OsConfig\V1\PatchRollout $rollout
     *           Rollout strategy being applied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier for this patch job in the form
     * `projects/&#42;&#47;patchJobs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Unique identifier for this patch job in the form
     * `projects/&#42;&#47;patchJobs/&#42;`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Display name for this patch job. This is not a unique identifier.
     *
     * Generated from protobuf field <code>string display_name = 14;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name for this patch job. This is not a unique identifier.
     *
     * Generated from protobuf field <code>string display_name = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Description of the patch job. Length of the description is limited
     * to 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the patch job. Length of the description is limited
     * to 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Time this patch job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Time this patch job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Last time this patch job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Last time this patch job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The current state of the PatchJob.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchJob.State state = 5;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the PatchJob.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchJob.State state = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\PatchJob\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Instances to patch.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchInstanceFilter instance_filter = 13;</code>
     * @return \Google\Cloud\OsConfig\V1\PatchInstanceFilter|null
     */
    public function getInstanceFilter()
    {
        return $this->instance_filter;
    }

    public function hasInstanceFilter()
    {
        return isset($this->instance_filter);
    }

    public function clearInstanceFilter()
    {
        unset($this->instance_filter);
    }

    /**
     * Instances to patch.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchInstanceFilter instance_filter = 13;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchInstanceFilter $var
     * @return $this
     */
    public function setInstanceFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchInstanceFilter::class);
        $this->instance_filter = $var;

        return $this;
    }

    /**
     * Patch configuration being applied.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig patch_config = 7;</code>
     * @return \Google\Cloud\OsConfig\V1\PatchConfig|null
     */
    public function getPatchConfig()
    {
        return $this->patch_config;
    }

    public function hasPatchConfig()
    {
        return isset($this->patch_config);
    }

    public function clearPatchConfig()
    {
        unset($this->patch_config);
    }

    /**
     * Patch configuration being applied.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig patch_config = 7;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchConfig $var
     * @return $this
     */
    public function setPatchConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchConfig::class);
        $this->patch_config = $var;

        return $this;
    }

    /**
     * Duration of the patch job. After the duration ends, the
     * patch job times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Duration of the patch job. After the duration ends, the
     * patch job times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Summary of instance details.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchJob.InstanceDetailsSummary instance_details_summary = 9;</code>
     * @return \Google\Cloud\OsConfig\V1\PatchJob\InstanceDetailsSummary|null
     */
    public function getInstanceDetailsSummary()
    {
        return $this->instance_details_summary;
    }

    public function hasInstanceDetailsSummary()
    {
        return isset($this->instance_details_summary);
    }

    public function clearInstanceDetailsSummary()
    {
        unset($this->instance_details_summary);
    }

    /**
     * Summary of instance details.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchJob.InstanceDetailsSummary instance_details_summary = 9;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchJob\InstanceDetailsSummary $var
     * @return $this
     */
    public function setInstanceDetailsSummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchJob\InstanceDetailsSummary::class);
        $this->instance_details_summary = $var;

        return $this;
    }

    /**
     * If this patch job is a dry run, the agent reports that it has
     * finished without running any updates on the VM instance.
     *
     * Generated from protobuf field <code>bool dry_run = 10;</code>
     * @return bool
     */
    public function getDryRun()
    {
        return $this->dry_run;
    }

    /**
     * If this patch job is a dry run, the agent reports that it has
     * finished without running any updates on the VM instance.
     *
     * Generated from protobuf field <code>bool dry_run = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setDryRun($var)
    {
        GPBUtil::checkBool($var);
        $this->dry_run = $var;

        return $this;
    }

    /**
     * If this patch job failed, this message provides information about the
     * failure.
     *
     * Generated from protobuf field <code>string error_message = 11;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * If this patch job failed, this message provides information about the
     * failure.
     *
     * Generated from protobuf field <code>string error_message = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

    /**
     * Reflects the overall progress of the patch job in the range of
     * 0.0 being no progress to 100.0 being complete.
     *
     * Generated from protobuf field <code>double percent_complete = 12;</code>
     * @return float
     */
    public function getPercentComplete()
    {
        return $this->percent_complete;
    }

    /**
     * Reflects the overall progress of the patch job in the range of
     * 0.0 being no progress to 100.0 being complete.
     *
     * Generated from protobuf field <code>double percent_complete = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setPercentComplete($var)
    {
        GPBUtil::checkDouble($var);
        $this->percent_complete = $var;

        return $this;
    }

    /**
     * Output only. Name of the patch deployment that created this patch job.
     *
     * Generated from protobuf field <code>string patch_deployment = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPatchDeployment()
    {
        return $this->patch_deployment;
    }

    /**
     * Output only. Name of the patch deployment that created this patch job.
     *
     * Generated from protobuf field <code>string patch_deployment = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPatchDeployment($var)
    {
        GPBUtil::checkString($var, True);
        $this->patch_deployment = $var;

        return $this;
    }

    /**
     * Rollout strategy being applied.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout rollout = 16;</code>
     * @return \Google\Cloud\OsConfig\V1\PatchRollout|null
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    public function hasRollout()
    {
        return isset($this->rollout);
    }

    public function clearRollout()
    {
        unset($this->rollout);
    }

    /**
     * Rollout strategy being applied.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout rollout = 16;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchRollout $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchRollout::class);
        $this->rollout = $var;

        return $this;
    }

}

