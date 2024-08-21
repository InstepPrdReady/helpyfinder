<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
@if($hsdata['hs_switch'])
<script>
  hbspt.forms.create({
	region: "<?php echo $hsdata['region']; ?>",
	portalId: "<?php echo $hsdata['portalId']; ?>",
	formId: "<?php echo $hsdata['formId']; ?>",
	onFormSubmit: function ($form) {
	},
	onFormReady: function ($form) {
		setUtmInHubSpotInput();
	},
	onFormSubmitted: function () {
	}
  });
</script>
@endif