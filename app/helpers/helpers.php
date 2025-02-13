<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    function setting() {
       $setting=Setting::find(1);
       return $setting;
    }
}