<?php

App::import('Vendor', 'Twilio.twilio/Services/Twilio');

class TwilioComponent extends Component{
	
	protected $_twilio;
	
	function __construct()
		{	
			//load config
			Configure::load('Twilio.Twilio');

			//get settings from config
			$AccountSid = Configure::read('Twilio.AccountSid');
			$AuthToken = Configure::read('Twilio.AuthToken');

			//initialize the client
			//$this->_twilio = new TwilioRestClient($this->account_sid, $this->auth_token);
			$this->_twilio = new Services_Twilio($AccountSid, $AuthToken);

		}
		
	
	public function sendSingleSmsMessage($from, $to, $message) {
		
		$sms = $this->_twilio->account->sms_messages->create(
		    $from, // From this number
		    $to, // To this number
		    $message
		);
		 
		// Display a confirmation message on the screen
		echo "Sent message {$sms->sid}";
				
	}

}