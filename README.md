Twilio-Plugin-CakePHP-2.0
=========================

Twilio Plugin for CakePHP 2.0+

## Add your API SID and Auth Token

	In /Plugins/Twilio-Plugin-CakePHP-2.0/Config/Twilio.php
	
	Update this with your API Info from your Twilio Account
	
	$config = array(
  		'Twilio' => array(
  			'AccountSid' => 'YOUR_API_SID',
  			'$AuthToken' => 'YOUR_API_AUTH_TOKEN',
  		)
  	);

## Include the Component

	public $components = array('Twilio.Twilio');

## Call the Method

	$this->Twilio->sendSingleSms($to, $message);


