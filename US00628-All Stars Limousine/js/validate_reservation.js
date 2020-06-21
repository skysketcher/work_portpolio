function refresh_captcha_image()
{
	var image = new Image();
	image.src = 'captcha/index.php?rand='+Math.random();

	document.getElementById('captcha_image').src = image.src;
	return false;
}
refresh_captcha_image();
document.getElementById('captcha_refresh').onclick = refresh_captcha_image;
var v = new Validator('reservation_form');
//v.addValidation('security_code', 'required', 'Please type the given security code.');
//v.addValidation('security_code', 'minlen=5', 'Security code is of 5 characters.');
//v.addValidation('security_code', 'maxlen=5', 'Security code is of 5 characters.');
//v.addValidation('name', 'required', 'Please enter your name.');
//v.addValidation('address', 'required', 'Please enter your name.');
//v.addValidation('email', 'required', 'Please enter your email address.');
//v.addValidation('email', 'email', 'Invalid email address.');
//v.addValidation('phone', 'required', 'Please enter your phone.');
//v.addValidation('destination', 'required', 'Please enter your destination.');
//v.addValidation('pickup', 'required', 'Please enter your pickup information.');
//v.addValidation('message', 'minlen=20', 'Message should be long enough to be sent as email text.');
