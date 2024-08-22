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
			formId: "'.$formId.'",
			onFormSubmit: function ($form) {
				var formData = {
					email: $form.find("input[name=\"email\"]").val(),
					firstname: $form.find("input[name=\"firstname\"]").val(),
					lastname: $form.find(\"input[name="lastname"]\").val(),
					message: $form.find("textarea[name=\"message\"]").val(),
					_token: $("meta[name=\"csrf-token\"]").attr("content")
				};
				$.ajaxSetup({
					headers: {
						"X-CSRF-TOKEN": $("meta[name=\csrf-token\"]").attr("content")
					}
				});
				$.ajax({
					type: "POST",
					url: "/contact-email-send",
					data: formData,
					success: function(resultData) { alert("Save Complete"); }
				});
			},
			onFormSubmitted: function ($form) {
			}
		  });
		</script>';
		
        $replace = [
            $hsfile
        ];

        return preg_replace($search, $replace, $content);
    }
}