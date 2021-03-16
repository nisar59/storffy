
@extends('Mamba.master')
@section('content')
	<link rel="stylesheet" type="text/css" href="public/applyassets/css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="public/applyassets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
    <link rel="stylesheet" href="public/applyassets/css/style.css"/>

<h2 style="text-align: center; margin: 20px;">Apply Here</h2>
<p style="text-align: center; font-style: italic; margin-top: -20px; padding: 0px;">Make Sure you are Providing correct Information</p>
<div style="justify-content: center; display: flex;">

		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="" method="POST">
		        	@csrf
		        	<div id="form-total">
		        				<!-- SECTION 0 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 0</span>
			            	<span class="step-text">Agree with Terms</span>
			            </h2>
			            <section style="padding: 0px;">
			                <div class="inner"style="color: white;">	
			                <div style="height: 250px; overflow-y: scroll;background: #2f8be0; border-radius: 20px; width: 100%;padding: 20px;">

			                	<h4 style="font-family: arial; font-size: 18px; text-align: center;font-weight: bold;">Terms and Conditions</h4>
			                	@include('Mamba.terms')
			                	</div>
							<input type="checkbox" id="agree" name="agree" style="-webkit-appearance: checkbox; width: -1px; margin-top: 20px;" value="Agree"> Agree with terms and conditions
									
							
							</div>
			            </section>




		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 1</span>
			            	<span class="step-text">Personal Information</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="cnic">CNIC*</label>
										<input type="text" placeholder="Enter CNIC without dashs 36502*********"  id="cnic" name="cnic" required pattern="[0-9]{13}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">Full Name*</label>
										<input type="text" placeholder="Full Name"  id="name" name="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Email Address*</label>
										<input type="email" placeholder="Your Email"  id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="mobile">Mobile No*</label>
										<input type="mobile" placeholder="Enter Your Mobile No 0341*******"  id="mobile" name="mobile" required pattern="[0-9]{11}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="country">Country*</label>
										<select name="country" id="country" >
											<option value="" disabled selected>Select Country</option>

												<?php 
							
							
							$file=base_path('resources/views/Mamba/country.json'); 
							$str = file_get_contents($file);
							$json = json_decode($str, true);
							for($i=0;$i<count($json);$i++){
							$country=$json[$i]['name'];
 								?>
				<option value="<?php echo $country; ?>"><?php echo $country;?></option>
					<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="city">City*</label>
										<input type="city" placeholder="Enter Your City Name"  id="city" name="city" required >



									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="address">Address*</label>
										<input type="address" placeholder="address"  id="address" name="address" required >
									</div>
								</div>
							
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="qualification">Maximum Qualification*</label>
										<select name="qualification" id="qualification" required>
											<option value="" disabled selected>Select Your Maximum Qualification</option>
											<option value="Matric">Matric</option>
											<option value="F.sc">F.sc</option>
											<option value="I.Cs">I.Cs</option>
											<option value="FA/D.com/I.Com/DAE">FA/D.com/I.Com/DAE</option>
											<option value="BA 14Year Education">BA 14Year Education</option>
											<option value="B.sc 14Year Education">B.sc 14Year Education</option>
											<option value="MA 16year Education">MA 16year Education</option>
											<option value="M.sc 16Year Education">M.sc 16Year Education</option>
											<option value="B.Tech">B.Tech</option>
											<option value="M.Tech">M.Tech</option>
											<option value="BS 16Year Education">BS 16Year Education</option>
											<option value="MS 18year Education">MS 18year Education</option>	
										</select>
									</div>
								</div>


								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="fieldofstudy">Field of Study*</label>
										<select name="fieldofstudy" id="fieldofstudy" required>
											<option value="" disabled selected>Select Your Field Of Study</option>
											<option value="Accounting/Finance">Accounting</option>					
											<option value="Computer Science">Computer Science</option>
											<option value="cooking/Food">Cooking/Food</option>			
											<option value="Engineering">Engineering</option>
											<option value="Fine Arts">Fine Arst</option>							
											<option value="Fashion/Designing">Fashion/Designing</option>
											<option value="liguistic">Liguistic</option>							
											<option value="Law">Law</option>										
											<option value="Medical">Medical</option>								
											<option value="Media">Media</option>
											<option value="Political Science">Political Science</option>
											<option value="Science">Science</option>
											<option value="Others">Others</option>								
										</select>
																				
								</div>
								</div>

							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Submit Application</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="program">Select Your Favorit Program</label>
										<select name="program" id="program" >
											<option value="" disabled selected>Select Credit Card Type</option>
											<option value="Business Credit Cards">Business Credit Cards</option>
											<option value="Limited Purpose Cards">Limited Purpose Cards</option>
											<option value="Prepaid Cards">Prepaid Cards</option>
											<option value="Charge Cards">Charge Cards</option>
											<option value="Student Credit Cards">Student Credit Cards</option>
										</select>
									</div>
								</div>
								
							</div>
			            </section>
			            <input type="text" name="status" value="pending" style="display: none;">
			            <input type="text" name="permission" value="default" style="display: none;">
		        	</div>
		        </form>
			</div>
		</div>

























 

@endsection