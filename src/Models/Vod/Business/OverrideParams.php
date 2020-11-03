<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Vcloud\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.OverrideParams</code>
 */
class OverrideParams extends \Google\Protobuf\Internal\Message
{
    /**
     * 水印覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.LogoOverride Logo = 1;</code>
     */
    private $Logo;
    /**
     * 视频转码覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeVideoOverride TranscodeVideo = 2;</code>
     */
    private $TranscodeVideo;
    /**
     * 音频转码覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeAudioOverride TranscodeAudio = 3;</code>
     */
    private $TranscodeAudio;
    /**
     * 截图覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.SnapshotOverride Snapshot = 4;</code>
     */
    private $Snapshot;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Vcloud\Models\Vod\Business\LogoOverride[]|\Google\Protobuf\Internal\RepeatedField $Logo
     *           水印覆盖参数
     *     @type \Vcloud\Models\Vod\Business\TranscodeVideoOverride[]|\Google\Protobuf\Internal\RepeatedField $TranscodeVideo
     *           视频转码覆盖参数
     *     @type \Vcloud\Models\Vod\Business\TranscodeAudioOverride[]|\Google\Protobuf\Internal\RepeatedField $TranscodeAudio
     *           音频转码覆盖参数
     *     @type \Vcloud\Models\Vod\Business\SnapshotOverride[]|\Google\Protobuf\Internal\RepeatedField $Snapshot
     *           截图覆盖参数
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 水印覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.LogoOverride Logo = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * 水印覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.LogoOverride Logo = 1;</code>
     * @param \Vcloud\Models\Vod\Business\LogoOverride[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vcloud\Models\Vod\Business\LogoOverride::class);
        $this->Logo = $arr;

        return $this;
    }

    /**
     * 视频转码覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeVideoOverride TranscodeVideo = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranscodeVideo()
    {
        return $this->TranscodeVideo;
    }

    /**
     * 视频转码覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeVideoOverride TranscodeVideo = 2;</code>
     * @param \Vcloud\Models\Vod\Business\TranscodeVideoOverride[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranscodeVideo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vcloud\Models\Vod\Business\TranscodeVideoOverride::class);
        $this->TranscodeVideo = $arr;

        return $this;
    }

    /**
     * 音频转码覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeAudioOverride TranscodeAudio = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranscodeAudio()
    {
        return $this->TranscodeAudio;
    }

    /**
     * 音频转码覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeAudioOverride TranscodeAudio = 3;</code>
     * @param \Vcloud\Models\Vod\Business\TranscodeAudioOverride[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranscodeAudio($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vcloud\Models\Vod\Business\TranscodeAudioOverride::class);
        $this->TranscodeAudio = $arr;

        return $this;
    }

    /**
     * 截图覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.SnapshotOverride Snapshot = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnapshot()
    {
        return $this->Snapshot;
    }

    /**
     * 截图覆盖参数
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.SnapshotOverride Snapshot = 4;</code>
     * @param \Vcloud\Models\Vod\Business\SnapshotOverride[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vcloud\Models\Vod\Business\SnapshotOverride::class);
        $this->Snapshot = $arr;

        return $this;
    }

}

