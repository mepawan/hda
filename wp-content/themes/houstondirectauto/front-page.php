<?php
/**
 *Template Name:Home-page
 * The main template file
 *
 */

get_header(); ?>
<div class="home-wrap">

  <section class="introduction" id="introduction">
    <div class="wrapper notification__attached">
      <section id="fetch-form" itemscope itemtype="http://schema.org/Website">
        <meta itemprop="url" content="<?php echo home_url();?>">
        <div class="tda-search">
          <ul id="tags">
            <li class="tag">
              <span class="tag-display" placeholder="Search here... (e.g., Red SUV, Payment $400, or black convertible)" contenteditable="false"></span>
            </li>
          </ul>
          <button class="tda-search__button"><i class="icon-search"></i></button>
        </div>
      </section>
	  
      <section id="quick-search">
        
        <!--h1>2694 rides ready to roll</h1-->
        
        <section id="advanced-search" class="full mb-quarter mobile-only">
          <a class="df-trigger" data-menu="#search-makes" href="javascript:void(0)">Make &amp; Model Search</a>
          <a class="df-trigger" data-menu="#pmt-search" href="javascript:void(0)">Search by Payment</a>
        </section>
       
          <?php $terms = get_terms( array(
    'taxonomy' => 'forsale_taxonomies',
    'hide_empty' => false,
    'order'     => 'ASC'
) );
          $i=0;
          
          foreach($terms as $term)
          {
            $i++;

         
?> 
          <ul>
          <?php if($term->name != 'Less Than $20,000' || $term->name != 'Less Than $10,000') { ?>
          <li><a itemprop="makesOffer" href="<?php echo get_term_link($term->slug, 'forsale_taxonomies'); ?>"><?php echo $term->name; ?></a></li>
          <?php }  else { ?>
          <li><a itemprop="makesOffer" href="/for-sale/wow/">Less Than $20,000</a></li> 
          <?php } if($i==4) { ?>  <?php } $i=0; ?></ul>
          <?php } ?>
      </section>

      <?php echo do_shortcode('[model_popup]'); ?>
      <?php echo do_shortcode('[payment_popup]'); ?>
      <section id="advanced-search" class="full no-mobile">
        <!-- <a class="df-trigger" data-menu="#search-makes" href="javascript:void(0)">Make &amp; Model Search</a> -->
         <a class="df-trigger" href="/for-sale/wow/" style="">Less Than $10,000</a>
         <a class="df-trigger as2" id="as2" href="/for-sale/wow1/" >Less Than $20,000</a>
         <p></p>
         <a class="df-trigger" data-pop="1">Make &amp; Model Search</a>
        <a class="df-trigger" data-popn="1" href="#openModal">Search by Payment</a>
         

      </section>
    

      <div id="openModal" class="modalDialog" style="">
       
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
            
  </section>
  <section class="lineup-wrap" id="suyc">
    <div class="wrapper-full">
		<div class="half">
			<div class="one-third">
				<a href="<?php echo get_term_link('Coupe', 'forsale_taxonomies'); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/coupe.png" alt="Coupe in Houston TX" class="" title="Coupe in Houston TX">
					<h4 class="cim">Coupe</h4>
				</a>
			</div>
			<div class="one-third">
				<a href="<?php echo get_term_link('Convertible', 'forsale_taxonomies'); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/convertible.png" alt="Coupe in Houston TX" class="" title="Coupe in Houston TX">
					<h4 class="cim">Convertible</h4>
				</a>
			</div>
			<div class="one-third">
				<a href="<?php echo get_term_link('Van', 'forsale_taxonomies'); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/minivan.png" alt="Coupe in Houston TX" class="" title="Coupe in Houston TX">
					<h4 class="cim">Van</h4>
				</a>
			</div>
		</div>


		<div class="half">
			<div class="one-third">
				<a href="<?php echo get_term_link('Sedan', 'forsale_taxonomies'); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/sedan.png" alt="Coupe in Houston TX" class="" title="Coupe in Houston TX">
					<h4 class="cim">Sedan</h4>
				</a>
			</div>
			<div class="one-third">
				<a href="<?php echo get_term_link('Suv', 'forsale_taxonomies'); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/suv.png" alt="Coupe in Houston TX" class="" title="Coupe in Houston TX"
					><h4 class="cim">Suv</h4>
				</a>
			</div>
			<div class="one-third">
				<a href="<?php echo get_term_link('Trucks', 'forsale_taxonomies'); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/truck.png" alt="Coupe in Houston TX" class="" title="Coupe in Houston TX">						
					<h4 class="cim">Trucks</h4>
				</a>
			</div>
		</div>
	</div>
  </section>
  
<section class="lineup-wrap finance" id="locate" style="">
  
    <div class="wrapper-full">
		
		<div class="half">
			<div class="mod-google-map mod-google-map-responsive1">
				<div class="content">
					<?php echo do_shortcode('[pvn-google-map id="2"]'); ?>
					
				</div>
			</div>	
		</div>
		<div class="half">
		<div class="formus">
				<center><h4>Value YOUR TRADE IN</h4></center>
				<form class="value-ur-trade-frm" id="value-ur-trade-frm">
					<div class="wrapper-full">
						<div class="half">
							<div class="form-group">
								<label class="one-third">VIN</label>
								<input type="text" name="vin" class="form-control" id="vin" required />
							</div>
							<div class="form-group">
								<label class="one-third">YEAR</label>
							   <input type="date" name="year" class="form-control" id="year" required />
							  
							</div>
							<div class="form-group">
								<label class="one-third">MAKE</label>
							   <input type="text" name="make" class="form-control" id="make" required />
							  
							</div>
							<div class="form-group">
								<label class="one-third">MODEL</label>
							   <input type="text" name="model" class="form-control" id="model" required />
							  
							</div>
							<div class="form-group">
								<label class="one-third">MILES</label>
							   <input type="number" name="mtlane" class="form-control" id="mtlane" required />
							  
							</div>
							<div class="form-group">
								<label class="one-third">PRICE</label>
							   <input type="number" name="price" class="form-control" id="price" required />
							  
							 </div>
					   </div>
					   <div class="half">
							<div class="form-group">
								<label class="one-third">FIRST NAME</label>
								<input type="text" name="firstname" class="form-control" id="firstname" required />
							</div>
							<div class="form-group">
								<label class="one-third">LAST NAME</label>
							   <input type="text" name="lastname" class="form-control" id="lastname" required />
							</div>
							<div class="form-group">
								<label class="one-third">EMAIL</label>
							   <input type="email" name="email" class="form-control" id="email" required />
							</div>
							<div class="form-group">
								<label class="one-third">PHONE</label>
							   <input type="number" class="form-control" id="phone" name="phone" required />
							</div>
							<div class="form-group">
								<label class="one-third">QUESTIONS</label>
							   <input type="text" name="questions" class="form-control" id="questions" required />
							</div>
							<div class="form-group">
								<label class="one-third">CONTACTS</label>
							   <input type="number" name="contact" class="form-control" id="contact" required />
							 </div>
						</div>
					</div>
					<br />
					<div style="text-align:center">
						<button class="btn btn-info btninfo" id="btn1" type="button" >SUBMIT</button>
					</div>
				</form>
         </div>
		</div>
	</div>
  </section>
  
  <section class="why" id="why">
    <div class="wrapper">
      <section class="full">
        <?php  echo  do_shortcode('[house_finence_sec]'); ?>
		
      </section>
    </div>
	<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
 </section>
</div>

<?php get_footer(); ?>

