<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Modules\Country\Entities\Country;
use Modules\Media\Entities\Media;
use Modules\Service\Entities\Model as Service;
use Modules\Project\Entities\Model as Project;
use Modules\Setting\Entities\Model as Setting;

function lang($lang = null)
{
    if (isset($lang)) {
        return app()->islocale($lang);
    } else {
        return app()->getlocale();
    }
}

function RemoveFirstSlash($String)
{
    if (mb_substr($String, 0, 1) == '/') {
        return substr($String, 1);
    }else{
        return $String;
    }
}

function amount_format($amount)
{
    return number_format($amount, 3, '.', '');
}

function Admin($lang = null)
{
    if (! Config::get('Admin')) {
        Config::set('Admin', auth()->user());
    }

    return Config::get('Admin');
}

function Countries()
{
    if (! Config::get('Countries')) {
        Config::set('Countries', Country::active()->get());
    }

    return Config::get('Countries');
}

function Settings()
{
    if (! Config::get('Settings')) {
        Config::set('Settings', Setting::Active()->get());
    }

    return Config::get('Settings');
}
function Media($id = null,$gallery_id = null)
{
    return Media::Active()->get();
}
function setting($key)
{
    return Settings()->where('key', $key)->first()->value ?? null;
}

function IsVideo($url)
{
    if(str_contains($url, 'mp4') || str_contains($url, 'youtube')) {
        return true;
    }else {
        return false;
    }
}

function IsImage($string)
{
    $string = strtolower($string);
    foreach(['jpeg','png','gif','jpg','webp'] as $item){
        if(str_contains($string, $item)){
            return true;
        }
    }
    return false;
}

function DT_Lang()
{
    if (lang('ar')) {
        return '//cdn.datatables.net/plug-ins/1.10.16/i18n/Arabic.json';
    } else {
        return '//cdn.datatables.net/plug-ins/1.10.16/i18n/English.json';
    }
}

function image_path($file)
{
    if ($file && file_exists(public_path($file))) {
        return $file;
    }

    return setting('logo');
}

function delete_files($path)
{
    $dirs = File::directories(public_path($path));
    foreach ($dirs as $dir) {
        $arr = [];
        $max = '';
        $files = File::files($dir);
        if (count($files) > 1) {
            foreach ($files as $string) {
                if (str_contains($string, '.png') || str_contains($string, '.jpg') || str_contains($string, '.jpeg') || str_contains($string, '.gif')) {
                    $arr[] = $string->getRelativePathname();
                }
            }
            $max = max($arr);
            foreach ($files as $string) {
                if (! str_contains($string, $max)) {
                    unlink($string);
                }
            }
        }
    }
    dd('Done');
}

function MergeArrays(array $input)
{
    $new_arr = [];
    $keys = array_keys($input);
    foreach ($input[$keys[count($keys) - 1]] as $key => $value) {
        foreach ($keys as $array_key => $value) {
            $new_arr[$key][$keys[$array_key]] = is_array($input[$keys[$array_key]]) ? $input[$keys[$array_key]][$key] : $input[$keys[$array_key]];
        }
    }

    return $new_arr;
}
