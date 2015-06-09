  <?php
		  // ADD NEW
		  $plusWeb   = $_POST['new_website'];
		  $plusPic   = $_POST['new_pic'];
		  $plusEmail = $_POST['new_email'];
		  
		  // UPDATE A USER
		  $Usite_id   = $_POST['Usite_id'];
		  $UplusWeb   = $_POST['Unew_website'];
		  $UplusPic   = $_POST['Unew_pic'];
		  $UplusEmail = $_POST['Unew_email'];
		  $Email_Key = $_POST['KE_Y'];
		  $DELsite_name = $_POST['DELsitename'];
		  
		  if(!empty($plusWeb)){
		  mysqli_query($con,"INSERT INTO WebSiteEmail
		  (site_id,site_name,avatar,email) VALUES
		  (NULL,'$plusWeb','$plusPic','$plusEmail')");
		  }
		 
		  if(!empty($UplusWeb)){
		  mysqli_query($con," UPDATE WebSiteEmail 
		  					  SET site_name='$UplusWeb' 
		  					  WHERE site_id='$Usite_id'"); 
		  }
		  
		  if(!empty($UplusPic)){
		  mysqli_query($con," UPDATE WebSiteEmail 
		  					  SET avatar='$UplusPic' 
		  					  WHERE site_id='$Usite_id'"); 
		  }
		  
		  if(!empty($UplusEmail)){
		  mysqli_query($con," UPDATE WebSiteEmail 
		  					  SET email='$UplusEmail' 
		  					  WHERE site_id='$Usite_id'"); 
		  }
		  if(!empty($DELsite_name)){
		  mysqli_query($con," DELETE FROM WebSiteEmail
		  					  WHERE site_id='$Usite_id'"); 
		  }
		  
		  if(!empty($Email_Key)){
		  
		  $queryKEYS = mysqli_query($con,"SELECT KE_Y FROM WebSiteEmail");
				  
				  while($Ky = mysqli_fetch_array($queryKEYS)){
				  
					  $k = $Ky['KE_Y'];
					  if($k=($emailKey)){
					  mysqli_query($con, "UPDATE WebSiteEmail 
					  					  SET KE_Y=0
					  					  WHERE KE_Y='$emailKey'");	  
					  }	  
				  
				  }
				  
				mysqli_query($con,"UPDATE WebSiteEmail 
		  					  SET KE_Y='$emailKey'
		  					  WHERE site_id='$Usite_id'");  
		  
		  }
		  
		  
		      
		  $query = mysqli_query($con, "SELECT * FROM WebSiteEmail");
		  echo '<div id="choozEMAIL" class="col-lg-8 col-lg-offset-2">';	 
				  while($sendWhere = mysqli_fetch_array($query)){
				  
				  
				  if(($sendWhere['KE_Y'])){
				  $currE = 'style="border:10px solid purple;"';
				  }elseif($emailKey !== ($sendWhere['KE_Y'])){
				  $currE =''; 	  
				  }
				  
				 
				 
				  echo '<ul>';
				  
				 
				  
				  
				  // check if string ends with image extension
				 
				  if (!preg_match('/(\.jpg|\.png|\.bmp)$/',$sendWhere['avatar'])) {
				  $img2use = "img/eAvatars/genericAvatar.png";	  
				  }elseif (preg_match('/(\.jpg|\.png|\.bmp)$/',$sendWhere['avatar'])) {
				  $img2use = $sendWhere['avatar'];	  
				  }
				  
				 
				  echo '<li class="EmailChoiz" id="img_'.$sendWhere['site_id'].'" ><img '.$currE.' src="'.$img2use.'"></li>';
				  
				  echo '<div id="EEM_'.$sendWhere['site_id'].'" style="display:none;">';
				  echo '<hr />';
				  echo '<li class="EmailChoiz">'.$sendWhere['site_name'].'</li>';
				  echo '<li class="EmailChoiz">'.$sendWhere['email']	 .'</li>';
				  ?>  
					
						<?php  
							
					echo '<form action="" method="POST">';
					echo '<li class="EmailChoiz">';
					echo '<input type="checkbox" name="KE_Y"> Link to Site';				
					echo '</li>';
					echo '<li class="EmailChoiz">'.$emailKey.'</li>';
					echo '<hr />';
						 echo '<strong>Update</strong><br />';
						 
						 echo '<input type="hidden" name="Usite_id" 
						 value="'.$sendWhere['site_id'].'">';
						 
						 echo '<input type="text" name="Unew_website" 
						 placeholder="Website">';
						 
						 echo '<input type="text" name="Unew_pic"
						 placeholder="Pic">';
						 
						 echo '<input type="text" name="Unew_email"
						 placeholder="Email">';
						 echo '<hr />';
						 
						 echo '<br />';
						 
						 

						 echo '<input type="checkbox" name="DELsitename"> DELETE';
						 
						 echo '<br />';
						 echo '<br />';
						 
						 echo '<input type="submit" value="Submit">';
					 
						
					echo '</form>';
						
						echo'</div>';
						
						 echo '</ul>';
					echo '<script>
		$("#img_'.$sendWhere['site_id'].'").click(function(){
			$("#EEM_'.$sendWhere['site_id'].'").slideToggle();
		});';
			
		
		echo '</script>';	 
						 
						
				   }
		  echo '</div>';
		
		
		
		?>
		<form action="" method="POST" class="col-lg-8 col-lg-offset-2">
		<?php  
		
		  
		  echo '<div id="addNEW" class="col-lg-8 col-lg-offset-2">';
		  echo '<br /><strong>Add New</strong><br />';
		  
		  echo '<input style="margin:0px 2px 0px 0px;" type="text" name="new_website" placeholder="Website">';
		  echo '<input style="margin:0px 2px 0px 0px;" type="text" name="new_pic" placeholder="URL with img prefix">';
		  echo '<input style="margin:0px 2px 0px 0px;" type="text" name="new_email" placeholder="Email">';
		  echo '<input style="margin:0px 2px 0px 0px;" type="submit"  value="Submit">';
		  
          
         
		  
		  echo '</div>';
		  
	      ?>    
          </form>
          
        
     
		  


