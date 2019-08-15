<?php
/*
* CacheManager
* ---
* Manage KURIRQ local cache (seperated from PrestaShop cache), for delivery fee, dictrict etc.
* (c) Prestanesia
 */
class CacheManager
{
    public static function get($key)
    {
        $date = new DateTime();
        $expiration = $date->getTimestamp() + strtotime(Configuration::get('KURIRQ_CACHE_EXPIRATION'));
        $cache = Db::getInstance()->getRow('SELECT value FROM '._DB_PREFIX_.'kurirq_cache WHERE `key` =\''.$key.'\'');
        if (!is_null($cache)) {
            if (is_array($cache)) {
                $cache = (object) $cache;
            }

            if ($date->getTimestamp() >= $expiration) {
                self::forget($key);
                return;
            }

            return self::decrypt($cache->value);
        }
    }

    public static function set($key, $value)
    {
        $date = new DateTime();
        $expiration = $date->getTimestamp() + strtotime(Configuration::get('KURIRQ_CACHE_EXPIRATION'));
        $data = array(
                    'key' => $key,
                    'value' => self::encrypt($value),
                    'expiration' => $expiration,
                );
        Db::getInstance()->insert('kurirq_cache', $data);
        return true;
    }

    public static function clear()
    {
        Db::getInstance()->Execute('DELETE FROM '._DB_PREFIX_.'kurirq_cache');
        return true;
    }
    
    public static function isStored($key)
    {
        $result = false;
        $value = Db::getInstance()->getRow('SELECT value FROM '._DB_PREFIX_.'kurirq_cache WHERE `key` =\''.$key.'\'');
        if ($value) {
            $result = true;
        }

        return $result;
    }

    public static function forget($key)
    {
        Db::getInstance()->Execute('DELETE FROM '._DB_PREFIX_.'kurirq_cache WHERE `key`=\''.$key.'\'');
        return true;
    }

    private static function encrypt($value)
    {
        return base64_encode(serialize($value));
    }

    private static function decrypt($value)
    {
        return unserialize(base64_decode($value));
    }
}
