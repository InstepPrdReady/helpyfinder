<?php

namespace App\Helpers;
use App\Models\Language;
use App\Models\Setting;

class ShortcodeHelper
{
    public static function renderShortcodes($content)
    {
		if (session()->has('lang')) {
				$currentLang = Language::where('code', session()->get('lang'))->first();
			} else {
				$currentLang = Language::where('is_default', 1)->first();
			}
			$data['currentLang'] = $currentLang;
			$lang_id = $currentLang->id;
			$setting_data = Setting::find($lang_id);
	
			$hs_switch = $setting_data->hs_switch;
			$region = $setting_data->hs_region;
			$portalId = $setting_data->hs_portal_id;
			$formId = $setting_data->hs_form_id;
			
        //shortcode processing
        $search = [
            '/\[hubspotForm\]/'
        ];
		
		$hsfile = '
		<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
		<script>
		  hbspt.forms.create({
			region: "'.$region.'",
			portalId: "'.$portalId.'",
			formId: "'.$formId.'"
		  });
		</script>';
		
        $replace = [
            $hsfile
        ];

        return preg_replace($search, $replace, $content);
    }
}