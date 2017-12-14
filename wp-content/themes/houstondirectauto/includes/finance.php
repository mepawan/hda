<?php
/* Template Name:Finance Page */
get_header();
?>
<style>
.form-control {
    width: 50%;
 }
</style>
<div class="wrap">

 	<section class="introduction" id="introduction" style="background: #fff;min-height:0vh;">
 		<div class="wrapper notification__attached">
          </div>
           
 	</section>
  <section>
  	  <div class="container-fluid">
			<div class="main-block col-md-9 clearfix"><div class="com-container com-container-default">
	

<div class="mod-form2-get-approved mod-form2-getApprovedResponsive1">
	<a name="getApprovedResponsive1-form"></a>
	<form name="get-approved" id="getApproved" method="post" action="" novalidate="novalidate">
		<span id="fineres"></span>
		<div class="content">
			<div class="heading">
				<div class="description">
					<h1>Get Online Pre-Approval For Financing</h1>
					<p>
						
							No matter what your credit situation, our specialists can help tailor a finance
							package to fit your needs. Our experience with a wide variety of financial institutions
							helps us provide financing for all credit levels. To get started, just complete our secure
							online credit application. We'll help you get pre-approved, making it even easier for you
							to shop for your next vehicle.
						
					</p>
				</div>
				
			</div>
			
			<div class="formBlock">
				<h4>Is this a single or joint application</h4>
				<div class="formContent formBorder">
					<fieldset class="col-md-12 col-sm-12 form-group single">
						<div class="header-block">
							
						</div>
						<div class="formContent" style="margin:12px 0px;">
					    <div class="col-md-6 col-sm-6">
						<label for="app_type-Single"><input type="radio" id="app_type" name="app_type" value="Single" class="form-group" checked="checked">Single Applicant</label>
					   </div>
					   <div class="col-md-6 col-sm-6">
						<label for="app_type-Joint"><input type="radio" id="app_type" name="app_type" value="Joint" class="form-group">Joint (Co-applicant)</label>
					  </div>
				    </div>
				
			         </fieldset>
				</div>
		    </div>




				
            <div class="formBlock">
				<h4>Contact Info</h4>
				<div class="formContent formBorder">
					<fieldset class="col-md-12 col-sm-12 form-group single">
						<div class="header-block">
							<h4>Primary Applicant</h4>
						</div>
						<div class="form-group">
							<label>First Name<span class="required">*</span></label>
							<input name="first_name" id="first_name" class="form-control"  type="text" value="">
							<span id="1"></span>
						</div>
						<div class="form-group">
							<label>Last Name<span class="required">*</span></label>
							<input name="last_name" id="last_name" class="form-control"  type="text" value="">
							<span id="2"></span>
						</div>

						<div class="form-group">
							<label>Middle Initial<span class="required"></span></label>
							<input name="middle_initial" id="middle_initial" class="form-control"  type="text" value="">
						    <span id="3"></span>
						</div>

						<div class="form-group">
							<label>Date of Birth<span class="required"></span></label>
							<input name="d_o_b" id="d_o_b" class="form-control"  type="date" value="">
							<span id="4"></span>
						</div>

						<div class="form-group">
							<label>Social Security <span class="required">#*</span></label>
							<input name="social_security" id="social_security" class="form-control"  type="text" value="">
							<span id="5"></span>
						</div>

						<div class="form-group">
							<label>Driver's License <span class="required">#*</span></label>
							<input name="drive_license" id="drive_license" class="form-control"  type="text" value="">
							<span id="6"></span>
						</div>

						<div class="form-group">
							<label>Driver's License Issuing State<span class="required"></span></label><br>
							<select name="driver_license" id="driver_license" class="form_control">
								    <option value="AL" label="Alabama">Alabama</option>
                                    <option value="AK" label="Alaska">Alaska</option>
                                    <option value="AZ" label="Arizona">Arizona</option>
									<option value="AR" label="Arkansas">Arkansas</option>
									<option value="CA" label="California">California</option>
									<option value="CO" label="Colorado">Colorado</option>
									<option value="CT" label="Connecticut">Connecticut</option>
									<option value="DE" label="Delaware">Delaware</option>
									<option value="DC" label="District Of Columbia">District Of Columbia</option>
									<option value="FL" label="Florida">Florida</option>
									<option value="GA" label="Georgia">Georgia</option>
									<option value="HI" label="Hawaii">Hawaii</option>
									<option value="ID" label="Idaho">Idaho</option>
									<option value="IL" label="Illinois">Illinois</option>
									<option value="IN" label="Indiana">Indiana</option>
									<option value="IA" label="Iowa">Iowa</option>
									<option value="KS" label="Kansas">Kansas</option>
									<option value="KY" label="Kentucky">Kentucky</option>
									<option value="LA" label="Louisiana">Louisiana</option>
									<option value="ME" label="Maine">Maine</option>
									<option value="MD" label="Maryland">Maryland</option>
									<option value="MA" label="Massachusetts">Massachusetts</option>
									<option value="MI" label="Michigan">Michigan</option>
									<option value="MN" label="Minnesota">Minnesota</option>
									<option value="MS" label="Mississippi">Mississippi</option>
									<option value="MO" label="Missouri">Missouri</option>
									<option value="MT" label="Montana">Montana</option>
									<option value="NE" label="Nebraska">Nebraska</option>
									<option value="NV" label="Nevada">Nevada</option>
									<option value="NH" label="New Hampshire">New Hampshire</option>
									<option value="NJ" label="New Jersey">New Jersey</option>
									<option value="NM" label="New Mexico">New Mexico</option>
									<option value="NY" label="New York">New York</option>
									<option value="NC" label="North Carolina">North Carolina</option>
									<option value="ND" label="North Dakota">North Dakota</option>
									<option value="OH" label="Ohio">Ohio</option>
									<option value="OK" label="Oklahoma">Oklahoma</option>
									<option value="OR" label="Oregon">Oregon</option>
									<option value="PA" label="Pennsylvania">Pennsylvania</option>
									<option value="RI" label="Rhode Island">Rhode Island</option>
									<option value="SC" label="South Carolina">South Carolina</option>
									<option value="SD" label="South Dakota">South Dakota</option>
									<option value="TN" label="Tennessee">Tennessee</option>
									<option value="TX" label="Texas">Texas</option>
									<option value="UT" label="Utah">Utah</option>
									<option value="VT" label="Vermont">Vermont</option>
									<option value="VA" label="Virginia">Virginia</option>
									<option value="WA" label="Washington">Washington</option>
									<option value="WV" label="West Virginia">West Virginia</option>
									<option value="WI" label="Wisconsin">Wisconsin</option>
									<option value="WY" label="Wyoming">Wyoming</option>
										</select>
										<span id="7"></span>
						</div>

						<div class="form-group">
							<label>License Expiration Date<span class="required">*</span></label>
							<input name="l_e_d" id="l_e_d" class="form-control"  type="date" value="">
							<span id="8"></span>
						</div>

						<div class="form-group">
							<label>Day Time Phone<span class="required">*</span></label>
							<input name="d_t_p" id="d_t_p" class="form-control"  type="text" value="">
							<span id="9"></span>
						</div>

						<div class="form-group">
							<label>Evening Phone<span class="required"></span></label>
							<input name="e_p" id="e_p" class="form-control"  type="number" value="">
							<span id="10"></span>
						</div>

						<div class="form-group">
							<label>Email Address<span class="required">*</span></label>
							<input name="email_address" id="email_address" class="form-control"  type="text" value="">
							<span id="11"></span>
						</div>

						<div class="form-group">
							<label>Street Name<span class="required">*</span></label>
							<input name="street_name" id="street_name" class="form-control"  type="text" value="">
							<span id="12"></span>
						</div>

						<div class="form-group">
							<label>House/Apt <span class="required">#*</span></label>
							<input name="house" id="house" class="form-control"  type="text" value="">
							<span id="13"></span>
						</div>

						<div class="form-group">
							<label>City<span class="required">*</span></label>
							<input name="city" id="city" class="form-control"  type="text" value="">
							<span id="14"></span>
						</div>

						<div class="form-group">
							<label>State<span class="required"></span></label>
							<input name="state" id="state" class="form-control"  type="text" value="">
							<span id="15"></span>
						</div>

						<div class="form-group">
							<label>Zip<span class="required">*</span></label>
							<input name="zip" id="zip" class="form-control"  type="number" value="">
							<span id="16"></span>
						</div>

						<div class="form-group">
							<label>Rent or Own<span class="required">?</span></label>
							<input name="rent" id="rent" class="form-control"  type="number" value="">
							<span id="17"></span>
						</div>

						<div class="form-group">
							<label>Monthly Payment / Rent<span class="required">*</span></label>
							<input name="monthly_pay" id="monthly_pay" class="form-control"  type="number" value="">
							<span id="18"></span>
						</div>
				
			         </fieldset>
				</div>
		    </div>

		    <div class="formBlock">
				<h4>Employment Info</h4>
				<div class="formContent formBorder">
					<fieldset class="col-md-12 col-sm-12 form-group single">
						<div class="header-block">
							
						</div>
						<div class="form-group">
							<label>Employer Name<span class="required">*</span></label>
							<input name="employer_name" id="employer_name" class="form-control"  type="text" value="">
							<span id="19"></span>
						</div>
						<div class="form-group">
							<label>Employer Phone<span class="required">*</span></label>
							<input name="employer_phone" id="employer_phone" class="form-control"  type="number" value="">
							<span id="20"></span>
						</div>
						<div class="form-group">
							<label>Employer Address<span class="required">*</span></label>
							<input name="employer_address" id="employer_address" class="form-control"  type="text" value="">
							<span id="21"></span>
						</div>
						<div class="form-group">
							<label>Job Title<span class="required">*</span></label>
							<input name="job_title" id="job_title" class="form-control"  type="text" value="">
							<span id="22"></span>
						</div>
						<div class="form-group">
							<label>Employee Since<span class="required"></span></label>
							<input name="employee_since" id="employee_since" class="form-control"  type="text" value="">
							<span id="23"></span>
						</div>
						<div class="form-group">
							<label>If less than 2 years, previous employer?<span class="required"></span></label>
							<input name="previous_employer" id="previous_employer" class="form-control"  type="text" value="">
							<span id="24"></span>
						</div>
						<div class="form-group">
							<label>Monthly Income (before taxes)*<span class="required">*</span></label>
							<input name="monthly_income" id="monthly_income" class="form-control"  type="text" value="">
							<span id="25"></span>
						</div>

						<div class="form-group">
							<label>Additional Income Source<span class="required"></span></label>
							<input name="additional_income" id="additional_income" class="form-control"  type="text" value="">
							<span id="26"></span>
						</div>
						<div class="form-group">
							<label>Additional Monthly Income<span class="required"></span></label>
							<input name="additional_monin" id="additional_monin" class="form-control"  type="text" value="">
							<span id="27"></span>
						</div>
				
			         </fieldset>
				</div>
		    </div>
  		</div>

  		<div class="formBlock">
				<h4>Purchase Info</h4>
				<div class="formContent formBorder">
					<fieldset class="col-md-12 col-sm-12 form-group single">
						<div class="header-block">
							
						</div>
						<div class="form-group">
							<label>Year<span class="required">*</span></label><br>
							<select name="year" id="year" class="form_control">
								<option value="" label="Select Year" selected="selected">Select Year</option>
								<option value="1996" label="1996">1996</option>
								<option value="1997" label="1997">1997</option>
								<option value="2000" label="2000">2000</option>
								<option value="2001" label="2001">2001</option>
								<option value="2002" label="2002">2002</option>
								<option value="2003" label="2003">2003</option>
								<option value="2004" label="2004">2004</option>
								<option value="2005" label="2005">2005</option>
								<option value="2006" label="2006">2006</option>
								<option value="2007" label="2007">2007</option>
								<option value="2008" label="2008">2008</option>
								<option value="2009" label="2009">2009</option>
								<option value="2010" label="2010">2010</option>
								<option value="2011" label="2011">2011</option>
								<option value="2012" label="2012">2012</option>
								<option value="2013" label="2013">2013</option>
								<option value="2014" label="2014">2014</option>
								<option value="2015" label="2015">2015</option>
								<option value="2016" label="2016">2016</option>
								<option value="2017" label="2017">2017</option>
								<option value="2018" label="2018">2018</option>
							</select>
							<span id="28"></span>
						</div>
						<div class="form-group">
							<label>Make<span class="required">*</span></label>
							<input name="make" id="make" class="form-control"  type="text" value="">
							<span id="29"></span>
						</div>

						<div class="form-group">
							<label>Model<span class="required">*</span></label>
							<input name="model" id="model" class="form-control"  type="text" value="">
							<span id="30"></span>
						</div>
						<div class="form-group">
							<label>Stock Number<span class="required">*</span></label>
							<input name="stock_number" id="stock_number" class="form-control"  type="text" value="">
							<span id="31"></span>
						</div>

						<div class="form-group">
							<label>Down Payment<span class="required">*</span></label>
							<input name="down_payment" id="down_payment" class="form-control"  type="text" value="">
							<span id="32"></span>
						</div>

						<div class="form-group">
							<label>Trade-In?<span class="required"></span></label>
							<input name="trade_in" id="trade_in" class="form-control"  type="text" value="">
							<span id="33"></span>
						</div>
				
			         </fieldset>
				</div>
		    </div>
  		</div>
         
        <div class="formBlock">
				<h4>Privacy Statement</h4>

				<div class="privacy">
					
						
							<b>Guiding Principles:</b>
							<p>In connection with your transaction, Houston Direct Auto may acquire information about
							you as described in this notice, which we handle as stated in this notice.</p>
							<p>We may collect personally identifiable information such as name, postal address,
							telephone number, e-mail address, social security number, date of birth, etc. This personal
							information is collected and used by Houston Direct Auto staff for the purpose of
							facilitating a relationship or business transaction.</p>
							<p>Our website resides behind a firewall and uses SSL (Secure Sockets Layer, the
							industry-standard security protocol used to communicate with browsers) to transmit personal
							information. Data is strongly encrypted during transmission to ensure that personal and
							payment information is secure. Industry-standard data encryption techniques are used to
							protect personal information.</p>
						
									</div>

				<div class="formContent formBorder">
					<fieldset class="col-md-12 col-sm-12 form-group single">
				<input name="agree" id="agree" class="text agree" type="checkbox" value="1" checked/>				<div class="details">
				<span id="34"></span>		
							<b>I agree</b> to give permission for the above applicant(s) Consumer Credit Report(s)
							be obtained, at no cost to me, in order to help determine the types and extent of financing
							which are available:
						
				    </div>
			    </div>
			</div>	
	    </div>
	    <button class="btn btn-info btninfo" id="btnf1" type="button" >GO</button>
	</form>
</div>
   </section>	
</div>
<?php 
get_footer();
?>