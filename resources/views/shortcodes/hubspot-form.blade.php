<!-- <div id="hubspotFormContainer"></div> -->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
@if($hsdata['hs_switch'])
<script>
	
  hbspt.forms.create({
	region: "<?php echo $hsdata['region']; ?>",
	portalId: "<?php echo $hsdata['portalId']; ?>",
	formId: "<?php echo $hsdata['formId']; ?>",
	//target: '#hubspotFormContainer',
	onFormSubmit: function ($form) {
		var formData = {
			email: $form.find('input[name="email"]').val(),
            firstname: $form.find('input[name="firstname"]').val(),
            lastname: $form.find('input[name="lastname"]').val(),
            message: $form.find('textarea[name="message"]').val(),
            _token: $('meta[name="csrf-token"]').attr('content')
        };
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: "POST",
			url: "/contact-email-send",
			data: formData,
			success: function(resultData) {}
		});
	},
	onFormSubmitted: function () {
	}
  });
</script>
@endif