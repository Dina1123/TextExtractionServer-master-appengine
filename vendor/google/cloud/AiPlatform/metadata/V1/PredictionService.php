<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class PredictionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/aiplatform/v1/prediction_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto,google/cloud/aiplatform/v1/explanation.protogoogle/protobuf/struct.proto"�
PredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.Value"�
PredictResponse+
predictions (2.google.protobuf.Value
deployed_model_id (	6
model (	B\'�A�A!
aiplatform.googleapis.com/Model
model_version_id (	B�A
model_display_name (	B�A"z
RawPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint\'
	http_body (2.google.api.HttpBody"�
ExplainRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.ValueV
explanation_spec_override (23.google.cloud.aiplatform.v1.ExplanationSpecOverride
deployed_model_id (	"�
ExplainResponse=
explanations (2\'.google.cloud.aiplatform.v1.Explanation
deployed_model_id (	+
predictions (2.google.protobuf.Value2�
PredictionService�
Predict*.google.cloud.aiplatform.v1.PredictRequest+.google.cloud.aiplatform.v1.PredictResponse"d���>"9/v1/{endpoint=projects/*/locations/*/endpoints/*}:predict:*�Aendpoint,instances,parameters�

RawPredict-.google.cloud.aiplatform.v1.RawPredictRequest.google.api.HttpBody"\\���A"</v1/{endpoint=projects/*/locations/*/endpoints/*}:rawPredict:*�Aendpoint,http_body�
Explain*.google.cloud.aiplatform.v1.ExplainRequest+.google.cloud.aiplatform.v1.ExplainResponse"v���>"9/v1/{endpoint=projects/*/locations/*/endpoints/*}:explain:*�A/endpoint,instances,parameters,deployed_model_idM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BPredictionServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

