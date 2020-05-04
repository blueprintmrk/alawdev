<?php
/* Creating A CUSTOM FORM
Duplicate this file, but name the copy something like "2.php".  Open the copy and modify the html as needed.
*/

/* CALLING THE CUSTOM FORM
In a wordpress page, use this shortcode (for example):  [form id=2]
/*

/* INPUT NAMING CONVENTION
Input names should be sentences that will appear in email to client, but use underscores instead of spaces:  <input name="Best_Time_To_Call" type="text">

Do not use "email" as an input name.  We already use a field with that name and it's hidden to humans.  On form submission, we check to make sure the field is blank.  If it isn't, then we know a bot made the submission.
*/

/* CAPTCHA OVERRIDING
To override the captcha defaults, uncomment the line below and modify as necessary*/

//$captchaIMG .= "?bg=443344&fg=ffffff&width=240&height=80";


/* 	PART I
	The form automatically receives an id according to the "id" used in the shortcode calling this form.  You may have to modify the class if the stylesheet is applying unwanted styles.
*/

$formHTML = <<<EOD
<form id="$formID" class="nc_form" action="$self" method="post">
EOD;



/*	PART II
	Add or remove HTML.  It can be something completely different.
*/

$formHTML .= <<<EOD
	<div class="form-part">
		<label>Name:</label>
		<input name="Name" type="text" />
	</div>
	<div class="form-part">
		<label>Email:</label>
		<input name="Email_Address" type="text" />
	</div>
	<div class="form-part">
		<label>Telephone:</label>
		<input name="Telephone" type="text" />
	</div>
	<div class="form-part">
		<label class="form-label">How would you like to be contacted?</label>
		<select class="form-pct" name="How_would_you_like_to_be_contacted?[]">
			<option value="" selected="">Please select one:</option>
			<option value="Telephone">Telephone</option>
			<option value="Email">Email</option>
		</select>
	</div>
	<div class="form-part">
		<label>Reason you would like to be contacted:</label>
		<textarea name="Reason_you_would_like_to_be_contacted" rows="5"></textarea>
	</div>
	<div class="form-part captcha-wrapper">
		<div class="captcha-container">
			<img src="{$captchaIMG}" class="captcha-image" onclick="this.src = '{$captchaIMG}?'+Math.random()" alt="Captcha Image" title="Captcha Image" />
		</div>
		<input type="text" name="nc_captcha" autocorrect="off" autocomplete="off" autocapitalize="off" value="Enter Security Key" class="captcha-input" id="captcha_input_{$formID}">
	</div>
EOD;

/*	Part III
	Set the value for the line below to the name of the input that will store the email address.  Case sensitive.  If the email address looks valid enough, it will be used as the reply-to email address as well as the post title in the database.
*/
$formHTML .= <<<EOD
	<input type="hidden" class="hidden" name="replyTo" value="Email_Address" />
EOD;

/* 	PART IV
	You should not have to modify anything below this line.
*/

$formHTML .= <<<EOD
	<input type="hidden" class="hidden" name="et" value="Telephone" />
	<input type="hidden" class="hidden" name="redirect" value="/thank-you/" />
	<input type="hidden" class="hidden" name="Form_Used" value="Basic Form" />
	<input type="hidden" class="hidden" name="email" />
	<input type="hidden" class="hidden" name="ncFormSubmission" value="$formID" />
	<input class="submit-button" id="submit_$formID" type="submit" value="Submit Form" />
</form>
EOD;

?>