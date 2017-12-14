<?php 
  function house_finence(){
   echo '<div id="house_finence"><a href="'.home_url('/finance/').'"><div class="one-third">
          <div class="panel card mb-1">
            <div id="b-o-y" class="i-display">
              <i class="icon-wallet-giftcard"></i>
            </div>
            <h3>In-House-Finance</h3>
            <h5></h5>
            
          </div>
        </div></a>
        <a href="'.home_url('/finance/').'"><div class="one-third">
          <div class="panel card mb-1">
            <div id="f-y-w" class="i-display">
              <i class="icon-timer"></i>
            </div>
            <h3>APR as low as 2.49%</h3>
            <h5></h5>
            
          </div>
        </div></a>
        <a href="'.home_url('/finance/').'"><div class="one-third">
          <div class="panel card">
            <div class="i-display" id="b-w-c">
              <i class="icon-favorite-outline"></i>
            </div>
            <h3>Easy Finance</h3>
            
          </div>
        </div></a></div>';
        return;
  }
    add_shortcode('house_finence_sec','house_finence');


    // SHORTCODE for model popup 
    function model_popup()
    { ?>
      <div data-popup="1">
                 <h4>
                Cancel Search
                <span data-pop>&times;</span>
                </h4>
                <div id="mymodelpopup"> <ul>
                 <?php $terms = get_terms( array(
                        'taxonomy' => 'model_taxonomies',
                          'hide_empty' => false,
                          'order'     => 'ASC'
                        ) );
                    $j=0;

                   foreach($terms as $term)
                { 
               $j++;

         
                  ?> 
               
                <li><a itemprop="makesOffer" href="<?php echo get_term_link($term->slug, 'model_taxonomies'); ?>"><?php echo $term->name; ?></a></li>
                <p></p>
                <?php } ?></ul>
              </div>
        </div>
    <?php } 
    add_shortcode('model_popup','model_popup');
    
    function payment_popup()
    {
    ?><div id="openModal" class="modalDialog" style="">
       
          <div> 
            <h4>
                Cancel Search
               <a href="#close" title="Close" class="close">X</a>
                </h4>
                <div id="mymodelpopup"> <ul>
                 <?php 
                    for($i=200;$i<=1300;$i+=100)
                    {
                   ?> 
               <li><a itemprop="makesOffer" href="<?php echo $i; ?>">$<?php echo $i; ?>/mo or less</a></li>
                <p></p>
                <?php } ?>
                </ul>
              </div>
             </div>
      </div>    
    <?php } 
    add_shortcode('payment_popup','payment_popup');
    add_action('wp_ajax_refermail', 'su_data_submit');
    add_action('wp_ajax_nopriv_refermail','su_data_submit');

    // ------------- Value for trade in --------------- //

    function su_data_submit() {

       $email       =     trim($_POST["email"]);
       $vin         =     trim($_POST["vin"]);
       $firstname   =     trim($_POST["firstname"]);
       $lastname    =     trim($_POST["lastname"]);
       $make        =     trim($_POST["make"]);
       $model       =     trim($_POST["model"]);
       $phone       =     trim($_POST["phone"]);
       $miles       =     trim($_POST["miles"]);
       $questions  =      trim($_POST["questions"]);
       $price      =      trim($_POST["price"]);
       $contact    =      trim($_POST["contact"]);
       $year       =      trim($_POST["year"]);

       $mes =  "email: ".$email."</br>"."vin: ".$vin."</br>"."firstname: ".$firstname."</br>"."lastname: ".$lastname."</br>"."make: ".$make."</br>"."model: ".$model."</br>"."phone: ".$phone."</br>";
       $mes .= "miles: ".$miles."</br>"."questions: ".$questions."</br>"."price: ".$price."</br>"."contact: ".$contact."</br>"."year: ".$year."</br>";
      // ---------------- email template------------------//
       $body  =  "<html><head>
                                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />       
                                <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
                                </head>
                                <body style='font-family:sans-serif;'>
                                <div style='width:100%; margin:0px auto;'>
                                <div style='max-width: 600px; border: 1px solid #e6e6e6; height: auto;  margin: 10px auto;;'>
                                <div style='padding:5px 0px; background:#fff; width: 100%;display: block;  overflow: hidden; text-align:center;'>
                                </div>
                                <div class='body-part' style='padding:10px 30px; overflow:hidden;display:block; background:#fff;text-align:left;'>
                                <img src=''> 
                                <p style='font-size: 25px;color:rgba(0, 0, 0, 0.66);'>$mes</p>
                                
                                <p style='font-size: 25px;color:rgba(0, 0, 0, 0.8);'></p>
                                </div><div style='#fff; padding: 25px 5px 15px;'>
                                <div style='width:100%; text-align:center;'>
                                <div style='color:#fff;font-size:13px;line-height:18px;padding:0;  margin-top: 5px;text-align:center;'>
                                </div> 
                                <div style='color:#fff;font-size:13px; text-align:center;line-height:18px; padding:5px 0 0 0; margin:5px 0px 10px;'>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </body>
                        </html>";
       $subject = "Value YOUR TRADE IN";
       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $to = "apkz1faucquqzapuylob@boards.trello.com";
       wp_mail( $to, $subject, $body, $headers );
       $msg =  "Your form has been submited successfully thanks";
       $res = array("ok"=>true,"msg"=>$msg);
       echo json_encode($res);
       die();
    }
    add_action('wp_ajax_finincialmail', 'su_data_submit1');
    add_action('wp_ajax_nopriv_finincialmail','su_data_submit1');

    // ------------- Value for trade in --------------- //

    function su_data_submit1() {



         $app_type         =     trim($_POST["app_type"]);
         $first_name       =     trim($_POST["first_name"]);
         $last_name        =     trim($_POST["last_name"]);
         $middle_initial   =     trim($_POST["middle_initial"]);
         $d_o_b            =     trim($_POST["d_o_b"]);
         $drive_license    =     trim($_POST["drive_license"]);
         $l_e_d            =     trim($_POST["l_e_d"]);
         $d_t_p            =     trim($_POST["d_t_p"]);
         $e_p              =     trim($_POST["e_p"]);
         $email_address    =     trim($_POST["email_address"]);
         $street_name      =     trim($_POST["street_name"]);
         $house            =     trim($_POST["house"]);
         $city             =     trim($_POST["city"]);
         $zip              =     trim($_POST["zip"]);
         $rent             =     trim($_POST["rent"]);
         $monthly_pay      =     trim($_POST["monthly_pay"]);
         $employer_name    =     trim($_POST["employer_name"]);
         $employer_phone   =     trim($_POST["employer_phone"]);
         $job_title        =     trim($_POST["job_title"]);
         $employee_since   =     trim($_POST["employee_since"]);
         $previous_employer=     trim($_POST["previous_employer"]);
         $year             =     trim($_POST["year"]);
         $additional_income=     trim($_POST["additional_income"]);
         $make             =     trim($_POST["make"]);
         $down_payment     =     trim($_POST["down_payment"]);
         $agree           =      "yes";

          $mes =  "app_type: ".$app_type."</br>"."first_name: ".$first_name."</br>"."last_name: ".$last_name."</br>"."middle_initial: ".$middle_initial."</br>"."d_o_b: ".$d_o_b."</br>"."drive_license: ".$drive_license."</br>"."l_e_d: ".$l_e_d."</br>";
          $mes .= "d_t_p: ".$d_t_p."</br>"."e_p: ".$e_p."</br>"."email_address: ".$email_address."</br>"."house: ".$house."</br>"."city: ".$city."</br>";
          $mes .= "zip: ".$zip."</br>"."rent: ".$rent."</br>"."monthly_pay: ".$monthly_pay."</br>"."employer_name: ".$employer_name."</br>"."employer_phone: ".$employer_phone."</br>";
          $mes .= "job_title: ".$job_title."</br>"."employee_since: ".$employee_since."</br>"."previous_employer: ".$previous_employer."</br>"."previous_employer: ".$previous_employer."</br>"."year: ".$year."</br>";
          $mes .= "additional_income: ".$additional_income."</br>"."make: ".$make."</br>"."down_payment: ".$down_payment."</br>"."agree: ".$agree."</br>";
        
           $body1  =  "<html><head>
                                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />       
                                <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
                                </head>
                                <body style='font-family:sans-serif;'>
                                <div style='width:100%; margin:0px auto;'>
                                <div style='max-width: 600px; border: 1px solid #e6e6e6; height: auto;  margin: 10px auto;;'>
                                <div style='padding:5px 0px; background:#fff; width: 100%;display: block;  overflow: hidden; text-align:center;'>
                                </div>
                                <div class='body-part' style='padding:10px 30px; overflow:hidden;display:block; background:#fff;text-align:left;'>
                                <img src=''> 
                                <p style='font-size: 25px;color:rgba(0, 0, 0, 0.66);'>$mes</p>
                                
                                <p style='font-size: 25px;color:rgba(0, 0, 0, 0.8);'></p>
                                </div><div style='#fff; padding: 25px 5px 15px;'>
                                <div style='width:100%; text-align:center;'>
                                <div style='color:#fff;font-size:13px;line-height:18px;padding:0;  margin-top: 5px;text-align:center;'>
                                </div> 
                                <div style='color:#fff;font-size:13px; text-align:center;line-height:18px; padding:5px 0 0 0; margin:5px 0px 10px;'>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </body>
                        </html>";
       $subject = "Pre-Approval For Financing detail";
       $headers1 = "MIME-Version: 1.0" . "\r\n";
       $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $to1 = "kcedon8j2albsdqdx32h@boards.trello.com ";
       wp_mail( $to1, $subject, $body1, $headers1 );


      // $msg =  "Your form has been submited successfully thanks";
        
       $res = array("ok"=>true,"msg"=>$mes);
       echo json_encode($res);
      die();
    }
   ?>