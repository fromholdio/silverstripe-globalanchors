<?php

namespace Fromholdio\GlobalAnchors;

use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Extensible;
use SilverStripe\Core\Injector\Injectable;

class GlobalAnchors
{
    use Extensible;
    use Injectable;
    use Configurable;

    private static $anchors = [];

    public static function add_to_class($class, $extensionClass, $args = null)
    {
        // NOP
    }

    public static function get_anchors() : array
    {
        $anchors = self::config()->get('anchors');
        return empty($anchors) ? [] : $anchors;
    }

    public static function get_anchor_title($key) : ?string
    {
        $anchors = self::get_anchors();
        return $anchors[$key] ?? null;
    }
}
