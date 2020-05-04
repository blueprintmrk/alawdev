<?php
/* CALLING THIS FORM
In a wordpress page: [form id=3]
On a PHP file:  <?php echo do_shortcode( '[form id=3]' ); ?>
*/

/* CAPTCHA OVERRIDING
To override the captcha defaults, uncomment the line below and modify as necessary
*/

//$captchaIMG .= "?bg=443344&fg=ffffff&width=240&height=80";
$reCaptchaSiteKey = RECAPTCHA_SITE_KEY; //do not modify

$formHTML = <<<EOD
<form id="{$formID}" class="qcForm rcfCheck" action="$self" method="post">
	<input class="qcName" name="Name" type="text" value="Name*" required />
	<input class="qcEmail" name="Email_Address" type="text" value="Email*" required />
	<input class="qcNumber" name="Telephone" type="text" value="Phone*" required />
	<textarea name="Message">Please Write Your Message Here*</textarea>
	<span class="required">*All Contact Form Fields are Required</span>
	<div class="g-recaptcha recaptcha" data-sitekey="{$reCaptchaSiteKey}"></div>
	<input type="hidden" class="hidden" name="Form_Used" value="Quick Contact Form" />
	<input type="hidden" class="hidden" name="replyTo" value="Email_Address" />
	<input type="hidden" class="hidden" name="email" />
	<input type="hidden" class="hidden" name="ncFormSubmissionPH" value="$formID" />
	<input type="hidden" class="hidden" name="redirect" value="/thank-you/" />
	<input class="submit-button" id="submit_{$formID}" type="submit" value="Send Your Message" />
</form>
EOD;

?>
