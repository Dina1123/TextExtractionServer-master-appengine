<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Image bounding poly annotation. It represents a polygon including
 * bounding box in the image.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ImageBoundingPolyAnnotation</code>
 */
class ImageBoundingPolyAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Label of object in this bounding polygon.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     */
    private $annotation_spec = null;
    protected $bounded_area;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\BoundingPoly $bounding_poly
     *     @type \Google\Cloud\DataLabeling\V1beta1\NormalizedBoundingPoly $normalized_bounding_poly
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $annotation_spec
     *           Label of object in this bounding polygon.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.BoundingPoly bounding_poly = 2;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\BoundingPoly|null
     */
    public function getBoundingPoly()
    {
        return $this->readOneof(2);
    }

    public function hasBoundingPoly()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.BoundingPoly bounding_poly = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\BoundingPoly::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.NormalizedBoundingPoly normalized_bounding_poly = 3;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\NormalizedBoundingPoly|null
     */
    public function getNormalizedBoundingPoly()
    {
        return $this->readOneof(3);
    }

    public function hasNormalizedBoundingPoly()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.NormalizedBoundingPoly normalized_bounding_poly = 3;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\NormalizedBoundingPoly $var
     * @return $this
     */
    public function setNormalizedBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\NormalizedBoundingPoly::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Label of object in this bounding polygon.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec|null
     */
    public function getAnnotationSpec()
    {
        return $this->annotation_spec;
    }

    public function hasAnnotationSpec()
    {
        return isset($this->annotation_spec);
    }

    public function clearAnnotationSpec()
    {
        unset($this->annotation_spec);
    }

    /**
     * Label of object in this bounding polygon.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $var
     * @return $this
     */
    public function setAnnotationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec::class);
        $this->annotation_spec = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBoundedArea()
    {
        return $this->whichOneof("bounded_area");
    }

}
