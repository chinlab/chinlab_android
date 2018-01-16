<?php
return [
    'rongyun' => [
        'class' => 'app\common\components\rongyun\Rongyun',
        'appKey' => 'cpj2xarlc14tn',
        'appSecret' => 'HDfs3k3IympCB',
        'jsonPath' => "jsonsource/",
    ],
    'sphinx' => [
        'class' => 'yii\sphinx\Connection',
        'dsn' => 'mysql:host=192.168.100.196;port=9306;',
        'username' => '',
        'password' => '',
    ],
    'queue' => [
        'class' => 'app\common\components\RabbitClient',
        'host' => '192.168.100.197',
        'port' => '5672',
        'user' => 'bjtest',
        'pass' => 'bjtest',
        'vhost' => '/bjtest',
    ],
    'queueConsumer' => [
        'class' => 'app\common\components\RabbitClient',
        'host' => '192.168.100.197',
        'port' => '5672',
        'user' => 'bjtest',
        'pass' => 'bjtest',
        'vhost' => '/bjtest',
    ],
    'DBID' => [
        'class' => 'app\common\components\RDBID',
    ],
    'redis' => [
        'class' => 'yii\redis\Connection',
        'hostname' => '192.168.100.197',
        'port' => 6379,
        'database' => 0,
    ],
	'session' => [
		'class' => 'yii\redis\Session',
		'timeout'=> 1440,
	],
    'ssdb' => [
        'class' => 'yii\redis\Connection',
        'hostname' => '192.168.100.196',
        'port' => 8888,
        'database' => 0,
    ],
    'cache' => [
        'class' => 'yii\redis\Cache',
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning', 'info'],
                'logFile' => '/home/wwwlogs/weblog/huobanys.log',
                'maxFileSize' => 1024 * 2,
                'maxLogFiles' => 20,
            ],
        ],
    ],
    'db' => [
        'class' => 'yii\db\Connection',
        'masterConfig' => [
            'username' => 'php4doctor',
            'password' => 'php4nuochunfeng',
            'charset' => 'utf8',
            'attributes' => [
                PDO::ATTR_TIMEOUT => 10,
            ],
        ],
        'masters' => [
            ['dsn' => 'mysql:host=192.168.100.197;dbname=db_doctor'],
        ],
        'slaveConfig' => [
            'username' => 'php4doctor',
            'password' => 'php4nuochunfeng',
            'charset' => 'utf8',
            'attributes' => [
                PDO::ATTR_TIMEOUT => 10,
            ],
        ],
        'slaves' => [
            ['dsn' => 'mysql:host=192.168.100.196;dbname=db_doctor'],
        ],
    ],
	'db_master_one' => [
			'class' => 'yii\db\Connection',
			'masterConfig' => [
					'username' => 'php4doctor',
					'password' => 'php4nuochunfeng',
					'charset' => 'utf8',
					'attributes' => [
							PDO::ATTR_TIMEOUT => 10,
					],
			],
			'masters' => [
					['dsn' => 'mysql:host=192.168.100.197;dbname=db_doctor'],
			],
			'slaveConfig' => [
					'username' => 'php4doctor',
					'password' => 'php4nuochunfeng',
					'charset' => 'utf8',
					'attributes' => [
							PDO::ATTR_TIMEOUT => 10,
					],
			],
			'slaves' => [
					['dsn' => 'mysql:host=192.168.100.196;dbname=db_doctor'],
			],
	],
	'db_master_two' => [
			'class' => 'yii\db\Connection',
			'masterConfig' => [
					'username' => 'php4doctor',
					'password' => 'php4nuochunfeng',
					'charset' => 'utf8',
					'attributes' => [
							PDO::ATTR_TIMEOUT => 10,
					],
			],
			'masters' => [
					['dsn' => 'mysql:host=192.168.100.197;dbname=db_doctor'],
			],
			'slaveConfig' => [
					'username' => 'php4doctor',
					'password' => 'php4nuochunfeng',
					'charset' => 'utf8',
					'attributes' => [
							PDO::ATTR_TIMEOUT => 10,
					],
			],
			'slaves' => [
					['dsn' => 'mysql:host=192.168.100.196;dbname=db_doctor'],
			],
	],
    'runData' => [
        'class' => 'app\common\data\RunData',
        'baseUrl' => 'https://test.huobanys.com',
    ],
    'getParams' => [
        'class' => 'app\common\data\GetParams',
    ],
    //fdfs上传文件
    'fdfs' => [
        'class' => 'app\common\components\Fdfs',
        'baseUrl' => 'http://files.test.huobanys.com/',
    ],
    'httpClient' => [
        'class' => 'app\common\components\HttpClient',
        'options' => [
            CURLOPT_PROXY => '192.168.100.200',
            CURLOPT_PROXYPORT => '3128',
        ],
    ],
    'alipay' => [
        'class' => 'app\common\components\AlipayClient',
        'appId' => '2016110402530013',
        'partnerId' => '2088521157569805',
        'sellerId' => 'info@huobanys.com',
        'notifyUrl' => 'https://test.huobanys.com/alipay_pay.asp',
        //'notifyUrl' => 'https://www.huobanys.com/test.php',
        'privateKeyPath' => __DIR__ . '/rsa_private_key.pem',
        'aliPublicKeyPath' => __DIR__ . '/alipay_public_key.pem',
    ],
    //1418513502 514635
    'weipay' => [
        'class' => 'app\common\components\WeixinClient',
        'config' => [
            'APPID' => 'wx4351c8739d86940d',
            'MCHID' => '1418513502',
            'KEY' => 'qa4h9zdxgtjlvj9c53uzrvksslgdij1h',
            'APPSECRET' => '8fa8cc0ddd7118e151b2a76ae622cf04',
            'SSLCERT_PATH' => __DIR__.'/cert/apiclient_cert.pem',
            'SSLKEY_PATH' => __DIR__.'/cert/apiclient_key.pem',
            'REPORT_LEVENL' => 1,
            'GONGZONGHAO' => 'wx4351c8739d86940d',
            'GONGZONGHAO_MATCHID' => '1418513502',
            'GONGZONGHAO_KEY' => 'qa4h9zdxgtjlvj9c53uzrvksslgdij1h',
            'GONGZONGHAO_PASS' => '8fa8cc0ddd7118e151b2a76ae622cf04',
            'NOTIFY_URL' => 'https://test.huobanys.com/userApi/pay_weipay.php',
        ],
    ],
	'unionPay' => [
		'class' => 'app\common\components\UnionPayClient',
		'config' => [
			'MER_ID' => '898111980110147',  //银联商户号
			'SDK_SIGN_CERT_PWD' => '000000',// 签名证书密码
			'SDK_SIGN_CERT_PATH'=> __DIR__.'/certs/'.CONF_ENV.'certs/'.'acp_'.CONF_ENV.'sign.pfx',// 签名证书路径
			'SDK_ENCRYPT_CERT_PATH'=>__DIR__.'/certs/'.CONF_ENV.'certs/'.'acp_'.CONF_ENV.'enc.cer',// 密码加密证书（这条一般用不到的请随便配）
			'SDK_VERIFY_CERT_DIR'  => __DIR__.'/certs/'.CONF_ENV.'certs/',// 验签证书路径
		],
		'requestUrl'=>[
			'SDK_App_Request_Url' => 'https://gateway.95516.com/gateway/api/appTransReq.do',//app交易地址
			'SDK_FRONT_NOTIFY_URL'=> 'https://test.huobanys.com/userApi/pay_unionpay.php',// 前台通知地址 (商户自行配置通知地址)
			'SDK_FRONT_TRANS_URL' => 'https://test.huobanys.com/userApi/pay_unionpay.php',/// 后台请求地址
		],
		'proxy' => [
			'PROXY' => '192.168.100.200',
			'PROXYPORT' => '3128',
		],
	],
	'authManager' => [
		'class' => 'yii\rbac\DbManager',
		'itemTable' => 'auth_item',
		'assignmentTable' => 'auth_assignment',
		'itemChildTable' => 'auth_item_child',
		'defaultRoles' => ['guest'],
	],
	//个推扩展
	'getui'  => [
		'class' => 'kasole\getui\Push',
		'options' => [
			'host'  => 'http://sdk.open.api.igexin.com/apiex.htm',
			'appkey' => 'e2DmaLjm1V7EO2nW1y2f03',
			'appid'  => '2gmpKFsdHA6Zd4nu07odC1',
			'mastersecret'=>'FsajnUj6JE9ypYU9Wa8oQA',
			'cid' => '',
			'devicetoken' => '',
			'alias' => '',
		],
		'proxy' => [
			CURLOPT_PROXY => '192.168.100.200',
			CURLOPT_PROXYPORT => '3128',
		],
	],
];
