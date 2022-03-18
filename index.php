<?php
include_once('conn.php');
$con = $GLOBALS['connection'];
if(isset($_POST['makeawish'])){
    $uid = generateRandomString(6);
    $name = $_POST['name'];
    $wishname = $_POST['wishname'];
    $default_msg = $_POST['default_msg'];
    $template = $_POST['template'];
    $custom_msg = $_POST['custom_msg'];
    $query = "INSERT INTO wishes (uid, name, wishname, default_msg, template, custom_msg) VALUES ('$uid', '$name', '$wishname', '$default_msg', '$template', '$custom_msg')";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        	<title>Congrats! Your wish has been generated!</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="css/util.css">
        	<link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        	<style>
        		.tooltip {
        		  position: relative;
        		  display: inline-block;
        		}
        
        		.tooltip .tooltiptext {
        		  visibility: hidden;
        		  width: 140px;
        		  background-color: #555;
        		  color: #fff;
        		  text-align: center;
        		  border-radius: 6px;
        		  padding: 5px;
        		  position: absolute;
        		  z-index: 1;
        		  bottom: 150%;
        		  left: 50%;
        		  margin-left: -75px;
        		  opacity: 0;
        		  transition: opacity 0.3s;
        		}
        
        		.tooltip .tooltiptext::after {
        		  content: "";
        		  position: absolute;
        		  top: 100%;
        		  left: 50%;
        		  margin-left: -5px;
        		  border-width: 5px;
        		  border-style: solid;
        		  border-color: #555 transparent transparent transparent;
        		}
        
        		.tooltip:hover .tooltiptext {
        		  visibility: visible;
        		  opacity: 1;
        		}
        	</style>
        	<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
        </head>
        <body>
        
        
        	<div class="container-contact100">
        		<div class="wrap-contact100">
        			<div class="contact100-form validate-form">
        				<span class="contact100-form-title">
        					Your wish has been generated!
        				</span>
        
        				<div class="wrap-input100 validate-input" data-validate="Name is required">
        					<span class="label-input100">Your Wish Generated Link is </span>
        					<input class="input100" id="linkx" type="text" placeholder="Generated Wish Link" value="https://holify.link/wish/<?php echo $uid; ?>" readonly>
        					<span class="focus-input100"></span>
        				</div>
        
        				<div class="container-contact100-form-btn">
        					<div class="wrap-contact100-form-btn">
        						<div class="contact100-form-bgbtn"></div>
        						<button class="contact100-form-btn btnx" id="btnx" data-clipboard-target="#linkx">
        							<span>
        								
        							Copy Link
        								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
        							</span>
        						</button>
        					</div>
        				</div>
        				<a href="https://wa.me/?text=Hey%20<?php echo $wishname; ?>!%0A%0A<?php echo $name; ?>%20has%20sent%20you%20a%20holi%20wish!%0A%0ACheck%20it%20out%20at%20https://holify.link/wish/<?php echo $uid; ?>" target="_blank">
        				<div class="container-contact100-form-btn">
        					<div class="wrap-contact100-form-btn">
        						<div class="contact100-form-bgbtn"></div>
        						<button class="contact100-form-btn" type="text">
        							<span>
        								
        							Share on WhatsApp
        								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
        							</span>
        						</button>
        					</div>
        				</div>
        				</a>
        			</div>
        		</div>
        	</div>
        	<script>
        	new ClipboardJS('.btnx');
        
        
        	</script>
        
        
        	<div id="dropDownSelect1"></div>
        
        <!--===============================================================================================-->
        	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/bootstrap/js/popper.js"></script>
        	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/select2/select2.min.js"></script>
        	<script>
        		$(".selection-2").select2({
        			minimumResultsForSearch: 20,
        			dropdownParent: $('#dropDownSelect1')
        		});
        	</script>
        <!--===============================================================================================-->
        	<script src="vendor/daterangepicker/moment.min.js"></script>
        	<script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        	<script src="js/main.js"></script>
        
        </body>
        </html>
        
        <?php
    }else{
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        	<title>Congrats! Your wish has been generated!</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="css/util.css">
        	<link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        	<style>
        		.tooltip {
        		  position: relative;
        		  display: inline-block;
        		}
        
        		.tooltip .tooltiptext {
        		  visibility: hidden;
        		  width: 140px;
        		  background-color: #555;
        		  color: #fff;
        		  text-align: center;
        		  border-radius: 6px;
        		  padding: 5px;
        		  position: absolute;
        		  z-index: 1;
        		  bottom: 150%;
        		  left: 50%;
        		  margin-left: -75px;
        		  opacity: 0;
        		  transition: opacity 0.3s;
        		}
        
        		.tooltip .tooltiptext::after {
        		  content: "";
        		  position: absolute;
        		  top: 100%;
        		  left: 50%;
        		  margin-left: -5px;
        		  border-width: 5px;
        		  border-style: solid;
        		  border-color: #555 transparent transparent transparent;
        		}
        
        		.tooltip:hover .tooltiptext {
        		  visibility: visible;
        		  opacity: 1;
        		}
        		#centerx{
        		    position:fixed;
        		    top:50%;
        		    left:50%;
        		    transform: translate(-50%, -50%);
        		}
        	</style>
        </head>
        <body>
        
        
        	<div class="container-contact100">
        		<div class="wrap-contact100"  id="centerx">
        			<form class="contact100-form validate-form">
        			    
        				<span class="contact100-form-title">
        					Uh Oh! Something went wrong! <?php echo mysqli_error($con); ?>
        				</span>
        				<div class="container-contact100-form-btn">
        					<div class="wrap-contact100-form-btn">
        						<div class="contact100-form-bgbtn"></div>
        						<a href="https://holify.link">
        						<button class="contact100-form-btn">
        							<span>
        								Retry
        								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
        							</span>
        						</button>
        						</a>
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>
        	<script>
        	function copyFunc() {
        	  var copyText = document.getElementById("linkx");
        	  copyText.select();
        	  copyText.setSelectionRange(0, 99999);
        	  navigator.clipboard.writeText(copyText.value);
        	  
        	  var tooltip = document.getElementById("myTooltip");
        	  tooltip.innerHTML = "Copied: " + copyText.value;
        	}
        
        	function outFunc() {
        	  var tooltip = document.getElementById("myTooltip");
        	  tooltip.innerHTML = "Copy to clipboard";
        	}
        	</script>
        
        
        	<div id="dropDownSelect1"></div>
        
        <!--===============================================================================================-->
        	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/bootstrap/js/popper.js"></script>
        	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/select2/select2.min.js"></script>
        	<script>
        		$(".selection-2").select2({
        			minimumResultsForSearch: 20,
        			dropdownParent: $('#dropDownSelect1')
        		});
        	</script>
        <!--===============================================================================================-->
        	<script src="vendor/daterangepicker/moment.min.js"></script>
        	<script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        	<script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        	<script src="js/main.js"></script>
        
        </body>
        </html>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Send a Holify wish!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="index.php" method="post">
				<span class="contact100-form-title">
					Send a Holi wish!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name of the person, the wish is for</span>
					<input class="input100" type="text" name="wishname" placeholder="Enter the name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Wish Templates</span>
					<div>
						<select class="selection-2" name="template">
						    <option value="surprise">Funky Surprise</option>
						    <option value="splash">Splash to see the hidden wish!</option>
						    <option value="tetris">Infinite Tetris</option>
							<option value="patterns">Patterns with onclick animations</option>
							<option value="darkcolor">Dark Background with fading colors floating</option>
							<option value="pixels">Pixelated Color Splashing</option>
							<option value="snowfall">Snowfall wish! (for those from mountain regions)</option>
							
							<option value="tetris">Infinite Tetris</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Use Default Message (Optional)</span>
					<div>
						<select class="selection-2" name="default_msg">
							<option value="">Select Default Message</option>
							<option value="msg1">Warm greetings to you and your loved ones on this auspicious occasion of Holi Festival!</option>
							<option value="msg2">May your day be full of colours, happiness, laughter and smile. Wishing you a very Happy Holi! </option>
							<option value="msg3">May God Spray Colors of Success, Prosperity and Health Over You and Your Family, and Fill Each Moment with Love and Happiness, Wish You All a Very Happy Holi </option>
							<option value="msg4">Bright colors, water balloons, tasty gujiyas and melodious songs are the ingredients for a perfect Holi. Wish you and your family a very happy and colorful Holi </option>
							<option value="msg5">Let's celebrate life with colours and enthusiasm. May we be able to fill colours in the lives of others as well. </option>
							<option value="msg6">This Holi, express your love with vibrant colors and make your day even more beautiful!!</option>
							<option value="msg7">Neela, peela, hara, gulaabi yeh sab to ek bahaana hain <br>
												<br>
												hame to tumse milne aana hai <br>
												<br>
												Es Holi pe unhe rangne jaana hain.. <br>
												<br>
												Dil ne ek baar phir humara kahna mana hain <br>
							</option>
							<option value="msg8">
								Khaa key gujiya, <br><br>

								pee key bhaang, <br><br>

								laaga ke thoda thoda sa rang, <br><br>

								baja ke dholak aur mridang, <br><br>

								khele holi hum tere sang. <br><br>

								HAPPY HOLI
							</option>
							<option value="msg9">Auspicious red, sun-kissed gold, soothing silver, pretty purple, blissful blue, and forever green. I wish u and all family members the most colourful HOLI. Happy Holi!</option>
							<option value="msg10">Sending you colourful blessings <br>
							sms on Holi. May you have <br>
							a happy and contented life. <br>
							🙏Happy holi 2022.🙏
							</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
					<span class="label-input100">Custom Message</span>
					<textarea class="input100" name="custom_msg" placeholder="(Optional) Your message here...You can use both Default and Custom Messgae or either of them"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="makeawish" type="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div><br><hr><br>
				<span class="contact100-form-title" style="font-size:12px;">
					Made with 💖 by <a href="https://www.linkedin.com/in/isoumyaswaraj/" style="font-size:15px;">Soumya Swaraj</a>
				</span>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
