<?php
/*
 * @Description  : 设置
 * @Author       : https://github.com/skyselang
 * @Date         : 2020-08-04
 * @LastEditTime : 2020-08-04
 */

namespace app\admin\service;

use think\facade\Cache;

class AdminSettingService
{
    /**
     * 清除缓存
     *
     * @return void
     */
    public static function cacheclear()
    {
        $res = Cache::clear();

        return $res;
    }
}
