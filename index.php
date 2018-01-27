<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<!-- your webpage info goes here -->

    <title>My First Website</title>
	
	<meta name="author" content="Hosam Odeh" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			
            <h3><a href="/" id="logoLink2"><?php echo 'Server Name:' .gethostname()?></a></h3>
		</div>
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="TestShippingWSDL.zip" style="background: #3EACBA">Download Test Shipping WSDL </a></li>
			<li style=""><a href="LiveShippingWSDL.zip">Download Live Shipping WSDL </a></li>
                <li><a href="FetchingWSDL.zip" style="background: #3EACBA">Download Fetching WSDL </a></li>
                   <li><a href="TrackingShipmentWSDL.zip">Download Tracking WSDL </a></li>
			</ul>	
		</div>
		<div id="content">
		
			<p>
				      <h2>Live Webservices</h2>
    
           <a href="PageCalculateRate.php"><?php echo '1-Calculate Rate'?></a>
        </br>
          </br>
          <a href="PageCreatingShipment.php"><?php echo '2-Creating Shipment'?></a>
            </br>
          </br>
          <a href="Page_FetchingCities.php"><?php echo '3-Fetching Cities'?></a>
          </br>
          </br>
          <a href="PageFetchingCountries.php"><?php echo '4-Fetching Countries'?></a>
           

            </br>
            </br>
           <a href="PageFetchingCountryViaCountryCod.php"><?php echo '5-Fetching Countries Via Country Code'?></a>
                      </br>
          </br>

                  <a href="PageTrackingShipment.php"><?php echo '6-Tracking Shipment'?></a>
        </br>
        </br>
       <h2>Test Webservices</h2>

        <a href="PageCalculaterate_Test.php"><?php echo "1-Calculate Rate"?></a>
                </br>
                </br>
                <a href="PageCreatingShipment_Test.php"><?php echo "2-Create Shipment"?></a>
			</p>
		
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[Hosam Odeh]</a>
			</p>
		</div>
	</div>
</body>
</html>