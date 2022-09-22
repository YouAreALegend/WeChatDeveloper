<?php

// +----------------------------------------------------------------------
// | WeChatDeveloper
// +----------------------------------------------------------------------
// | 版权所有 2014~2022 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: https://thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/WeChatDeveloper
// +----------------------------------------------------------------------

namespace WeMini;

use WeChat\Contracts\BasicWeChat;
use WeChat\Exceptions\InvalidResponseException;
use WeChat\Exceptions\LocalCacheException;

/**
 * 小程序ORC服务
 * Class Ocr
 * @package WeMini
 */
class Ocr extends BasicWeChat
{
    /**
     * 本接口提供基于小程序的银行卡 OCR 识别
     * @param array $data
     * @return array
     * @throws InvalidResponseException
     * @throws LocalCacheException
     */
    public function bankcard($data)
    {
        $url = 'https://api.weixin.qq.com/cv/ocr/bankcard?access_token=ACCESS_TOCKEN';
        return $this->callPostApi($url, $data, true);
    }

    /**
     * 本接口提供基于小程序的营业执照 OCR 识别
     * @param array $data
     * @return array
     * @throws InvalidResponseException
     * @throws LocalCacheException
     */
    public function businessLicense($data)
    {
        $url = 'https://api.weixin.qq.com/cv/ocr/bizlicense?access_token=ACCESS_TOCKEN';
        return $this->callPostApi($url, $data, true);
    }

    /**
     * 本接口提供基于小程序的驾驶证 OCR 识别
     * @param array $data
     * @return array
     * @throws InvalidResponseException
     * @throws LocalCacheException
     */
    public function driverLicense($data)
    {
        $url = 'https://api.weixin.qq.com/cv/ocr/drivinglicense?access_token=ACCESS_TOCKEN';
        return $this->callPostApi($url, $data, true);
    }

    /**
     * 本接口提供基于小程序的身份证 OCR 识别
     * @param array $data
     * @return array
     * @throws InvalidResponseException
     * @throws LocalCacheException
     */
    public function idcard($data)
    {
        $url = 'https://api.weixin.qq.com/cv/ocr/idcard?access_token=ACCESS_TOCKEN';
        return $this->callPostApi($url, $data, true);
    }

    /**
     * 本接口提供基于小程序的通用印刷体 OCR 识别
     * @param array $data
     * @return array
     * @throws InvalidResponseException
     * @throws LocalCacheException
     */
    public function printedText($data)
    {
        $url = 'https://api.weixin.qq.com/cv/ocr/comm?access_token=ACCESS_TOCKEN';
        return $this->callPostApi($url, $data, true);
    }

    /**
     * 本接口提供基于小程序的行驶证 OCR 识别
     * @param array $data
     * @return array
     * @throws InvalidResponseException
     * @throws LocalCacheException
     */
    public function vehicleLicense($data)
    {
        $url = 'https://api.weixin.qq.com/cv/ocr/driving?access_token=ACCESS_TOCKEN';
        return $this->callPostApi($url, $data, true);
    }
}