<?php
/**
 * Ensure singleton instance for successors.
 */

namespace KenticoCloud\Delivery\Helpers;

/**
 * Class Singleton.
 */
abstract class Singleton
{
    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }

    /**
     * Get Singleton instance.
     *
     * @return mixed
     */
    final public static function getInstance()
    {
        static $aoInstance = array();

        $calledClassName = get_called_class();

        if (!isset($aoInstance[$calledClassName])) {
            $aoInstance[$calledClassName] = new $calledClassName();
        }

        return $aoInstance[$calledClassName];
    }

    /**
     * Disable cloning (there is no reason to clone).
     */
    private function __clone()
    {
    }
}
