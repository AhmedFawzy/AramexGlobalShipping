
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<!-- your webpage info goes here -->

    <title>PHP AramexGlobal</title>
	
	<meta name="author" content="your name" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
    	<link rel="stylesheet" href="buttons.css" type="text/css" />
 
	
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
					<li><a href="FetchingCountryViaCountryCode.zip" style="background: #3EACBA">Download Source Code</a></li>
					<li><a href="mailto:Hosam.odeh@aramex.com?subject=Error:Fetching Country Via country code WebService&CC=All_JED_IT@aramex.com&body=hello Dear , i am facing an aproblem in the above subjected issue , can i have your you help here ?&BCC=Hisam@aramex.com">Contact</a></li>
			</ul>	
		</div>
		<div id="content">
        <form action="FetchingCountrisViaCountryCode.php" method="POST">
        <table border="1" title="General Information" style="margin-left: auto;margin-right: auto">
            <tr><td colspan="2" style="text-align: center;
                  text-align: center;text-shadow:-1px -1px 0 #2C7982;
	background: #3EACBA;
	border:1px solid #379AA4;
	background-image:-webkit-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-moz-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-ms-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-o-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:linear-gradient(top, #48C6D4, #3EACBA);
    color: #fff"    >Account Information</td></tr>
        <tr>
        
            <td >  Account Number: <input type="text" name="_AccountNumber" style="float: right" value="<?php echo $name;?>"></td>
            <td>  Account PIN Code: <input type="text" name="_AccountPINCode" style="float:right" value="<?php echo $name;?>"></td>

        </tr>

            <tr>
            

                <td>  Country Code: <input type="text" name="AccountCountryCode" style="float: right" value="<?php echo $name;?>">
                </td>
                <td>  Entity CODE: <input type="text" name="_EntityCode" style="float: right"  value="<?php echo $name;?>"></td>
            </tr>

            <tr>
            
                <td> Sign-in Email address: <input type="text" name="_SigninEmailAddress" style="float: right"  value="<?php echo $name;?>"></td>
                <td>  Password: <input type="password" name="_Password" style="float: right"  value="<?php echo $name;?>"></td>
            </tr>

                <tr><td colspan="2" style="text-align: center;
                  text-align: center;text-shadow:-1px -1px 0 #2C7982;
	background: #3EACBA;
	border:1px solid #379AA4;
	background-image:-webkit-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-moz-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-ms-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-o-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:linear-gradient(top, #48C6D4, #3EACBA);
    color: #fff"    >Country Information</td>
                </tr>
                 <tr>
            
                <td> Country Code: <input type="text" name="_fetchingCountryCode" style="float: right"  value="<?php echo $name;?>"></td>
                      
        
            </tr>
        
        </table>
   
        </br>
        </br>
        <input type="submit" value="Find Country" class="push_button blue" style="margin-left: auto;margin-right: auto">
            </form>
    

            
       
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
