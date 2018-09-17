<?php

namespace finley666\yongliweb;
use OSS\OssClient;
class AliOss{
    /**上传图片到阿里云oss配置
     * @var
     */
    public $accessKeyId;
    public $accessKeySecret;
    public $host;
    public $bucket;
    /** @var OssClient */
    public $client;

    /**
     *上传图片到阿里云oss 开始
     */
    public function init()
    {
        $this->client = new OssClient($this->accessKeyId, $this->accessKeySecret, $this->host);
    }

    public function putObject($object, $content, $options = null)
    {
        return $this->client->putObject($this->bucket, $object, $content, $options);
    }

    public function uploadFile($object, $filePath)
    {
        return $this->client->uploadFile($this->bucket, $object, $filePath);
    }

    public function deleteObject($object)
    {
        return $this->client->deleteObject($this->bucket, $object);
    }

}
