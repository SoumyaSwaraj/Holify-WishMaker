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
        					Uh Oh! Something went wrong! <a href="https://holify.link">Retry</a>
        				</span>
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