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
if(!function_exists('createCaptcha')){

    function createCaptcha(){
        require_once(__DIR__.'/Libs/gt-php-sdk/web/StartCaptchaServlet.php');
    }
}