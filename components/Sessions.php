<?php
class Sessions {

    private static $error = [];
    private static $params = [];
    private static $captcha = [];

    /**
     * @return array
     */
    public static function setSession(){
        self::$error = &$_SESSION;
        self::$params = &$_SESSION;
        self::$captcha = &$_SESSION;
    }

    public static function getErrors()
    {
        if(isset(self::$error['messages'])){

        return self::$error['messages'];

        }
        return [];
    }

    /**
     * @param array $error
     */
    public static function setError($error)
    {
        self::$error['messages']['errors'][] = $error;
    }

    public static function setMessage($error)
    {
        self::$error['messages']['message'][] = $error;
    }

    public static function unsetErrors()
    {
        unset(self::$error['messages']['errors']);
        unset(self::$error['messages']['message']);
    }

    /**
     * @return array
     */
    public static function getParams()
    {

        if(isset(self::$params['params'])){

            return self::$params['params'];

        }
        return [];
    }

    /**
     * @param array $params
     */
    public static function setParams($params)
    {
        self::$params['params'][] = $params;
    }

    /**
     * @return array
     */
    public static function getCaptcha()
    {
        return self::$captcha;
    }

    /**
     * @param array $captcha
     */
    public static function setCaptcha($captcha)
    {
        self::$captcha = $captcha;
    }


}