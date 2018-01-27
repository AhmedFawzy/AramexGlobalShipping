<?php	


    $Account_Country_Code=   $_POST['AccountCountryCode'];
    $Account_Number= $_POST['_AccountNumber'];
    $Account_PIN_COde=$_POST['_AccountPINCode'];
    $Entity_Code=$_POST['_EntityCode'];
    $Signin_Email_Address=$_POST['_SigninEmailAddress'];
    $Password=$_POST['_Password'];
	$soapClient = new SoapClient('WSDLtest.wsdl');
		
	
	$params = array(
		'ClientInfo'  			=> array(
								'AccountCountryCode'		=> $Account_Country_Code,
									'AccountEntity'		 	=> $Entity_Code,
									'AccountNumber'		 	=> $Account_Number,
									'AccountPin'		 	=> $Account_PIN_COde,
									'UserName'			=>$Signin_Email_Address,
									'Password'		 	=> $Password,
									'Version'		 	=> 'v1.0',
									'Source' 			=> NULL				
								),

		'Transaction' 			=> array(
									'Reference1'			=> '001',
									'Reference2'			=> '002',
									'Reference3'			=> '003',
									'Reference4'			=> '004',
									'Reference5'			=> '005'
							 
								),
		
		);
	
	// calling the method and printing results
	try {
		$auth_call = $soapClient->FetchCountries($params);

		echo '<pre>';
		print_r($auth_call);
		die();

	} catch (SoapFault $fault) {
		die('Error : ' . $fault->faultstring);
	}
?>