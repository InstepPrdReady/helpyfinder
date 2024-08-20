<?php
namespace App\Services;
use App\Models\Language;
use App\Models\Setting;

class ShortcodeService
{
    protected $shortcodes = [];

    public function __construct()
    {
		//@shortcode('hubspotForm') use this shortcode in blade files and use [hubspotForm] in WYSIWYG editors
        $this->shortcodes = [
            'hubspotForm' => function () {
                
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
				
				$hsdata =[ 'region'=>$region, 'portalId'=>$portalId, 'formId'=>$formId, 'hs_switch'=>$hs_switch ];
                return view('shortcodes.hubspot-form', compact('hsdata'))->render();
            },
            // Add more shortcodes here
        ];
    }

    public function render($shortcode)
    {
        if (isset($this->shortcodes[$shortcode])) {
            return call_user_func($this->shortcodes[$shortcode]);
        }
        return '';
    }
}
