<?php
return [
//  -----------注册账号帮助用户生成钱包地址 -------------------
    'register'             =>   [
        /**项目名称**/
        'project_key'           =>  'liwanli_test',
        /**获取地址**/
        'url'    =>  'http://212.64.106.187:82/v3/wallet/address',
        /**用户id**/
        'user_id'               =>  1
    ],
//---------------------------------


//  --------------------加密私钥---------------------
    'encrypt'              =>   [
        'url'              =>   'http://212.64.106.187:82/v3/wallet/encrypt',
        'p'              =>   'ARjbPTcKm9FxHff6GUT6VEGL1WxCv0Q8PK/eoET1YiJKjJLCzRp2WzVmOiTeEA9s/2uGneMyjoZbYmvTH1lJKQ=='
    ],
//  -------------------------------------------------


//  -----------------发送验证码-------------------
    'send_code'             =>  [
        'url'               =>  'http://39.100.121.191/api/v1/sendcode',
        'project_key'               => env("projectname"),
    ],
//  ---------------------------------------------


//  -----------------更换总地址--------------------
    'total_change_address'        =>  [
        'url'                     =>  'http://212.64.106.187:82/v3/wallet/changeaddress',

        //  支持币种['BTC', 'USDT', 'ETH', 'ERC20', 'ETC', 'EOS', 'EOSTOKEN', 'XRP']
        'coin'                    =>  'BTC',
        //  地址
        'address'                 =>    '',
        //  验证码
        'verificationcode'        =>  ''
    ],
//  -----------------------------------------------


//  ---------------------余额查询(以下参数url除外传递使用传递的,不传递使用默认的)-----------------------------
    'query_balance'             =>  [
        'eth'   =>  [
            'url'               =>  'http://212.64.106.187:82/wallet/eth/balance',
            //  精度,传递使用传递的，不传递使用默认的
            'accuracy_length'   =>  18,
            //  以太坊地址,传递使用传递的，不传递使用默认的
            'address'           =>  '0xff93791e55833477fd8e42969cc952eae94ca59d'
        ],
        'erc20' =>  [
            'url'               =>  'http://212.64.106.187:82/wallet/eth/tokenbalance',
            'accuracy_length'   =>  6,
            //  以太坊地址
            'address'           =>  '',
            //  代币合约地址
            'tokenaddress'      =>  '',
        ],
        //  泰达币
        'usdt'                  =>  [
            'url'               =>  'http://212.64.106.187:82/wallet/usdt/balance',
            'address'           =>  '1EUuy7UqJtjrcLxzh4zTYZcSVMhWpYWwpk', //  比特币地址
            //  单位长度(聪:8)
            'accuracy_length'   =>  8
        ],
        //  BTC
        'btc'                   =>  [
            'url'               =>  'http://212.64.106.187:82/wallet/btc/balance',
            'address'           =>  '1EUuy7UqJtjrcLxzh4zTYZcSVMhWpYWwpk', //  比特币地址
            //  单位长度(聪:8)
            'accuracy_length'   =>  8
        ]
    ],
//  ----------------------------------------------------------


//  转出(转账)
    'trans_balance'             =>  [
        //  比特币转账
        'btc'   =>  [
            'url'               =>  'http://39.100.121.191/api/v1/transfer/btc',
            //  转出地址
            'fromaddress'       =>  '',
            //  私钥
            'privkey'           =>  '',
            //  到账地址
            'toaddress'         =>  '',
            //  金额
            'amount'            =>  '',
            //  转账类型 1 归拢 2 打入手续费  3 提币
            'type'              =>  1,
            //  验证码 提币需要传入
            'verificationcode'  =>  '777777',
            //  精度
            'accuracy_length'   =>  8,
            //  手续费用
            'fee'               =>  0.005
        ],
        //  代币
        'erc20' =>  [
            'url'               =>  'http://39.100.121.191/api/v1/transfer/erc20',
            //  转出地址私钥
            'privkey'           =>  'xx',
            //  转出地址(从哪里出)
            'fromaddress'       =>  'xxx',
            //  到账地址
            'toaddress'         =>  'xxx',
            //  精度
            'accuracy_length'   =>  18,
            //  转账使用  1 不需要接受验证码
            //  转账类型    [1=>归拢,2=>'打入手续费',3=>'提币']
            'type'              =>  1,
            //  转账金额    单位'wei'
            'amount'            =>  1,
            //  验证码
            'verificationcode'  =>  '777777',
            //  手续费用
            'fee'               =>  0.008,
            //  代币合约地址
            'tokenaddress'      =>  ''
        ],
        'usdt'                  =>  [
            'url'               =>  'http://39.100.121.191/api/v1/transfer/usdt',
            //  转出地址(从哪里出)
            'fromaddress'       =>  '',
            //  私钥
            'privkey'           =>  '',
            //  到账地址
            'toaddress'         =>  '',
            //  精度
            'accuracy_length'   =>  8,
            //  转账类型    [1=>归拢,2=>'打入手续费',3=>'提币']
            'type'              =>  1,
            //  转账金额    单位'聪'
            'amount'            =>  1,
            //  验证码(使用转账类型1不需要验证码)
            'verificationcode'  =>  '777777',
            //  手续费用
            'fee'               =>  0.0008
        ],
        'eth'                   =>  [
            'url'               =>  'http://39.100.121.191/api/v1/transfer/eth',
            //  转出地址(从哪里出)
            'fromaddress'       =>  '',
            'project_key'       =>  env("projectname"),
            //  私钥
            'privkey'           =>  '',
            //  到账地址
            'toaddress'         =>  '',
            //  精度
            'accuracy_length'   =>  18,
            //  转账类型    [1=>归拢,2=>'打入手续费',3=>'提币']
            'type'              =>  1,
            //  转账金额    单位'聪'
            'amount'            =>  1,
            //  验证码(使用转账类型1不需要验证码)
            'verificationcode'  =>  '777777',
            //  手续费用
            'fee'               =>  0.005
        ]
    ],

//    -------------------------------哈希充币扫描区块---------------------------
    'chongBi' =>    [
        //  BTC
        'btc'  =>  [
            //  区块扫描地址
            'url'   =>      'http://212.64.106.187:82/wallet/btc/txdetail',
            //  交易哈希
            'hash'  =>      '00000000000000000015af5bdf0d22d0097ed24290ea1f711be025243b11393d',
            'type'  =>      'btc',
            //  精度
            'accuracy_length'   =>  8,
        ],
        //  USDT
        'usdt'  =>  [
            //  区块扫描地址
            'url'   =>      'http://212.64.106.187:82/wallet/btc/txdetail',
            //  交易哈希
            'hash'  =>      '57cd2c872aa65baa6779f848d64c7b0fff34c4514f8056f45c82f29e6c59d932',
            'type'  =>      'usdt',
            //  精度
            'accuracy_length'   =>  8,
        ],
        'eth'   =>  [
            //  区块扫描地址
            'url'   =>      'http://212.64.106.187:82/wallet/eth/txdetail',
            //  交易哈希
            'hash'  =>      '57cd2c872aa65baa6779f848d64c7b0fff34c4514f8056f45c82f29e6c59d932',
            'type'  =>      'eth',
            //  精度
            'accuracy_length'   =>  18,
        ]
    ]
//    --------------------------------------------------------------

];
