<?php

session_start();

require_once 'membership.php';
$membership = new Membership();

if($_POST && !empty($_POST['email']) && !empty($_POST['password']))
{ $response = $membership->validate_User($_POST['email'], $_POST['password']);
}

?>

<html>
	<head>
		<title>
			rideColorado - Welcome travelers, to the signup for rideColorado - sign up today, drive or ride tomorrow
			</title>
        
        <meta name="description" content="log in to rideColorado, the best Colorado long distance ridesharing service.  Connecting riders with drivers since 2015. ride Together. rideColorado.">

        <meta name="keywords" content="rideColorado,ridesharing,drive,ride,Denver,DIA,Summit,Breckenridge,Abasin,Keystone,Vail,Beaver Creek,long distance,Colorado,log in, username, password">

			<link class="fav" rel="shortcut icon" href="favicon.ico" type="image/x-icon">

			<link rel="stylesheet" type="text/css" href="rCstyle.css">
					
		</head>
						
<!—- ______________________________________________________________________________ /-—>
	<Body>

		<ul class="navi"> 
            
            <li><a class="naviul" href="index.html"> <img class="naviul" id="Logo" src="rC34.png" alt="rideColoradoImagemark"></a>
                </li>
            
            <li><h1 class="naviul" id="header"> 
                rideColorado
			         </h1>
                </li>

            <li><a class="naviul" href="index.html">
				home
				    </a>
                </li>
		
            <li><a class="naviul" href="ride-plan.html">
				ride-plan
				    </a>
                </li>

            <li><a class="naviul" href="blog.html">
				blog
				    </a>
                </li>
			</ul>			

		<hr>
			
	<div id="login">
        <form method="post" action="">
            <h2> Login <small>this is not a data entry?</small></h2>
        
            <p>
                <label for="Email"> Email:</label>
                <input type="text" name="email"/>
                </p>
        
            <p>
                <label for="Password"> Password:</label>
                <input type="password" name="password"/>                
                </p>
        
            <p>
                <input type="submit" id="submit" value="Login" name="submit">
                </p>
            
              </form>
        
<?php if(isset($response)) echo "<h4>" . $response . "</h4>";
    ?>
        </div>
		
<!—- ______________________________________________________________________________ /-—>



<!—- ______________________________________________________________________________ /-—>

	<footer>

		<hr>
		
		<h6>
			. . . a community of travelers
			</h6>

		<div>
			<ul class="navi" id="ft"> 

					<li><a class="naviul" href="privacy.html">
						Privacy Policy
						</a>
                        </li>	
		
					<li><a class="naviul" href="terms.html">
					 	Terms & Conditions
						</a>
                        </li>
            </ul>
			</div>
		
		<p class="end">
			Ride Colorado, LLC 
			</p>

		</footer>
       
	</html>