<?php
use App\Models\Enquiry;
use App\Models\Information;
use App\Models\NewsAndEvents;
use App\Models\Notice;
use App\Models\Semester;
use App\Models\Setting;
use App\Models\Slider;
use App\Vacancy;
use Carbon\Carbon;

if (!function_exists('get_school_info')) {
function get_school_info($name)
{
$settings = Setting::select('value')->where('name', $name)->first();
if (!empty($settings)) {
return $settings->value;
} else {
return "";
}
}
}

if (!function_exists('get_vacancy_info')) {
function get_vacancy_info($name)
{
$settings = Vacancy::select('value')->where('name', $name)->first();
if (!empty($settings)) {
return $settings->value;
} else {
return "";
}
}
}


if (!function_exists('get_info')) {
    function get_info($name)
    {
        $informations = Information::select('value')->where('name', $name)->first();
        if (!empty($informations)) {
            return $informations->value;
        } else {
            return "";
        }
    }
}


if (!function_exists('get_slider_info')) {
    function get_slider_info($name)
    {
        $sliders = Slider::select('value')->where('name', $name)->first();
        if (!empty($sliders)) {
            return $sliders->value;
        } else {
            return "";
        }
    }
}

if (!function_exists('change_date_format')) {
    function change_date_format($date)
    {
        $updated_date=Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
        if (!empty($updated_date)) {
            return $updated_date;
        } else {
            return "";
        }
    }
}

if (!function_exists('get_courses')) {
    function get_courses()
    {
        $programs = Semester::all();
        if (!empty($programs)) {
            return $programs;
        } else {
            return "";
        }
    }
}

if (!function_exists('get_notices')) {
    function get_notices()
    {
        $programs = Notice::all();
        if (!empty($programs)) {
            return $programs;
        } else {
            return "";
        }
    }
}
if (!function_exists('get_news_and_events')) {
    function get_news_and_events()
    {
        $programs = NewsAndEvents::all();
        if (!empty($programs)) {
            return $programs;
        } else {
            return "";
        }
    }
}
if (!function_exists('get_enquiries')) {
    function get_enquiries()
    {
        $programs = Enquiry::all();
        if (!empty($programs)) {
            return $programs;
        } else {
            return "";
        }
    }
}

