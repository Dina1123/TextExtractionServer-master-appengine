<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\VideoStream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * H264 codec settings.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.VideoStream.H264CodecSettings</code>
 */
class H264CodecSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The width of the video in pixels. Must be an even integer.
     * When not specified, the width is adjusted to match the specified height
     * and input aspect ratio. If both are omitted, the input width is used.
     * For portrait videos that contain horizontal ASR and rotation metadata,
     * provide the width, in pixels, per the horizontal ASR. The API calculates
     * the height per the horizontal ASR. The API detects any rotation metadata
     * and swaps the requested height and width for the output.
     *
     * Generated from protobuf field <code>int32 width_pixels = 1;</code>
     */
    private $width_pixels = 0;
    /**
     * The height of the video in pixels. Must be an even integer.
     * When not specified, the height is adjusted to match the specified width
     * and input aspect ratio. If both are omitted, the input height is used.
     * For portrait videos that contain horizontal ASR and rotation metadata,
     * provide the height, in pixels, per the horizontal ASR. The API calculates
     * the width per the horizontal ASR. The API detects any rotation metadata
     * and swaps the requested height and width for the output.
     *
     * Generated from protobuf field <code>int32 height_pixels = 2;</code>
     */
    private $height_pixels = 0;
    /**
     * Required. The target video frame rate in frames per second (FPS). Must be
     * less than or equal to 120. Will default to the input frame rate if larger
     * than the input frame rate. The API will generate an output FPS that is
     * divisible by the input FPS, and smaller or equal to the target FPS. See
     * [Calculating frame
     * rate](https://cloud.google.com/transcoder/docs/concepts/frame-rate) for
     * more information.
     *
     * Generated from protobuf field <code>double frame_rate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $frame_rate = 0.0;
    /**
     * Required. The video bitrate in bits per second. The minimum value is
     * 1,000. The maximum value is 800,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $bitrate_bps = 0;
    /**
     * Pixel format to use. The default is `yuv420p`.
     * Supported pixel formats:
     * - `yuv420p` pixel format
     * - `yuv422p` pixel format
     * - `yuv444p` pixel format
     * - `yuv420p10` 10-bit HDR pixel format
     * - `yuv422p10` 10-bit HDR pixel format
     * - `yuv444p10` 10-bit HDR pixel format
     * - `yuv420p12` 12-bit HDR pixel format
     * - `yuv422p12` 12-bit HDR pixel format
     * - `yuv444p12` 12-bit HDR pixel format
     *
     * Generated from protobuf field <code>string pixel_format = 5;</code>
     */
    private $pixel_format = '';
    /**
     * Specify the `rate_control_mode`. The default is `vbr`.
     * Supported rate control modes:
     * - `vbr` - variable bitrate
     * - `crf` - constant rate factor
     *
     * Generated from protobuf field <code>string rate_control_mode = 6;</code>
     */
    private $rate_control_mode = '';
    /**
     * Target CRF level. Must be between 10 and 36, where 10 is the highest
     * quality and 36 is the most efficient compression. The default is 21.
     *
     * Generated from protobuf field <code>int32 crf_level = 7;</code>
     */
    private $crf_level = 0;
    /**
     * Specifies whether an open Group of Pictures (GOP) structure should be
     * allowed or not. The default is `false`.
     *
     * Generated from protobuf field <code>bool allow_open_gop = 8;</code>
     */
    private $allow_open_gop = false;
    /**
     * Use two-pass encoding strategy to achieve better video quality.
     * `VideoStream.rate_control_mode` must be `vbr`. The default is `false`.
     *
     * Generated from protobuf field <code>bool enable_two_pass = 11;</code>
     */
    private $enable_two_pass = false;
    /**
     * Size of the Video Buffering Verifier (VBV) buffer in bits. Must be
     * greater than zero. The default is equal to `VideoStream.bitrate_bps`.
     *
     * Generated from protobuf field <code>int32 vbv_size_bits = 12;</code>
     */
    private $vbv_size_bits = 0;
    /**
     * Initial fullness of the Video Buffering Verifier (VBV) buffer in bits.
     * Must be greater than zero. The default is equal to 90% of
     * `VideoStream.vbv_size_bits`.
     *
     * Generated from protobuf field <code>int32 vbv_fullness_bits = 13;</code>
     */
    private $vbv_fullness_bits = 0;
    /**
     * The entropy coder to use. The default is `cabac`.
     * Supported entropy coders:
     * - `cavlc`
     * - `cabac`
     *
     * Generated from protobuf field <code>string entropy_coder = 14;</code>
     */
    private $entropy_coder = '';
    /**
     * Allow B-pyramid for reference frame selection. This may not be supported
     * on all decoders. The default is `false`.
     *
     * Generated from protobuf field <code>bool b_pyramid = 15;</code>
     */
    private $b_pyramid = false;
    /**
     * The number of consecutive B-frames. Must be greater than or equal to
     * zero. Must be less than `VideoStream.gop_frame_count` if set. The default
     * is 0.
     *
     * Generated from protobuf field <code>int32 b_frame_count = 16;</code>
     */
    private $b_frame_count = 0;
    /**
     * Specify the intensity of the adaptive quantizer (AQ). Must be between 0
     * and 1, where 0 disables the quantizer and 1 maximizes the quantizer. A
     * higher value equals a lower bitrate but smoother image. The default is 0.
     *
     * Generated from protobuf field <code>double aq_strength = 17;</code>
     */
    private $aq_strength = 0.0;
    /**
     * Enforces the specified codec profile. The following profiles are
     * supported:
     * *   `baseline`
     * *   `main`
     * *   `high` (default)
     * The available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string profile = 18;</code>
     */
    private $profile = '';
    /**
     * Enforces the specified codec tune. The available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string tune = 19;</code>
     */
    private $tune = '';
    /**
     * Enforces the specified codec preset. The default is `veryfast`. The
     * available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Preset).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string preset = 20;</code>
     */
    private $preset = '';
    protected $gop_mode;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $width_pixels
     *           The width of the video in pixels. Must be an even integer.
     *           When not specified, the width is adjusted to match the specified height
     *           and input aspect ratio. If both are omitted, the input width is used.
     *           For portrait videos that contain horizontal ASR and rotation metadata,
     *           provide the width, in pixels, per the horizontal ASR. The API calculates
     *           the height per the horizontal ASR. The API detects any rotation metadata
     *           and swaps the requested height and width for the output.
     *     @type int $height_pixels
     *           The height of the video in pixels. Must be an even integer.
     *           When not specified, the height is adjusted to match the specified width
     *           and input aspect ratio. If both are omitted, the input height is used.
     *           For portrait videos that contain horizontal ASR and rotation metadata,
     *           provide the height, in pixels, per the horizontal ASR. The API calculates
     *           the width per the horizontal ASR. The API detects any rotation metadata
     *           and swaps the requested height and width for the output.
     *     @type float $frame_rate
     *           Required. The target video frame rate in frames per second (FPS). Must be
     *           less than or equal to 120. Will default to the input frame rate if larger
     *           than the input frame rate. The API will generate an output FPS that is
     *           divisible by the input FPS, and smaller or equal to the target FPS. See
     *           [Calculating frame
     *           rate](https://cloud.google.com/transcoder/docs/concepts/frame-rate) for
     *           more information.
     *     @type int $bitrate_bps
     *           Required. The video bitrate in bits per second. The minimum value is
     *           1,000. The maximum value is 800,000,000.
     *     @type string $pixel_format
     *           Pixel format to use. The default is `yuv420p`.
     *           Supported pixel formats:
     *           - `yuv420p` pixel format
     *           - `yuv422p` pixel format
     *           - `yuv444p` pixel format
     *           - `yuv420p10` 10-bit HDR pixel format
     *           - `yuv422p10` 10-bit HDR pixel format
     *           - `yuv444p10` 10-bit HDR pixel format
     *           - `yuv420p12` 12-bit HDR pixel format
     *           - `yuv422p12` 12-bit HDR pixel format
     *           - `yuv444p12` 12-bit HDR pixel format
     *     @type string $rate_control_mode
     *           Specify the `rate_control_mode`. The default is `vbr`.
     *           Supported rate control modes:
     *           - `vbr` - variable bitrate
     *           - `crf` - constant rate factor
     *     @type int $crf_level
     *           Target CRF level. Must be between 10 and 36, where 10 is the highest
     *           quality and 36 is the most efficient compression. The default is 21.
     *     @type bool $allow_open_gop
     *           Specifies whether an open Group of Pictures (GOP) structure should be
     *           allowed or not. The default is `false`.
     *     @type int $gop_frame_count
     *           Select the GOP size based on the specified frame count. Must be greater
     *           than zero.
     *     @type \Google\Protobuf\Duration $gop_duration
     *           Select the GOP size based on the specified duration. The default is
     *           `3s`. Note that `gopDuration` must be less than or equal to
     *           [`segmentDuration`](#SegmentSettings), and
     *           [`segmentDuration`](#SegmentSettings) must be divisible by
     *           `gopDuration`.
     *     @type bool $enable_two_pass
     *           Use two-pass encoding strategy to achieve better video quality.
     *           `VideoStream.rate_control_mode` must be `vbr`. The default is `false`.
     *     @type int $vbv_size_bits
     *           Size of the Video Buffering Verifier (VBV) buffer in bits. Must be
     *           greater than zero. The default is equal to `VideoStream.bitrate_bps`.
     *     @type int $vbv_fullness_bits
     *           Initial fullness of the Video Buffering Verifier (VBV) buffer in bits.
     *           Must be greater than zero. The default is equal to 90% of
     *           `VideoStream.vbv_size_bits`.
     *     @type string $entropy_coder
     *           The entropy coder to use. The default is `cabac`.
     *           Supported entropy coders:
     *           - `cavlc`
     *           - `cabac`
     *     @type bool $b_pyramid
     *           Allow B-pyramid for reference frame selection. This may not be supported
     *           on all decoders. The default is `false`.
     *     @type int $b_frame_count
     *           The number of consecutive B-frames. Must be greater than or equal to
     *           zero. Must be less than `VideoStream.gop_frame_count` if set. The default
     *           is 0.
     *     @type float $aq_strength
     *           Specify the intensity of the adaptive quantizer (AQ). Must be between 0
     *           and 1, where 0 disables the quantizer and 1 maximizes the quantizer. A
     *           higher value equals a lower bitrate but smoother image. The default is 0.
     *     @type string $profile
     *           Enforces the specified codec profile. The following profiles are
     *           supported:
     *           *   `baseline`
     *           *   `main`
     *           *   `high` (default)
     *           The available options are
     *           [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     *           Note that certain values for this field may cause the
     *           transcoder to override other fields you set in the `H264CodecSettings`
     *           message.
     *     @type string $tune
     *           Enforces the specified codec tune. The available options are
     *           [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     *           Note that certain values for this field may cause the
     *           transcoder to override other fields you set in the `H264CodecSettings`
     *           message.
     *     @type string $preset
     *           Enforces the specified codec preset. The default is `veryfast`. The
     *           available options are
     *           [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Preset).
     *           Note that certain values for this field may cause the
     *           transcoder to override other fields you set in the `H264CodecSettings`
     *           message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The width of the video in pixels. Must be an even integer.
     * When not specified, the width is adjusted to match the specified height
     * and input aspect ratio. If both are omitted, the input width is used.
     * For portrait videos that contain horizontal ASR and rotation metadata,
     * provide the width, in pixels, per the horizontal ASR. The API calculates
     * the height per the horizontal ASR. The API detects any rotation metadata
     * and swaps the requested height and width for the output.
     *
     * Generated from protobuf field <code>int32 width_pixels = 1;</code>
     * @return int
     */
    public function getWidthPixels()
    {
        return $this->width_pixels;
    }

    /**
     * The width of the video in pixels. Must be an even integer.
     * When not specified, the width is adjusted to match the specified height
     * and input aspect ratio. If both are omitted, the input width is used.
     * For portrait videos that contain horizontal ASR and rotation metadata,
     * provide the width, in pixels, per the horizontal ASR. The API calculates
     * the height per the horizontal ASR. The API detects any rotation metadata
     * and swaps the requested height and width for the output.
     *
     * Generated from protobuf field <code>int32 width_pixels = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setWidthPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->width_pixels = $var;

        return $this;
    }

    /**
     * The height of the video in pixels. Must be an even integer.
     * When not specified, the height is adjusted to match the specified width
     * and input aspect ratio. If both are omitted, the input height is used.
     * For portrait videos that contain horizontal ASR and rotation metadata,
     * provide the height, in pixels, per the horizontal ASR. The API calculates
     * the width per the horizontal ASR. The API detects any rotation metadata
     * and swaps the requested height and width for the output.
     *
     * Generated from protobuf field <code>int32 height_pixels = 2;</code>
     * @return int
     */
    public function getHeightPixels()
    {
        return $this->height_pixels;
    }

    /**
     * The height of the video in pixels. Must be an even integer.
     * When not specified, the height is adjusted to match the specified width
     * and input aspect ratio. If both are omitted, the input height is used.
     * For portrait videos that contain horizontal ASR and rotation metadata,
     * provide the height, in pixels, per the horizontal ASR. The API calculates
     * the width per the horizontal ASR. The API detects any rotation metadata
     * and swaps the requested height and width for the output.
     *
     * Generated from protobuf field <code>int32 height_pixels = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeightPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->height_pixels = $var;

        return $this;
    }

    /**
     * Required. The target video frame rate in frames per second (FPS). Must be
     * less than or equal to 120. Will default to the input frame rate if larger
     * than the input frame rate. The API will generate an output FPS that is
     * divisible by the input FPS, and smaller or equal to the target FPS. See
     * [Calculating frame
     * rate](https://cloud.google.com/transcoder/docs/concepts/frame-rate) for
     * more information.
     *
     * Generated from protobuf field <code>double frame_rate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getFrameRate()
    {
        return $this->frame_rate;
    }

    /**
     * Required. The target video frame rate in frames per second (FPS). Must be
     * less than or equal to 120. Will default to the input frame rate if larger
     * than the input frame rate. The API will generate an output FPS that is
     * divisible by the input FPS, and smaller or equal to the target FPS. See
     * [Calculating frame
     * rate](https://cloud.google.com/transcoder/docs/concepts/frame-rate) for
     * more information.
     *
     * Generated from protobuf field <code>double frame_rate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setFrameRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->frame_rate = $var;

        return $this;
    }

    /**
     * Required. The video bitrate in bits per second. The minimum value is
     * 1,000. The maximum value is 800,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getBitrateBps()
    {
        return $this->bitrate_bps;
    }

    /**
     * Required. The video bitrate in bits per second. The minimum value is
     * 1,000. The maximum value is 800,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setBitrateBps($var)
    {
        GPBUtil::checkInt32($var);
        $this->bitrate_bps = $var;

        return $this;
    }

    /**
     * Pixel format to use. The default is `yuv420p`.
     * Supported pixel formats:
     * - `yuv420p` pixel format
     * - `yuv422p` pixel format
     * - `yuv444p` pixel format
     * - `yuv420p10` 10-bit HDR pixel format
     * - `yuv422p10` 10-bit HDR pixel format
     * - `yuv444p10` 10-bit HDR pixel format
     * - `yuv420p12` 12-bit HDR pixel format
     * - `yuv422p12` 12-bit HDR pixel format
     * - `yuv444p12` 12-bit HDR pixel format
     *
     * Generated from protobuf field <code>string pixel_format = 5;</code>
     * @return string
     */
    public function getPixelFormat()
    {
        return $this->pixel_format;
    }

    /**
     * Pixel format to use. The default is `yuv420p`.
     * Supported pixel formats:
     * - `yuv420p` pixel format
     * - `yuv422p` pixel format
     * - `yuv444p` pixel format
     * - `yuv420p10` 10-bit HDR pixel format
     * - `yuv422p10` 10-bit HDR pixel format
     * - `yuv444p10` 10-bit HDR pixel format
     * - `yuv420p12` 12-bit HDR pixel format
     * - `yuv422p12` 12-bit HDR pixel format
     * - `yuv444p12` 12-bit HDR pixel format
     *
     * Generated from protobuf field <code>string pixel_format = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPixelFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->pixel_format = $var;

        return $this;
    }

    /**
     * Specify the `rate_control_mode`. The default is `vbr`.
     * Supported rate control modes:
     * - `vbr` - variable bitrate
     * - `crf` - constant rate factor
     *
     * Generated from protobuf field <code>string rate_control_mode = 6;</code>
     * @return string
     */
    public function getRateControlMode()
    {
        return $this->rate_control_mode;
    }

    /**
     * Specify the `rate_control_mode`. The default is `vbr`.
     * Supported rate control modes:
     * - `vbr` - variable bitrate
     * - `crf` - constant rate factor
     *
     * Generated from protobuf field <code>string rate_control_mode = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRateControlMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->rate_control_mode = $var;

        return $this;
    }

    /**
     * Target CRF level. Must be between 10 and 36, where 10 is the highest
     * quality and 36 is the most efficient compression. The default is 21.
     *
     * Generated from protobuf field <code>int32 crf_level = 7;</code>
     * @return int
     */
    public function getCrfLevel()
    {
        return $this->crf_level;
    }

    /**
     * Target CRF level. Must be between 10 and 36, where 10 is the highest
     * quality and 36 is the most efficient compression. The default is 21.
     *
     * Generated from protobuf field <code>int32 crf_level = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCrfLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->crf_level = $var;

        return $this;
    }

    /**
     * Specifies whether an open Group of Pictures (GOP) structure should be
     * allowed or not. The default is `false`.
     *
     * Generated from protobuf field <code>bool allow_open_gop = 8;</code>
     * @return bool
     */
    public function getAllowOpenGop()
    {
        return $this->allow_open_gop;
    }

    /**
     * Specifies whether an open Group of Pictures (GOP) structure should be
     * allowed or not. The default is `false`.
     *
     * Generated from protobuf field <code>bool allow_open_gop = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowOpenGop($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_open_gop = $var;

        return $this;
    }

    /**
     * Select the GOP size based on the specified frame count. Must be greater
     * than zero.
     *
     * Generated from protobuf field <code>int32 gop_frame_count = 9;</code>
     * @return int
     */
    public function getGopFrameCount()
    {
        return $this->readOneof(9);
    }

    public function hasGopFrameCount()
    {
        return $this->hasOneof(9);
    }

    /**
     * Select the GOP size based on the specified frame count. Must be greater
     * than zero.
     *
     * Generated from protobuf field <code>int32 gop_frame_count = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setGopFrameCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Select the GOP size based on the specified duration. The default is
     * `3s`. Note that `gopDuration` must be less than or equal to
     * [`segmentDuration`](#SegmentSettings), and
     * [`segmentDuration`](#SegmentSettings) must be divisible by
     * `gopDuration`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gop_duration = 10;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getGopDuration()
    {
        return $this->readOneof(10);
    }

    public function hasGopDuration()
    {
        return $this->hasOneof(10);
    }

    /**
     * Select the GOP size based on the specified duration. The default is
     * `3s`. Note that `gopDuration` must be less than or equal to
     * [`segmentDuration`](#SegmentSettings), and
     * [`segmentDuration`](#SegmentSettings) must be divisible by
     * `gopDuration`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gop_duration = 10;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGopDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Use two-pass encoding strategy to achieve better video quality.
     * `VideoStream.rate_control_mode` must be `vbr`. The default is `false`.
     *
     * Generated from protobuf field <code>bool enable_two_pass = 11;</code>
     * @return bool
     */
    public function getEnableTwoPass()
    {
        return $this->enable_two_pass;
    }

    /**
     * Use two-pass encoding strategy to achieve better video quality.
     * `VideoStream.rate_control_mode` must be `vbr`. The default is `false`.
     *
     * Generated from protobuf field <code>bool enable_two_pass = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableTwoPass($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_two_pass = $var;

        return $this;
    }

    /**
     * Size of the Video Buffering Verifier (VBV) buffer in bits. Must be
     * greater than zero. The default is equal to `VideoStream.bitrate_bps`.
     *
     * Generated from protobuf field <code>int32 vbv_size_bits = 12;</code>
     * @return int
     */
    public function getVbvSizeBits()
    {
        return $this->vbv_size_bits;
    }

    /**
     * Size of the Video Buffering Verifier (VBV) buffer in bits. Must be
     * greater than zero. The default is equal to `VideoStream.bitrate_bps`.
     *
     * Generated from protobuf field <code>int32 vbv_size_bits = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setVbvSizeBits($var)
    {
        GPBUtil::checkInt32($var);
        $this->vbv_size_bits = $var;

        return $this;
    }

    /**
     * Initial fullness of the Video Buffering Verifier (VBV) buffer in bits.
     * Must be greater than zero. The default is equal to 90% of
     * `VideoStream.vbv_size_bits`.
     *
     * Generated from protobuf field <code>int32 vbv_fullness_bits = 13;</code>
     * @return int
     */
    public function getVbvFullnessBits()
    {
        return $this->vbv_fullness_bits;
    }

    /**
     * Initial fullness of the Video Buffering Verifier (VBV) buffer in bits.
     * Must be greater than zero. The default is equal to 90% of
     * `VideoStream.vbv_size_bits`.
     *
     * Generated from protobuf field <code>int32 vbv_fullness_bits = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setVbvFullnessBits($var)
    {
        GPBUtil::checkInt32($var);
        $this->vbv_fullness_bits = $var;

        return $this;
    }

    /**
     * The entropy coder to use. The default is `cabac`.
     * Supported entropy coders:
     * - `cavlc`
     * - `cabac`
     *
     * Generated from protobuf field <code>string entropy_coder = 14;</code>
     * @return string
     */
    public function getEntropyCoder()
    {
        return $this->entropy_coder;
    }

    /**
     * The entropy coder to use. The default is `cabac`.
     * Supported entropy coders:
     * - `cavlc`
     * - `cabac`
     *
     * Generated from protobuf field <code>string entropy_coder = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setEntropyCoder($var)
    {
        GPBUtil::checkString($var, True);
        $this->entropy_coder = $var;

        return $this;
    }

    /**
     * Allow B-pyramid for reference frame selection. This may not be supported
     * on all decoders. The default is `false`.
     *
     * Generated from protobuf field <code>bool b_pyramid = 15;</code>
     * @return bool
     */
    public function getBPyramid()
    {
        return $this->b_pyramid;
    }

    /**
     * Allow B-pyramid for reference frame selection. This may not be supported
     * on all decoders. The default is `false`.
     *
     * Generated from protobuf field <code>bool b_pyramid = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setBPyramid($var)
    {
        GPBUtil::checkBool($var);
        $this->b_pyramid = $var;

        return $this;
    }

    /**
     * The number of consecutive B-frames. Must be greater than or equal to
     * zero. Must be less than `VideoStream.gop_frame_count` if set. The default
     * is 0.
     *
     * Generated from protobuf field <code>int32 b_frame_count = 16;</code>
     * @return int
     */
    public function getBFrameCount()
    {
        return $this->b_frame_count;
    }

    /**
     * The number of consecutive B-frames. Must be greater than or equal to
     * zero. Must be less than `VideoStream.gop_frame_count` if set. The default
     * is 0.
     *
     * Generated from protobuf field <code>int32 b_frame_count = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setBFrameCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->b_frame_count = $var;

        return $this;
    }

    /**
     * Specify the intensity of the adaptive quantizer (AQ). Must be between 0
     * and 1, where 0 disables the quantizer and 1 maximizes the quantizer. A
     * higher value equals a lower bitrate but smoother image. The default is 0.
     *
     * Generated from protobuf field <code>double aq_strength = 17;</code>
     * @return float
     */
    public function getAqStrength()
    {
        return $this->aq_strength;
    }

    /**
     * Specify the intensity of the adaptive quantizer (AQ). Must be between 0
     * and 1, where 0 disables the quantizer and 1 maximizes the quantizer. A
     * higher value equals a lower bitrate but smoother image. The default is 0.
     *
     * Generated from protobuf field <code>double aq_strength = 17;</code>
     * @param float $var
     * @return $this
     */
    public function setAqStrength($var)
    {
        GPBUtil::checkDouble($var);
        $this->aq_strength = $var;

        return $this;
    }

    /**
     * Enforces the specified codec profile. The following profiles are
     * supported:
     * *   `baseline`
     * *   `main`
     * *   `high` (default)
     * The available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string profile = 18;</code>
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Enforces the specified codec profile. The following profiles are
     * supported:
     * *   `baseline`
     * *   `main`
     * *   `high` (default)
     * The available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string profile = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->profile = $var;

        return $this;
    }

    /**
     * Enforces the specified codec tune. The available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string tune = 19;</code>
     * @return string
     */
    public function getTune()
    {
        return $this->tune;
    }

    /**
     * Enforces the specified codec tune. The available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Tune).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string tune = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setTune($var)
    {
        GPBUtil::checkString($var, True);
        $this->tune = $var;

        return $this;
    }

    /**
     * Enforces the specified codec preset. The default is `veryfast`. The
     * available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Preset).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string preset = 20;</code>
     * @return string
     */
    public function getPreset()
    {
        return $this->preset;
    }

    /**
     * Enforces the specified codec preset. The default is `veryfast`. The
     * available options are
     * [FFmpeg-compatible](https://trac.ffmpeg.org/wiki/Encode/H.264#Preset).
     * Note that certain values for this field may cause the
     * transcoder to override other fields you set in the `H264CodecSettings`
     * message.
     *
     * Generated from protobuf field <code>string preset = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setPreset($var)
    {
        GPBUtil::checkString($var, True);
        $this->preset = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getGopMode()
    {
        return $this->whichOneof("gop_mode");
    }

}


