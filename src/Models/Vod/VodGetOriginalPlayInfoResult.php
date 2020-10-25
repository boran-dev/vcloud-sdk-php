<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod_play.proto

namespace Vcloud\Models\Vod;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.VodGetOriginalPlayInfoResult</code>
 */
class VodGetOriginalPlayInfoResult extends \Google\Protobuf\Internal\Message
{
    /**
     *返回的媒体类型(video/audio)
     *
     * Generated from protobuf field <code>string FileType = 1;</code>
     */
    protected $FileType = '';
    /**
     *视频时长(单位：s)
     *
     * Generated from protobuf field <code>float Duration = 2;</code>
     */
    protected $Duration = 0.0;
    /**
     *视频文件大小
     *
     * Generated from protobuf field <code>int64 Size = 3;</code>
     */
    protected $Size = 0;
    /**
     *视频高度
     *
     * Generated from protobuf field <code>int64 Height = 4;</code>
     */
    protected $Height = 0;
    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int64 Width = 5;</code>
     */
    protected $Width = 0;
    /**
     *视频格式
     *
     * Generated from protobuf field <code>string Format = 6;</code>
     */
    protected $Format = '';
    /**
     *编码类型
     *
     * Generated from protobuf field <code>string Codec = 7;</code>
     */
    protected $Codec = '';
    /**
     *码率(Kbps)
     *
     * Generated from protobuf field <code>float Bitrate = 8;</code>
     */
    protected $Bitrate = 0.0;
    /**
     * hash值
     *
     * Generated from protobuf field <code>string Md5 = 9;</code>
     */
    protected $Md5 = '';
    /**
     *主播放地址
     *
     * Generated from protobuf field <code>string MainPlayUrl = 10;</code>
     */
    protected $MainPlayUrl = '';
    /**
     *备用播放地址
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 11;</code>
     */
    protected $BackupPlayUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $FileType
     *          返回的媒体类型(video/audio)
     * @type float $Duration
     *          视频时长(单位：s)
     * @type int|string $Size
     *          视频文件大小
     * @type int|string $Height
     *          视频高度
     * @type int|string $Width
     *          视频宽度
     * @type string $Format
     *          视频格式
     * @type string $Codec
     *          编码类型
     * @type float $Bitrate
     *          码率(Kbps)
     * @type string $Md5
     *           hash值
     * @type string $MainPlayUrl
     *          主播放地址
     * @type string $BackupPlayUrl
     *          备用播放地址
     * }
     */
    public function __construct($data = NULL)
    {
        \Vcloud\Models\GPBMetadata\VodPlay::initOnce();
        parent::__construct($data);
    }

    /**
     *返回的媒体类型(video/audio)
     *
     * Generated from protobuf field <code>string FileType = 1;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     *返回的媒体类型(video/audio)
     *
     * Generated from protobuf field <code>string FileType = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     *视频时长(单位：s)
     *
     * Generated from protobuf field <code>float Duration = 2;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     *视频时长(单位：s)
     *
     * Generated from protobuf field <code>float Duration = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkFloat($var);
        $this->Duration = $var;

        return $this;
    }

    /**
     *视频文件大小
     *
     * Generated from protobuf field <code>int64 Size = 3;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     *视频文件大小
     *
     * Generated from protobuf field <code>int64 Size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->Size = $var;

        return $this;
    }

    /**
     *视频高度
     *
     * Generated from protobuf field <code>int64 Height = 4;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     *视频高度
     *
     * Generated from protobuf field <code>int64 Height = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->Height = $var;

        return $this;
    }

    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int64 Width = 5;</code>
     * @return int|string
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int64 Width = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt64($var);
        $this->Width = $var;

        return $this;
    }

    /**
     *视频格式
     *
     * Generated from protobuf field <code>string Format = 6;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     *视频格式
     *
     * Generated from protobuf field <code>string Format = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     *编码类型
     *
     * Generated from protobuf field <code>string Codec = 7;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     *编码类型
     *
     * Generated from protobuf field <code>string Codec = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     *码率(Kbps)
     *
     * Generated from protobuf field <code>float Bitrate = 8;</code>
     * @return float
     */
    public function getBitrate()
    {
        return $this->Bitrate;
    }

    /**
     *码率(Kbps)
     *
     * Generated from protobuf field <code>float Bitrate = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setBitrate($var)
    {
        GPBUtil::checkFloat($var);
        $this->Bitrate = $var;

        return $this;
    }

    /**
     * hash值
     *
     * Generated from protobuf field <code>string Md5 = 9;</code>
     * @return string
     */
    public function getMd5()
    {
        return $this->Md5;
    }

    /**
     * hash值
     *
     * Generated from protobuf field <code>string Md5 = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->Md5 = $var;

        return $this;
    }

    /**
     *主播放地址
     *
     * Generated from protobuf field <code>string MainPlayUrl = 10;</code>
     * @return string
     */
    public function getMainPlayUrl()
    {
        return $this->MainPlayUrl;
    }

    /**
     *主播放地址
     *
     * Generated from protobuf field <code>string MainPlayUrl = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMainPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->MainPlayUrl = $var;

        return $this;
    }

    /**
     *备用播放地址
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 11;</code>
     * @return string
     */
    public function getBackupPlayUrl()
    {
        return $this->BackupPlayUrl;
    }

    /**
     *备用播放地址
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->BackupPlayUrl = $var;

        return $this;
    }

}

