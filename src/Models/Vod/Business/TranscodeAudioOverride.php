<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Vcloud\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.TranscodeAudioOverride</code>
 */
class TranscodeAudioOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * 被覆盖的音频模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     */
    private $TemplateId;
    /**
     * Generated from protobuf field <code>.Vcloud.Models.Vod.Clip Clip = 2;</code>
     */
    protected $Clip = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $TemplateId
     *           被覆盖的音频模板Id, 支持ALL
     *     @type \Vcloud\Models\Vod\Business\Clip $Clip
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 被覆盖的音频模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 被覆盖的音频模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->TemplateId = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Vod.Clip Clip = 2;</code>
     * @return \Vcloud\Models\Vod\Business\Clip
     */
    public function getClip()
    {
        return $this->Clip;
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Vod.Clip Clip = 2;</code>
     * @param \Vcloud\Models\Vod\Business\Clip $var
     * @return $this
     */
    public function setClip($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Vod\Business\Clip::class);
        $this->Clip = $var;

        return $this;
    }

}

