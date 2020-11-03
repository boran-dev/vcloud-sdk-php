<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Vcloud\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.Encryption</code>
 */
class Encryption extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Uri = 1;</code>
     */
    protected $Uri = '';
    /**
     * Generated from protobuf field <code>string SecretKey = 2;</code>
     */
    protected $SecretKey = '';
    /**
     * Generated from protobuf field <code>string Algorithm = 3;</code>
     */
    protected $Algorithm = '';
    /**
     * Generated from protobuf field <code>string Version = 4;</code>
     */
    protected $Version = '';
    /**
     * Generated from protobuf field <code>string SourceMD5 = 5;</code>
     */
    protected $SourceMD5 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Uri
     *     @type string $SecretKey
     *     @type string $Algorithm
     *     @type string $Version
     *     @type string $SourceMD5
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->Uri;
    }

    /**
     * Generated from protobuf field <code>string Uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->Uri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SecretKey = 2;</code>
     * @return string
     */
    public function getSecretKey()
    {
        return $this->SecretKey;
    }

    /**
     * Generated from protobuf field <code>string SecretKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SecretKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Algorithm = 3;</code>
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->Algorithm;
    }

    /**
     * Generated from protobuf field <code>string Algorithm = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkString($var, True);
        $this->Algorithm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Generated from protobuf field <code>string Version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SourceMD5 = 5;</code>
     * @return string
     */
    public function getSourceMD5()
    {
        return $this->SourceMD5;
    }

    /**
     * Generated from protobuf field <code>string SourceMD5 = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceMD5($var)
    {
        GPBUtil::checkString($var, True);
        $this->SourceMD5 = $var;

        return $this;
    }

}

