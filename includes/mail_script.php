<?php 				
					$file = 'emailkey/KEY.txt';
					// Open the file to get existing content
					$emailKey = file_get_contents($file);
					
					
		
					$queryMailTo = mysqli_query($con, "SELECT * FROM WebSiteEmail WHERE KE_Y='$emailKey'"); 
					// ABOVE : Change the site_name='CONDITION' to the name of the site that corresponds to the E-mail you want 
					$sendHere = "";
					
					while($send_Here = mysqli_fetch_array($queryMailTo)){
					
					$sendHere .= $send_Here['email'];	
						  
					}
					
					echo $sendHere;
					
					// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!
					
					$yourEmail = $sendHere;//$theE; // the email address you wish to receive these mails through
					$yourWebsite = 'Brandon Espinoza'; // the name of your website
					$thanksPage = ""; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
					$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
					$requiredFields = "Name,Email,Comments"; // names of the fields you'd like to be required as a minimum, separate each field with a comma
					
					
					// DO NOT EDIT BELOW HERE
					$error_msg = array();
					$result = null;
					
					$requiredFields = explode(",", $requiredFields);
					
					function clean($data) {
						$data = trim(stripslashes(strip_tags($data)));
						return $data;
					}
					function isBot() {
						$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");
					
						foreach ($bots as $bot)
							if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
								return true;
					
						if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
							return true;
						
						return false;
					}
					
					if ($_SERVER['REQUEST_METHOD'] == "POST") {
						if (isBot() !== false)
							$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
							
						// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
						// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
						$points = (int)0;
						
						$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");
					
						foreach ($badwords as $word)
							if (
								strpos(strtolower($_POST['Comments']), $word) !== false || 
								strpos(strtolower($_POST['Name']), $word) !== false
							)
								$points += 2;
						
						if (strpos($_POST['Comments'], "http://") !== false || strpos($_POST['Comments'], "www.") !== false)
							$points += 2;
						if (isset($_POST['nojs']))
							$points += 1;
						if (preg_match("/(<.*>)/i", $_POST['Comments']))
							$points += 2;
						if (strlen($_POST['Name']) < 3)
							$points += 1;
						if (strlen($_POST['Comments']) < 15 || strlen($_POST['Comments'] > 1500))
							$points += 2;
						// end score assignments
					
						foreach($requiredFields as $field) {
							trim($_POST[$field]);
							
							if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
								$error_msg[] = "Please fill in all the required fields and submit again.";
						}
					
						if (!empty($_POST['Name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['Name'])))
							$error_msg[] = "The name field must not contain special characters.\r\n";
						
						if (!empty($_POST['Email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['Email'])))
							$error_msg[] = "That is not a valid e-mail address.\r\n";
						
						if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
							$error_msg[] = "Invalid website url.\r\n";
						
						if ($error_msg == NULL && $points <= $maxPoints) {
							$subject = $yourWebsite ;// Automatic Form Email
							
							$message = "You received this e-mail message through your website: \n\n";
							foreach ($_POST as $key => $val) {
								if (is_array($val)) {
									foreach ($val as $subval) {
										$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
									}
								} else {
									$message .= ucwords($key) . ": " . clean($val) . "\r\n";
								}
							}
							$message .= "\r\n";
							$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
							$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
							$message .= 'Points: '.$points;
					
							if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
								$headers   = "From: $yourEmail\n";
								$headers  .= "Reply-To: {$_POST['Email']}";
							} else {
								$headers   = "From: $yourWebsite <$yourEmail>\n";
								$headers  .= "Reply-To: {$_POST['Email']}";
							}
					
							if (mail($yourEmail,$subject,$message,$headers)) {
								if (!empty($thanksPage)) {
									//header("Location: http://www.google.com");
									//exit;
								} else {
									$result = 'Your mail was successfully sent.';
									$disable = true;
								}
							} else {
								$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
							}
						} else {
							if (empty($error_msg))
								$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
						}
					}
					function get_data($var) {
						if (isset($_POST[$var]))
							echo htmlspecialchars($_POST[$var]);
					}
					?>
					
					<?php
					if (!empty($error_msg)) {
						//echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";					
						$ERmsg = implode("<br />", $error_msg);
						
					}
					if ($result != NULL) {
						//echo '<p class="success">'. $result . "</p>";
						
						$Rmsg = $result;
					}
					?>
					
					
					
					<!--
						
				    Below is a Form that can be copied and modified
						
<form style="float:left;" action="" method="post">
					<noscript>
							<p><input type="hidden" name="nojs" id="nojs" /></p>
					</noscript>
					
					    <label>Call TODAY! <br />832-597-0413</label><br /><br />
						<label for="nombre">Name</label> <br />
							<input placeholder="" type="text" name="Name" id="name" value="<?php get_data("name"); ?>" /><br />
						
						<label for="email">Email</label> <br />
							<input placeholder="" type="text" name="Email" id="email" value="<?php get_data("Email"); ?>" /><br />
						
						<label for="email">Phone</label> <br />
							<input placeholder="" type="text" name="Phone" id="phone" value="<?php get_data("phone"); ?>" /><br />
						
							
						<label for="Ciudad">Address</label> <br />
							<input placeholder="" type="text" name="Address" id="email" value="<?php get_data("Ciudad"); ?>" /><br />
							
						<label for="Producto">Service</label> <br />
							<textarea style="border:;" placeholder="" name="Product" id="Producto"><?php get_data("Product"); ?></textarea><br />
								
						<label for="Comentarios">Any Comments</label><br />
							<textarea placeholder="" name="Comments" id="Comments"><?php get_data("Comments"); ?></textarea><br />
					
						<input type="submit" name="submit" id="submit" value="SEND"/>
					
					</form>
-->
