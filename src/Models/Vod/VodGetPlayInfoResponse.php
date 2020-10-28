<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod_play.proto

namespace Vcloud\Models\Vod;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ttvcloud.models.VodGetPlayInfoResponse</code>
 */
class VodGetPlayInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Vcloud.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * Generated from protobuf field <code>.ttvcloud.models.VodGetPlayInfoResult Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Vcloud\Models\Base\ResponseMetadata $ResponseMetadata
     *     @type \Vcloud\Models\Vod\VodGetPlayInfoResult $Result
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodPlay::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Vcloud\Models\Base\ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Vcloud\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ttvcloud.models.VodGetPlayInfoResult Result = 2;</code>
     * @return \Vcloud\Models\Vod\VodGetPlayInfoResult
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * Generated from protobuf field <code>.ttvcloud.models.VodGetPlayInfoResult Result = 2;</code>
     * @param \Vcloud\Models\Vod\VodGetPlayInfoResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Vod\VodGetPlayInfoResult::class);
        $this->Result = $var;

        return $this;
    }

}

