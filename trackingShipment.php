<?php	
  $Account_Country_Code=   $_POST['AccountCountryCode'];
    $Account_Number= $_POST['_AccountNumber'];
    $Account_PIN_COde=$_POST['_AccountPINCode'];
    $Entity_Code=$_POST['_EntityCode'];
    $Signin_Email_Address=$_POST['_SigninEmailAddress'];
    $Password=$_POST['_Password'];
    $shipment_Number=$_POST['_shipmentnumber'];
	$soapClient = new SoapClient('Tracking.wsdl');

	echo '<pre>';
	// shows the methods coming from the service 
	print_r($soapClient->__getFunctions());
	
	/*
		parameters needed for the trackShipments method , client info, Transaction, and Shipments' Numbers.
		Note: Shipments array can be more than one shipment.
	*/
	$params = array(
		'ClientInfo'  			=> array(
									'AccountCountryCode'	=> $Account_Country_Code,
									'AccountEntity'		 	=> $Entity_Code,
									'AccountNumber'		 	=> $Account_Number,
									'AccountPin'		 	=> $Account_PIN_COde,
									'UserName'			 	=> $Signin_Email_Address,
									'Password'			 	=> $Password,
									'Version'			 	=> 'v1.0'
								),

		'Transaction' 			=> array(
									'Reference1'			=> '001' 
								),
		'Shipments'				=> array(
									$shipment_Number
								)
	);
	
	// calling the method and printing results
	try {
		$auth_call = $soapClient->TrackShipments($params);
        print_r ($auth_call);
	} catch (SoapFault $fault) {
		die('Error : ' . $fault->faultstring);
	}
?>