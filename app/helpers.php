<?php
if(!function_exists('app_name')){
    /**
     * 获取应用名
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}