<?php
/**
 * The template for displaying the footer
 *
 */

?>
</section><!-- <div class="fws"></div> -->
  
      <section class="full footer" id="footer">
        <div class="one-third">
          <div class="panel card mb-1" style="border: 1px solid #FFFFFF;">
		  <br /><br/>
           <?php dynamic_sidebar('footer1'); ?>
            
          </div>
        </div>
        <div class="one-third">
          <div class="panel card mb-1" style="border: 1px solid #FFFFFF;">
		  <br /><br/>
             <?php dynamic_sidebar('footer2'); ?>

          </div>
        </div>
        <div class="one-third">
          <div class="panel card fu" style="border:none;">
		  <br /><br/>
              <?php dynamic_sidebar('footer3'); ?>

          </div>
        </div>
      </section>
    
    <section class="copy-wright" id="copy-wright">
    <div class="wrapper-full">
			<span class="copy-write-text">Copyright © 2017-2018 Houston Direct Auto </span>
    </div>
  </section>
 


    
<?php wp_footer(); ?>

<style>

</style>
<script>


  var jQuerypopup = jQuery("[data-popup]"),
    pHov   = false;
jQuerypopup.hover(function(){ pHov^=1; });
jQuery(document).mousedown(function(){
  if(!pHov) jQuerypopup.slideUp(240); 
});

jQuery("[data-pop]").click(function(){
  var n = jQuery(this).data('pop')
  var jQuerypopup = n ? jQuery("[data-popup='"+n+"']") : jQuery(this).closest("[data-popup]");
  jQuerypopup.slideToggle(240);
});  


  jQuery('section').on('click', function () {
    if (jQuery('.helper_tool').hasClass('active')) {
      jQuery('.helper_tool').removeClass('active');
    }
  });

  jQuery('#need_help a').on('click', function () {
    jQuery('.helper_tool').toggleClass('active');
  });




  var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
  jQuery("#btn1").click(function(){

    var vin = jQuery("#vin").val();
    var firstname = jQuery("#firstname").val();
    
    var year = jQuery("#year").val();
    var lastname = jQuery("#lastname").val();
    var make = jQuery("#make").val();
    var email = jQuery("#email").val();
    var model = jQuery("#model").val();
    var phone = jQuery("#phone").val();
      var miles = jQuery("#mtlane").val();
    var questions = jQuery("#questions").val();
    var price = jQuery("#price").val();
    var contact = jQuery("#contact").val();
  
    





    
    
 if(vin=="")

{

alert("Please Enter VIN Name!!!");

jQuery("#vin").focus();

return false;

}

if(firstname=="")

{

alert("Please Enter first Name!!!");

jQuery("#firstname").focus();

return false;

}
if(year=="")

{

alert("Please Enter year!!!");

jQuery("#year").focus();

return false;

}

if(lastname=="")

{

alert("Please Enter last Name!!!");

jQuery("#lastname").focus();

return false;

}

if(make=="")

{

alert("Please Enter make!!!");

jQuery("#make").focus();

return false;

}

if(email=="")

{

alert("Please Enter email address !!!");

jQuery("#email").focus();

return false;

}

var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

var uemail2m=emailfilter.test(email);

if(uemail2m==false)

{

alert("Please Enter Valid Email Address !!!");

document.getElementById("email").focus();

return false;

}

if(model=="")

{

alert("Please Enter model number!!!");

jQuery("#model").focus();

return false;

}

if(phone=="")

{

alert("Please Enter phone number!!!");

jQuery("#phone").focus();

return false;

}

if(miles=="")

{

alert("Please Enter miles Name!!!");

jQuery("#mtlane").focus();

return false;

}

if(questions=="")

{

alert("Please Enter questions!!!");

jQuery("#questions").focus();

return false;

}

if(price=="")

{

alert("Please Enter price !!!");

jQuery("#price").focus();

return false;

}

if(contact=="")

{

alert("Please Enter contact number!!!");

jQuery("#contact").focus();

return false;

}

jQuery.ajax({

type: 'POST', 

url:  ajaxurl,

data: {"action":"refermail","vin":vin,"firstname":firstname,"year":year,"lastname":lastname,"make":make,"email":email,"model":model,"phone":phone,
  "miles":miles,"questions":questions,"price":price,"contact":contact
},
dataType: "json",      
success: function(response){ 
   if(response.ok == true)
   {
   jQuery("#res").css("color","green");
   jQuery("#res").html(response.msg);
   jQuery('#res').fadeIn();
   jQuery('#res').fadeOut(5000);
   jQuery("#to").css("border","1px solid grey");
   jQuery("#mes").css("border","1px solid grey");
  jQuery("#form1")[0].reset();
}
}
  
});


});


// finence form  //
jQuery("#btnf1").click(function(){

    
    var app_type = jQuery("#app_type").val();
    var first_name = jQuery("#first_name").val();
    var last_name = jQuery("#last_name").val();
    
    var middle_initial = jQuery("#middle_initial").val();
    var d_o_b = jQuery("#d_o_b").val();    
    var social_security = jQuery("#social_security").val();
    var drive_license = jQuery("#drive_license").val();
    var driver_license = jQuery("#driver_license").val();
    var l_e_d = jQuery("#l_e_d").val();
    var d_t_p = jQuery("#d_t_p").val();
    var e_p = jQuery("#e_p").val();

    var email_address = jQuery("#email_address").val();
    var street_name = jQuery("#street_name").val();

    
    var house = jQuery("#house").val();
    var city = jQuery("#city").val();
    var state = jQuery("#state").val();
    var zip = jQuery("#zip").val();
    var rent = jQuery("#rent").val();
    var monthly_pay = jQuery("#monthly_pay").val();

    
    var employer_name = jQuery("#employer_name").val();
    var employer_phone = jQuery("#employer_phone").val();
    var employer_address = jQuery("#employer_address").val();
    var job_title = jQuery("#job_title").val();
    var employee_since = jQuery("#employee_since").val();
    var previous_employer = jQuery("#previous_employer").val();




    var monthly_income = jQuery("#monthly_income").val();
    var year = jQuery("#year").val();
    var additional_income = jQuery("#additional_income").val();    
    var additional_monin = jQuery("#additional_monin").val();
    var make = jQuery("#make").val();
    var model = jQuery("#model").val();
    var stock_number = jQuery("#stock_number").val();
    var down_payment = jQuery("#down_payment").val();
    var trade_in = jQuery("#trade_in").val();
    var agree = jQuery("agree").val();

    
    

    if(first_name=="")

{

//alert("Please Enter First Name!!!");
jQuery("#1").html("Please Enter First Name!!!");
jQuery("#1").css("color","#e80042");
jQuery("#first_name").focus();

return false;

}
if(last_name=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#2").html("Please Enter Last Name!!!");
jQuery("#2").css("color","#e80042");
jQuery("#last_name").focus();

return false;

}
/* if(middle_initial=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#3").html("Please Enter middle initial");
jQuery("#3").css("color","#e80042");
jQuery("#middle_initial").focus();

return false;

} 
if(d_o_b=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#4").html("Please Enter Date Of Birth");
jQuery("#4").css("color","#e80042");
jQuery("#d_o_b").focus();

return false;

}
 */
if(social_security=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#5").html("Please Enter Social Security");
jQuery("#5").css("color","#e80042");
jQuery("#social_security").focus();

return false;

}
 if(drive_license=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#6").html("Please Enter drive license");
jQuery("#6").css("color","#e80042");
jQuery("#drive_license").focus();

return false;

}

/* if(driver_license=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#7").html("Please Enter driver license issue date");
jQuery("#7").css("color","#e80042");
jQuery("#driver_license").focus();

return false;

} */

if(l_e_d=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#8").html("Please Enter License Expiration Date ");
jQuery("#8").css("color","#e80042");
jQuery("#l_e_d").focus();

return false;

}
if(l_e_d=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#8").html("Please Enter License Expiration Date ");
jQuery("#8").css("color","#e80042");
jQuery("#l_e_d").focus();

return false;

}
if(d_t_p=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#9").html("Please Enter Day Time Phone");
jQuery("#9").css("color","#e80042");
jQuery("#d_t_p").focus();

return false;

}
/* if(e_p=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#10").html("Please Enter Evening Phone*");
jQuery("#10").css("color","#e80042");
jQuery("#e_p").focus();

return false;

}
*/

if(email_address=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#11").html("Please Enter email address");
jQuery("#11").css("color","#e80042");
jQuery("#email_address").focus();

return false;

}
var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

var uemail2m=emailfilter.test(email_address);

if(uemail2m==false)

{

//alert("Please Enter Valid Email Address !!!");

jQuery("#11").html("Please Enter Valid Email Address !!!");
jQuery("#11").css("color","#e80042");
jQuery("#email_address").focus();

return false;

}
if(street_name=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#12").html("Please Enter street name");
jQuery("#12").css("color","#e80042");
jQuery("#street_name").focus();

return false;

}
if(house=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#13").html("Please Enter house/APT");
jQuery("#13").css("color","#e80042");
jQuery("#house").focus();

return false;

}
if(city=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#14").html("Please Enter City");
jQuery("#14").css("color","#e80042");
jQuery("#city").focus();

return false;

}
/* if(state=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#15").html("Please Enter State");
jQuery("#15").css("color","#e80042");
jQuery("#state").focus();

return false;

} */
if(zip=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#16").html("Please Enter zip");
jQuery("#16").css("color","#e80042");
jQuery("#zip").focus();

return false;

}
if(rent=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#17").html("Please Enter rent");
jQuery("#17").css("color","#e80042");
jQuery("#rent").focus();

return false;

}

if(monthly_pay=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#18").html("Please Enter monthly pay");
jQuery("#18").css("color","#e80042");
jQuery("#monthly_pay").focus();

return false;

}

if(employer_name=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#19").html("Please Enter name");
jQuery("#19").css("color","#e80042");
jQuery("#employer_name").focus();

return false;

}

if(employer_phone=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#20").html("Please Enter phone number");
jQuery("#20").css("color","#e80042");
jQuery("#employer_phone").focus();

return false;

}
if(employer_address=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#21").html("Please Enter Employer Address*");
jQuery("#21").css("color","#e80042");
jQuery("#employer_address").focus();

return false;

}
if(job_title=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#22").html("Please Enter Job Title");
jQuery("#22").css("color","#e80042");
jQuery("#job_title").focus();

return false;

}
/* if(employee_since=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#23").html("Please Enter Employee Since");
jQuery("#23").css("color","#e80042");
jQuery("#employee_since").focus();

return false;

} */
/* if(previous_employer=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#24").html("Please Enter yes or no If less than 2 years, previous employer");
jQuery("#24").css("color","#e80042");
jQuery("#previous_employer").focus();

return false;

} */

if(monthly_income=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#25").html("Please Enter Monthly Income");
jQuery("#25").css("color","#e80042");
jQuery("#monthly_income").focus();

return false;

}

/* if(additional_income=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#26").html("Please Enter additional income");
jQuery("#26").css("color","#e80042");
jQuery("#additional_income").focus();

return false;

}

if(additional_monin=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#27").html("Please Enter Additional Monthly Income");
jQuery("#27").css("color","#e80042");
jQuery("#additional_monin").focus();

return false;

} */
if(year=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#28").html("Please Enter year");
jQuery("#28").css("color","#e80042");
jQuery("#year").focus();

return false;

}
if(make=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#29").html("Please Enter make");
jQuery("#29").css("color","#e80042");
jQuery("#make").focus();

return false;

}
if(model=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#30").html("Please Enter model");
jQuery("#30").css("color","#e80042");
jQuery("#model").focus();

return false;

}
if(stock_number=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#31").html("Please Enter stock number");
jQuery("#31").css("color","#e80042");
jQuery("#stock_number").focus();

return false;

}
if(down_payment=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#32").html("Please Enter Additional down payment");
jQuery("#32").css("color","#e80042");
jQuery("#down_payment").focus();

return false;

}
/* if(trade_in=="")

{

//alert("Please Enter Last Name!!!");
jQuery("#33").html("Please Enter trade in");
jQuery("#33").css("color","#e80042");
jQuery("#trade_in").focus();

return false;

}
if(agree=="")

{

 //alert(agree);
jQuery("#34").html("Please checked Term and Condition");
jQuery("#34").css("color","#e80042");
jQuery("#agree").focus();

return false;

} */

jQuery.ajax({

type: 'POST', 

url:  ajaxurl,



data: {"action":"finincialmail","app_type":app_type,"first_name":first_name,"last_name":last_name,"middle_initial":middle_initial
,"d_o_b":d_o_b,"drive_license":drive_license,"driver_license":driver_license,
  "l_e_d":l_e_d,"d_t_p":d_t_p,"e_p":e_p,"email_address":email_address,"street_name":street_name,"house":house,"city":city,"zip":zip,
  "rent":rent,"monthly_pay":monthly_pay,"employer_name":employer_name,"employer_phone":employer_phone,"job_title":job_title,
  "employee_since":employee_since,"previous_employer":previous_employer,"year":year,"additional_income":additional_income,"make":make,
  "model":model,"stock_number":stock_number,"down_payment":down_payment,"agree":agree
},
dataType: "json",      
success: function(response){ 
   if(response.ok == true)
   {
   jQuery("#fineres").css("color","green");
   jQuery("#fineres").html(response.msg);
   jQuery('#fineres').fadeIn();
   jQuery('#fineres').fadeOut(20000);
   
   //jQuery("#getApproved")[0].reset();
}
}
  
});
});

</script>


    
</body>
</html>

