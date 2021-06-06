<?php
class ConfigUrl
{

    public static function protocol()
    {
        /**
         * Check if it is different from http
         */
        if (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) {
            $protocol = 'http://'; # assign the value http
        } else {
            $protocol = 'https://'; # assign the value https
        }
        /**
         * Return the protocol in string format
         * @var string
         */
        return $protocol;
    }

    public static function scriptName()
    {
        /**
         * $scr
         * Set the SCRIPT_NAME value to a $scr variable and 
         * use the dirname() function to remove any filename .html, .php, etc...
         * @var string
         */
        $scr = dirname($_SERVER['SCRIPT_NAME']);
        /**
         * count the slashs of the main url and
         * get the level of folders where the directory is hosted
         * if it exists
         */
        if (empty($scr) || (substr_count($scr, '/') > 0) && strlen($scr) > 1) {
            $scriptName = $scr . '/'; # assigns the value of the directory with a "/" at the end

        } else {
            $scriptName = '/'; # assigns a slash at the end
        }
        /**
         * Return the scriptName in string format
         * @var string
         */
        return $scriptName;
    }
}
