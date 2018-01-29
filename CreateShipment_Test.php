<?php 
echo print_r($_POST); 
 $Account_Country_Code=   $_POST['AccountCountryCode'];
 $Account_Number= $_POST['_AccountNumber'];
 $Account_PIN_COde=$_POST['_AccountPINCode'];
 $Entity_Code=$_POST['_EntityCode'];
$Signin_Email_Address=$_POST['_SigninEmailAddress'];
$Password=$_POST['_Password'];
$Destination_Country_Code=$_POST['_DestinationCountryCode'];
$Destination_City=$_POST['_DestinationCity'];
$Origin_Country_Code=$_POST['_OriginCountryCode'];
$Origin_City=$_POST['_OriginCity'];

$Payment_Type=$_POST['_PaymentType'];
$Product_Group=$_POST['_ProductGroup'];
$Number_Of_Pieces=$_POST['_NumberOfPieces'];
$Weight_In_KG=$_POST['_WeightInKG'];
$Product_Type=$_POST['_ProductType'];
$Service=$_POST['_Service'];

	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	$soapClient = new SoapClient('shipping_test.wsdl');
	echo '<pre>';
	print_r($soapClient->__getFunctions());

	$params = array(
			'Shipments' => array(
				'Shipment' => array(
						'Shipper'	=> array(
										'Reference1' 	=> 'Ref 111111',
										'Reference2' 	=> 'Ref 222222',
										'AccountNumber' => $Account_Number,
										'PartyAddress'	=> array(
											'Line1'					=> 'Mecca St',
											'Line2' 				=> '',
											'Line3' 				=> '',
											'City'					=> $Origin_City,
											'StateOrProvinceCode'	=> '',
											'PostCode'				=> '',
											'CountryCode'			=> $Origin_Country_Code
										),
										'Contact'		=> array(
											'Department'			=> '',
											'PersonName'			=> 'Hosam',
											'Title'					=> '',
											'CompanyName'			=> 'Aramex',
											'PhoneNumber1'			=> '5555555',
											'PhoneNumber1Ext'		=> '125',
											'PhoneNumber2'			=> '',
											'PhoneNumber2Ext'		=> '',
											'FaxNumber'				=> '',
											'CellPhone'				=> '+966553244599',
											'EmailAddress'			=> 'hosamodeh@aramex.com',
											'Type'					=> ''
										),
						),
												
						'Consignee'	=> array(
										'Reference1'	=> 'Ref 333333',
										'Reference2'	=> 'Ref 444444',
										'AccountNumber' => '',
										'PartyAddress'	=> array(
											'Line1'					=> '15 ABC St',
											'Line2'					=> '',
											'Line3'					=> '',
											'City'					=> $Destination_City,
											'StateOrProvinceCode'	=> '',
											'PostCode'				=> '',
											'CountryCode'			=> $Destination_Country_Code
										),
										
										'Contact'		=> array(
											'Department'			=> '',
											'PersonName'			=> 'Mazen',
											'Title'					=> '',
											'CompanyName'			=> 'Aramex',
											'PhoneNumber1'			=> '6666666',
											'PhoneNumber1Ext'		=> '155',
											'PhoneNumber2'			=> '',
											'PhoneNumber2Ext'		=> '',
											'FaxNumber'				=> '',
											'CellPhone'				=> '+966553244599',
											'EmailAddress'			=> 'mazen@aramex.com',
											'Type'					=> ''
										),
						),
						
						'ThirdParty' => array(
										'Reference1' 	=> '',
										'Reference2' 	=> '',
										'AccountNumber' => '',
										'PartyAddress'	=> array(
											'Line1'					=> '',
											'Line2'					=> '',
											'Line3'					=> '',
											'City'					=> '',
											'StateOrProvinceCode'	=> '',
											'PostCode'				=> '',
											'CountryCode'			=> ''
										),
										'Contact'		=> array(
											'Department'			=> 'IT',
											'PersonName'			=> 'Hosam',
											'Title'					=> 'IT Leader',
											'CompanyName'			=> 'aramex',
											'PhoneNumber1'			=> '',
											'PhoneNumber1Ext'		=> '',
											'PhoneNumber2'			=> '',
											'PhoneNumber2Ext'		=> '',
											'FaxNumber'				=> '',
											'CellPhone'				=> '',
											'EmailAddress'			=> 'hosamodeh@aramex.com',
											'Type'					=> ''							
										),
						),
						
						'Reference1' 				=> 'Shpt 0001',
						'Reference2' 				=> '',
						'Reference3' 				=> '',
						'ForeignHAWB'				=> '',
						'TransportType'				=>'',
						'ShippingDateTime' 			=> time(),
						'DueDate'					=> time(),
						'PickupLocation'			=> 'Reception',
						'PickupGUID'				=> '',
						'Comments'					=> 'Shpt 0001',
						'AccountingInstrcutions' 	=> '',
						'OperationsInstructions'	=> '',
						
						'Details' => array(
										'Dimensions' => array(
											'Length'				=> 10,
											'Width'					=> 10,
											'Height'				=> 10,
											'Unit'					=> 'cm',
											
										),
										
										'ActualWeight' => array(
											'Value'					=> 0.5,
											'Unit'					=> 'Kg'
										),
										
										'ProductGroup' 			=> $Product_Group,
										'ProductType'			=> $Product_Type,
										'PaymentType'			=> $Payment_Type,
										'PaymentOptions' 		=> '',
										'Services'				=> $Service,
										'NumberOfPieces'		=> 1,
										'DescriptionOfGoods' 	=>'any thing that you want write it here',
										'GoodsOriginCountry' 	=> 'SA',
										
										'CashOnDeliveryAmount' 	=> array(
											'Value'					=>100,
											'CurrencyCode'			=> 'SAR'
										),
										
										'InsuranceAmount'		=> array(
											'Value'					=> 100,
											'CurrencyCode'			=> 'SAR'
										),
										
										'CollectAmount'			=> array(
											'Value'					=> 0,
											'CurrencyCode'			=> 'SAR'
										),
										
										'CashAdditionalAmount'	=> array(
											'Value'					=> 0,
											'CurrencyCode'			=> 'SAR'							
										),
										
										'CashAdditionalAmountDescription' => '',
										
										'CustomsValueAmount' => array(
											'Value'					=> 0,
											'CurrencyCode'			=> ''								
										),
										
										'Items' 				=> array(
											
										)
						),
				),
		),
		
			'ClientInfo'  			=> array(
										'AccountCountryCode'	=> $Account_Country_Code,
										'AccountEntity'		 	=> $Entity_Code,
										'AccountNumber'		 	=> $Account_Number,
										'AccountPin'		 	=> $Account_PIN_COde,
										'UserName'			 	=> $Signin_Email_Address,
										'Password'			 	=> $Password,
										'Version'			 	=> '1.0'
									),

			'Transaction' 			=> array(
										'Reference1'			=> '001',
										'Reference2'			=> '', 
										'Reference3'			=> '', 
										'Reference4'			=> '', 
										'Reference5'			=> '',									
									),
			'LabelInfo'				=> array(
										'ReportID' 				=> 9201,
										'ReportType'			=> 'URL',
			),
	);
	
	$params['Shipments']['Shipment']['Details']['Items'][] = array(
		'PackageType' 	=> 'Box',
		'Quantity'		=> 1,
		'Weight'		=> array(
				'Value'		=> 0.5,
				'Unit'		=> 'Kg',		
		),
		'Comments'		=> 'Docs',
		'Reference'		=> ''
	);
	
	print_r($params);
	
	try {
		$auth_call = $soapClient->CreateShipments($params);
		echo '<pre>';
		print_r($auth_call);
		die();
	} catch (SoapFault $fault) {
		die('Error : ' . $fault->faultstring);
	}
?>
