<?php 
namespace DesignPattern\Creational\Singleton;

final class Config
{
    private static $instance = null;
    private static array $settings = [];

    private function __construct() {}

    public static function getInstance()
    {
        if(!self::$instance) self::$instance = new Config();
        return self::$instance;
    }

    public static function set(mixed $key, mixed $value): void
    {
        self::$settings[$key] = $value;
    }

    public static function get(mixed $key): mixed
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    private function __clone()
    {
        
    }

    public function __wakeup()
    {
        
    }
}