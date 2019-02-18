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

    public static function get_anchors()
    {
        $anchors = self::config()->get('anchors');
        if (!$anchors || count($anchors) < 1) {
            return null;
        }
        return $anchors;
    }

    public static function get_anchor_title($key)
    {
        $anchors = self::get_anchors();
        if (!$anchors) {
            return null;
        }

        if (!isset($anchors[$key])) {
            return null;
        }

        return $anchors[$key];
    }
}
