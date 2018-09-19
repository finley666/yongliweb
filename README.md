  在common配置文件目录下main.php中添加如下配置即可
  'components' => [
        //阿里云oss
        'oss' => [
            'class' => 'finley666\yongliweb\AliOss',
            'accessKeyId' =>'',
            'accessKeySecret' =>'',
            'host' => '',  
            'bucket' => '',
        ],
        //七牛
        'qiniu'=> [
            'class' => 'finley666\yongliweb\Qiniu',
            'accessKey' => '',
            'secretKey' => '',
            'domain' => '',
            'bucket' => '',
            'zone'=>''
        ],
  ]
  
  
  调用:
  //aliyun oss对象存储
  $ossClient = Yii::$app->oss;
  $ossClient->uploadFile($object, $tempName);
  
  //七牛 对象存储
  $qiNiu = Yii::$app->qiniu;
  $qiNiu->uploadFile($tempName,$filename);
  
  
  说明：
  $tempName  上传图片的临时路径
  $object  目录名+文件名 或 文件名
  $filename  文件名
