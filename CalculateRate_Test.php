<?php
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
    
	$params = array(
		'ClientInfo'  			=> array(
									'AccountCountryCode'	=> $Account_Country_Code,
									'AccountEntity'		=> $Entity_Code,
									'AccountNumber'		=> $Account_Number,
									'AccountPin'		=> $Account_PIN_COde,
									'UserName'		=> $Signin_Email_Address,
									'Password'		=> $Password,
									'Version'		=> 'v1.0'
								),
								
		'Transaction' 			=> array(
									'Reference1'		=> '001' 
								),
								
		'OriginAddress' 	 	=> array(
									
									'City'			=> $Origin_City,
									'PostCode'		=> '411001',
									'CountryCode'		=> $Origin_Country_Code,
								),
								
		'DestinationAddress' 	=> array(
									
									'City'			=> $Destination_City,
									'PostCode'		=> '415002',
									'CountryCode'		=> $Destination_Country_Code,
								),
		'ShipmentDetails'		=> array(
									'PaymentType'		 => $Payment_Type,
									'ProductGroup'		 => $Product_Group,
									'ProductType'		 => $Product_Type,
									'Services'		 => $Service,
									'ActualWeight' 		 => array('Value' =>$Weight_In_KG, 'Unit' => 'KG'),
									'ChargeableWeight' 	 => Null,
									'NumberOfPieces'	 => $Number_Of_Pieces,
								)
	);
	
	$soapClient = new SoapClient('https://ws.dev.aramex.net/ShippingAPI.V2/RateCalculator/Service_1_0.svc?wsdl', array('trace' => 1));
	$results = $soapClient->CalculateRate($params);	
	
	echo '<pre>';
	print_r($results);
	die();
?>

