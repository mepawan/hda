<?php
/**
 * The main template file
 *
 */

get_header(); ?>





<div class="home-wrap">
  <section class="introduction" id="introduction">
    <div class="wrapper notification__attached">
      <section id="fetch-form" itemscope itemtype="http://schema.org/Website">
        <meta itemprop="url" content="http://www.texasdirectauto.com">
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
        
        <h1>2694 rides ready to roll</h1>
        
        <section id="advanced-search" class="full mb-quarter mobile-only">
          <a class="df-trigger" data-menu="#search-makes" href="javascript:void(0)">Make &amp; Model Search</a>
          <a class="df-trigger" data-menu="#pmt-search" href="javascript:void(0)">Search by Payment</a>
        </section>
        <ul>
          <li><a itemprop="makesOffer" href="/for-sale/truck/">Trucks</a></li>
          <li><a itemprop="makesOffer" href="/for-sale/luxury-car/">Luxury Cars</a></li>
          <li><a itemprop="makesOffer" href="/for-sale/sports-car/">Sport Cars</a></li>
          <li><a itemprop="makesOffer" href="/for-sale/vans/">Vans</a></li>
        </ul>
        <ul>
          <li><a itemprop="makesOffer" href="/for-sale/large-suv/">Large SUV</a></li>
          <li><a itemprop="makesOffer" href="/for-sale/small-suv/">Small SUV</a></li>
          <li><a itemprop="makesOffer" href="/for-sale/economy-car/">Economy Cars</a></li>
          <li><a itemprop="makesOffer" href="/for-sale/wow/">Less Than $20,000</a></li>
        </ul>
      </section>
      <section id="advanced-search" class="full no-mobile">
        <a class="df-trigger" data-menu="#search-makes" href="javascript:void(0)">Make &amp; Model Search</a>
        <a class="df-trigger" data-menu="#pmt-search" href="javascript:void(0)">Search by Payment</a>
      </section>
      <section class="full mt-2">
        <div class="rotatable-text"><span class="rotating-text"></span></div>
      </section>
      <section class="full mb-3 mobile-only text-center">
        <a href="javascript:void(0)" data-modal="#tda-awesome-video" class="play-button modal-trigger">
                    <i class="icon-play-arrow"></i>
                </a>
      </section>
    </div>
  </section>
  <section class="sell-us-your-car" id="suyc">
    <div class="wrapper">
      <div class="two-thirds">
        <div class="half">
          <h2 class="text-center" id="title">Sell us your car</h2>
          <div class="select-wrap">
            <select name="location" id="locationSelect">
                            <option selected disabled>Choose Location...</option>
                            <optgroup label="Houston Centers">
                                <option value="stafford">Stafford - TDA Super Center</option>
                                <option value="airtex">Airtex</option>
                                <option value="cllc">Clear Lake / League City</option>
                                <option value="cypress">Cypress</option>
                                <option value="downtown">Downtown</option>
                                <option value="westheimer">Galleria / Westheimer</option>
                                <option value="katy">Katy</option>
                                <option value="kingwood">Kingwood</option>
                                <option value="memorial">Memorial</option>
                                <option value="tomball">Tomball</option>
                                <option value="woods">The Woodlands</option>
                            </optgroup>
                            <optgroup label="Dallas/Ft. Worth Centers">
                                <option value="grandprairie">Grand Prairie - TDA Super Center</option>
                                <option value="addison">Addison</option>
                                <option value="arlington">Arlington</option>
                                <option value="carrollton">Carrollton</option>
                                <option value="colony">The Colony</option>
                                <option value="grapevine">Grapevine</option>
                                <option value="irving">Irving</option>
                                <option value="plano">Plano</option>
                                <option value="westplano">West Plano</option>
                            </optgroup>
                        </select>
          </div>
          <div itemscope itemtype="http://schema.org/Place" id="stafford" class="location active">
            <h6 class="text-center"><span itemprop="name">Texas Direct Auto</span> - Stafford</h6>
            <a itemprop="hasMap" target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@29.64672,-95.572047,17z/data=!4m2!3m1!1s0x0:0xc28078916cde4db0?hl=en-US">
                            <img src="images/tda_dealership_map.jpg" id="map-canvas" alt="Stafford, TX">
                        </a>
          </div>
          <div id="cllc" class="location">
            <h6 class="text-center">Sell Us Your Car - Clear Lake</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@29.505459,-95.114446,16z/data=!4m2!3m1!1s0x0:0x3687dbf4c8a04c71?hl=en-US">
                            <img src="//www.texasdirectauto.com/static/img/lc_map2.png" alt="League City, TX">
                        </a>
          </div>
          <div id="woods" class="location">
            <h6 class="text-center">Sell Us Your Car - The Woodlands</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@30.142045,-95.446813,17z/data=!3m1!4b1!4m2!3m1!1s0x864736e1e2b45f27:0xb69929808ea287f1?hl=en-US">
                            <img src="//www.texasdirectauto.com/static/img/wl_map.png" alt="The Woodlands, TX">
                        </a>
          </div>
          <div id="westheimer" class="location">
            <h6 class="text-center">Sell Us Your Car - Galleria</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto+-+Galleria+Location/@29.7377051,-95.5047406,387m/data=!3m1!1e3!4m13!1m7!3m6!1s0x8640c3bbf0bf76f5:0x29f7e3ad93294e5f!2s7730+Westheimer+Rd,+Houston,+TX+77063!3b1!8m2!3d29.7379509!4d-95.5047277!3m4!1s0x8640c3bbf0bee153:0xceb5c4f6d5d771b0!8m2!3d29.7379509!4d-95.5047277">
              <img src="//www.texasdirectauto.com/static/img/westh_map.png" alt="Houston, TX">
            </a>
          </div>
          <div id="grandprairie" class="location">
            <h6 class="text-center">Sell Us Your Car - Grand Prairie</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@32.6744728,-97.049184,17z/data=!4m13!1m7!3m6!1s0x864e88f435fd7ab1:0xd27d8eb32389c93f!2s2615+I-20+Frontage+Rd,+Grand+Prairie,+TX+75052!3b1!8m2!3d32.6744683!4d-97.04699!3m4!1s0x864e88f4357fc031:0x5232d04e96d4eb29!8m2!3d32.674153!4d-97.046993">
                            <img src="//www.texasdirectauto.com/static/img/tda_gp_dealership.jpg" alt="Grand Prairie, TX">
                        </a>
          </div>
          <div id="memorial" class="location">
            <h6 class="text-center">Sell Us Your Car - Memorial</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@29.783513,-95.601352,16z/data=!4m2!3m1!1s0x0:0x3b94a512ee370e67?hl=en-US">
                            <img src="//www.texasdirectauto.com/static/img/h-m-m.png" alt="Memorial, TX">
                        </a>
          </div>
          <div id="airtex" class="location">
            <h6 class="text-center">Sell Us Your Car - Airtex</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto+Woodlands/@29.9050998,-95.4927702,11.22z/data=!4m8!1m2!2m1!1stexas+direct+auto+airtex!3m4!1s0x0:0x5277347ba281714c!8m2!3d29.9788029!4d-95.4210663">
                            <img src="//www.texasdirectauto.com/static/img/tda_airtex_dealership.jpg" alt="Airtex, TX">
                        </a>
          </div>
          <div id="downtown" class="location">
            <h6 class="text-center">Sell Us Your Car - Downtown</h6>
            <a target="_blank" href="https://goo.gl/maps/8ogzMoAsr482">
                            <img src="//www.texasdirectauto.com/static/img/downtown.jpg" alt="Downtown, TX">
                        </a>
          </div>
          <div id="katy" class="location">
            <h6 class="text-center">Sell Us Your Car - Katy</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@29.7844264,-95.7641745,19z/data=!4m2!3m1!1s0x0000000000000000:0x936334be7aeb9019?hl=en-US">
                            <img src="//www.texasdirectauto.com/static/img/katy-m.png" alt="Katy, TX">
                        </a>
          </div>
          <div id="cypress" class="location">
            <h6 class="text-center">Sell Us Your Car - Cypress</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto+Cypress/@29.915497,-95.613907,16z/data=!4m2!3m1!1s0x0:0x64e94b2d8cc64e9f?hl=en-US">
                            <img src="//www.texasdirectauto.com/static/img/cypress_map.png" alt="Cypress, TX">
                        </a>
          </div>
          <div id="kingwood" class="location">
            <h6 class="text-center">Sell Us Your Car - Kingwood</h6>
            <a href="https://goo.gl/maps/DhxzkETacmP2" target="_blank">
                            <img src="//www.texasdirectauto.com/static/img/kw-main.png" alt="Kingwood, TX">
                        </a>
          </div>
          <div id="tomball" class="location">
            <h6 class="text-center">Sell Us Your Car - Tomball</h6>
            <a target="_blank" href="https://goo.gl/maps/G9GB8Wu6wRL2">
                            <img src="//www.texasdirectauto.com/static/img/tomball_map.png" alt="Tomball, TX">
                        </a>
          </div>
          <div id="colony" class="location">
            <h6 class="text-center">Sell Us Your Car - The Colony</h6>
            <a target="_blank" href="https://goo.gl/maps/ziSTc22Vrb62">
                            <img src="//www.texasdirectauto.com/static/img/colony_suycc.jpg" alt="The Colony, TX">
                        </a>
          </div>
          <div id="arlington" class="location">
            <h6 class="text-center">Sell Us Your Car - Arlington</h6>
            <a target="_blank" href="https://goo.gl/maps/mED5WiK6vCU2">
                            <img src="//www.texasdirectauto.com/static/img/arlington_map-compressor.png" alt="Arlington, TX">
                        </a>
          </div>
          <div id="irving" class="location">
            <h6 class="text-center">Sell Us Your Car - Irving</h6>
            <a target="_blank" href="https://www.google.com/maps/place/Texas+Direct+Auto/@32.836486,-96.997451,17z/data=!4m2!3m1!1s0x0:0x7f0b733b67f4b3de?hl=en-US">
                            <img src="//www.texasdirectauto.com/static/img/dal_irv_map.png" alt="Irving, TX">
                        </a>
          </div>
          <div class="location" id="plano">
            <h6 class="text-center">Sell Us Your Car - Plano</h6>
            <a target="_blank" href="https://www.google.com/maps/place/1861+N+Central+Expy,+Plano,+TX+75075/@33.0262723,-96.712924,17z/data=!3m1!4b1!4m5!3m4!1s0x864c18fc6a248231:0x479656dea093b626!8m2!3d33.0262723!4d-96.7107353">
                        <img src="//www.texasdirectauto.com/static/img/plano_suycc.jpg" alt="Plano, TX">
                      </a>
          </div>
          <div class="location" id="westplano">
            <h6 class="text-center">Sell Us Your Car - West Plano</h6>
            <a target="_blank" href="https://goo.gl/maps/QfFvf5fiw9Q2">
                        <img src="//www.texasdirectauto.com/static/img/suyc-west-plano-map.jpg" alt="West Plano, TX">
                      </a>
          </div>
          <div class="location" id="grapevine">
            <h6 class="text-center">Sell Us Your Car - Grapevine</h6>
            <a target="_blank" href="https://goo.gl/maps/nuzTpSHgRH62">
                        <img src="//www.texasdirectauto.com/static/img/suyc-grapevine-map.png" alt="Grapevine, TX">
                      </a>
          </div>
          <div id="addison" class="location">
            <h6 class="text-center">Sell Us Your Car - Addison</h6>
            <a target="_blank" href="https://goo.gl/maps/iW1ccb7cEsL2">
                            <img src="//www.texasdirectauto.com/static/img/addison_map.jpg" alt="Addison, TX">
                        </a>
          </div>
          <div id="carrollton" class="location">
            <h6 class="text-center">Sell Us Your Car - Carrollton</h6>
            <a target="_blank" href="https://goo.gl/maps/pkHT18yunDL2">
                            <img src="//www.texasdirectauto.com/static/img/carrollton_map.png" alt="Carrollton, TX">
                        </a>
          </div>
        </div>
        <div class="half">
          <div id="staffordInfo" class="locationInfo active">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 12053 Southwest Fwy <br> Stafford, TX 77477 <br>
              <a href="tel:832-225-3686">832-225-3686</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-19:00">Monday through Saturday 9am - 7pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <div class="locImages">
              <img src="//www.texasdirectauto.com/static/img/staffordimg/texas-direct-auto-pretty-night.jpg" alt="Stafford, TX">
              <div class="no-mobile">
                <img src="//www.texasdirectauto.com/static/img/staffordimg/tda-stafford-welcome.jpg" alt="Texas Direct Auto">
                <img src="//www.texasdirectauto.com/static/img/staffordimg/tda-stafford-playground.jpg" alt="Sell Us Your Car">
                <img src="//www.texasdirectauto.com/static/img/staffordimg/tda-stafford-sales.jpg" alt="Get Paid Today">
              </div>
            </div>
          </div>
          <!-- end of stafford -->
          <!-- beginning of clearlake -->
          <div id="cllcInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 300 Gulf Fwy N <br> League City, TX 77573 <br>
              <a href="tel:281-854-2542">281-854-2542</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <div class="locImages">
              <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-exterior.jpg" alt="Clear Lake, TX">
              <div class="no-mobile">
                <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-sign.jpg" alt="Texas Direct Auto">
                <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-interior.jpg" alt="Sell Us Your Car">
                <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-kidsplayroom.jpg" alt="Get Paid Today">
              </div>
            </div>
          </div>
          <!-- end of clearlake -->
          <!-- begininng of woodlands -->
          <div id="woodsInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 26119 West Interstate 45 Service Rd <br> Spring, TX 77380 <br>
              <a href="tel:281-854-2523">281-854-2523</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <div class="locImages">
              <img src="//www.texasdirectauto.com/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Woodlands, TX">
              <div class="no-mobile">
                <img src="//www.texasdirectauto.com/static/img/woodsimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                <img src="//www.texasdirectauto.com/static/img/woodsimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                <img src="//www.texasdirectauto.com/static/img/woodsimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
              </div>
            </div>
          </div>
          <!-- end of woodlands -->
          <!-- begininng of westheimer -->
          <div id="westheimerInfo" class="locationInfo">
            <p>
              <strong>Location:</strong>
              <br> 27730 Westheimer Rd
              <br> Houston, TX 77063
              <br>
              <a href="tel:832-430-4450">832-430-4450</a>
            </p>
            <p>
              <strong>Hours of operation:</strong>
              <br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time>
              <br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
          </div>
          <!-- end of westheimer -->
          <!-- beginning of memorial -->
          <div id="memorialInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 12171 Katy Freeway <br> Houston, TX 77079 <br>
              <a href="tel:832-462-1191">832-462-1191</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of memorial -->
          <!-- beginning of katy -->
          <div id="katyInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 22461 Katy Freeway <br> Katy, TX 77450 <br>
              <a href="tel:281-921-3030">281-921-3030</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <div class="locImages">
              <img src="//www.texasdirectauto.com/static/img/katyimg/tda-katy-welcome.jpg" alt="Katy, TX">
              <div class="no-mobile">
                <img src="//www.texasdirectauto.com/static/img/katyimg/tda-katy-interior.jpg" alt="Texas Direct Auto">
                <img src="//www.texasdirectauto.com/static/img/katyimg/tda-katy-interior2.jpg" alt="Sell Us Your Car">
                <img src="//www.texasdirectauto.com/static/img/katyimg/tda-katy-interior3.jpg" alt="Get Paid Today">
              </div>
            </div>
          </div>
          <!-- end of katy -->
          <!-- beginning of tomball -->
          <div id="tomballInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 21901 State Highway 249, Suite 400 <br> Houston, TX 77070 <br>
              <a href="tel:281-921-3436">281-921-3436</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Woodlands, TX">
                          <div class="no-mobile">
                            <img src="/static/img/woodsimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                            <img src="/static/img/woodsimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                            <img src="/static/img/woodsimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                          </div>
                        </div>
                        -->
          </div>
          <!-- end of tomball -->
          <!-- beginning of plano -->
          <div id="planoInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 1861 N Central Expressway <br> Plano, TX 75075 <br>
              <a href="tel:469-661-1010">469-661-1010</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of plano -->
          <!-- beginning of west plano -->
          <div id="westplanoInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 5969 Dallas Pkwy <br> Plano, TX 75093 <br>
              <a href="tel:469-660-1611">469-660-1611</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of west plano -->
          <!-- beginning of airtex -->
          <div id="airtexInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 14820 North Freeway #600<br> Houston, TX 77090<br>
              <a href="tel:+1-713-936-2540">713-936-2540</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Woodlands, TX">
                          <div class="no-mobile">
                            <img src="/static/img/woodsimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                            <img src="/static/img/woodsimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                            <img src="/static/img/woodsimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                          </div>
                        </div>
                        -->
          </div>
          <!-- end of airtex -->
          <!-- beginning of downtown -->
          <div id="downtownInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 1301 Leeland St. <br> Houston, TX 77002 <br>
              <a href="tel:281-921-3597">281-921-3597</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Woodlands, TX">
                          <div class="no-mobile">
                            <img src="/static/img/woodsimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                            <img src="/static/img/woodsimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                            <img src="/static/img/woodsimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                          </div>
                        </div>
                        -->
          </div>
          <!-- end of downtown -->
          <!-- beginning of cypress -->
          <div id="cypressInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 19710 Northwest Freeway #400<br> Houston, TX 77065 <br>
              <a href="tel:281-854-2548">281-854-2548</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <div class="locImages">
              <img src="//www.texasdirectauto.com/static/img/cypressimg/tda-cypress-exterior.jpg" alt="Cypress, TX">
              <div class="no-mobile">
                <img src="//www.texasdirectauto.com/static/img/cypressimg/tda-cypress-welcome.jpg" alt="Texas Direct Auto">
                <img src="//www.texasdirectauto.com/static/img/cypressimg/tda-cypress-interior.jpg" alt="Sell Us Your Car">
                <img src="//www.texasdirectauto.com/static/img/cypressimg/tda-cypress-interior2.jpg" alt="Get Paid Today">
              </div>
            </div>
          </div>
          <!-- end of cypress -->
          <!-- beginning of kingwood -->
          <div id="kingwoodInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 23906 Eastex Freeway Service Rd <br> Kingwood, TX 77339<br>
              <a href="tel:281-921-3434">281-921-3434</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of kingwood -->
          <!-- beginning of addison -->
          <div id="addisonInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 15250 Dallas Parkway #300<br> Dallas, TX 75248<br>
              <a href="tel:4696601620">469-660-1620</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of addison -->
          <!-- beginning of carrollton -->
          <div id="carrolltonInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 1800 N Interstate 35E <br> Carrollton, TX 75006 <br>
              <a href="tel:469-660-1609">469-660-1609</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of carrollton -->
          <!-- beginning of grand prairie -->
          <div id="grandprairieInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 2615 I-20 Frontage Rd. <br> Grand Prairie, TX 75052 <br>
              <a href="tel:469-660-1600">469-660-1600</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-19:00">Monday through Saturday 9am - 7pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-exterior.jpg" alt="Clear Lake, TX">
                          <div class="no-mobile">
                            <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-sign.jpg" alt="Texas Direct Auto">
                            <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-interior.jpg" alt="Sell Us Your Car">
                            <img src="//www.texasdirectauto.com/static/img/cllcimg/tda-clearlake-kidsplayroom.jpg" alt="Get Paid Today">
                          </div>
                        </div>
                        -->
          </div>
          <!-- end of grand prairie -->
          <!-- beginning of irving -->
          <div id="irvingInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 3578 W. Airport Freeway #120<br> Irving, TX 75062 <br>
              <a href="tel:972-590-9829">972-590-9829</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- beginning of the colony -->
          <div id="colonyInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 5040 TX-121 Suite 200 <br> Lewisville, TX 75056 <br>
              <a href="tel:469-660-1610">469-660-1610</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of the colony -->
          <!-- beginning of the grapevine -->
          <div id="grapevineInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 1000 W State Highway 114 <br> Grapevine, TX 76051 <br>
              <a href="tel:817-442-7100">817-442-7100</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
          <!-- end of the grapevine -->
          <!-- beginning of arlington -->
          <div id="arlingtonInfo" class="locationInfo">
            <!--<h3>Texas Direct Auto</h3>-->
            <p>
              <strong>Location:</strong> <br> 900 E. Copeland Rd #260<br> Arlington, TX 76011 <br>
              <a href="tel:972-590-9832">972-590-9832</a>
            </p>
            <p>
              <strong>Hours of operation:</strong><br>
              <time itemprop="openingHours" datetime="Mo-Sa 09:00-18:00">Monday through Saturday 9am - 6pm</time><br>
              <strong>Need Help? Contact us 24/7</strong>
            </p>
            <!--
                        <div class="locImages">
                          <img src="/static/img/woodsimg/tda-woodlands-exterior.jpg" alt="Stafford, TX">
                          <img src="/static/img/cllcimg/tda-woodlands-signs.jpg" alt="Texas Direct Auto">
                          <img src="/static/img/cllcimg/tda-woodlands-welcome.jpg" alt="Sell Us Your Car">
                          <img src="/static/img/cllcimg/tda-woodlands-interior.jpg" alt="Get Paid Today">
                        </div>
                        -->
          </div>
        </div>
        <div class="full mt-3">
          <h2>We Pay More! <br class="mobile-only"> <span>We Pay Today!</span></h2>
          <p>
            No appointment ever needed, just come on in anytime, or if you want to get an appraisal online just fill in the <strong>sell my car form</strong>,
            as much as you have, not all information is required but the more you provide the better we can get you the best
            estimate for your car or truck.
          </p>
          <p>
            Selling your car to <strong>Texas Direct Auto</strong> is <strong>Fast, Easy and Fun</strong>!
            <!--We buy 1000's of vehicles a month from customers just like you. Stop by one of our many
                        buying centers <a class="modal-trigger" href="javascript:void(0)" data-modal="#select_location">located</a> conveniently <strong>near you</strong>, or head on over to our main location in Stafford!-->
          </p>
        </div>
      </div>
      <div class="one-third" id="tradeForm">
        <form id="suycUpload">
          <div class="full">
            <h2 class="text-center">Sell my car</h2>
          </div>
          <input id="selfie-url" name="upURL" type="hidden" value="">
          <h5><span>1</span> Selfie of your car</h5>
          <div class="input-cell inline">
            <label id="my-car-selfie" for="up-selfie" title="Upload your car's selfie"></label>
            <div class="car-selfie">
              <h6>Optional</h6>
              <h6><img src="//www.texasdirectauto.com/static/img/sell-us-your-car.png" alt="Car selfie"></h6>
              <h6>...but helpful</h6>
              <div id="add-selfie"><i class="icon-camera-alt"></i></div>
            </div>
            <input type="file" multiple onchange="selfieUpload()" id="up-selfie" accept="image/gif,imgage/jpeg, image/jpg, image/png"
              name="file">
          </div>
          <div class="input-cell inline">
            <div id="sf-up"></div>
          </div>
          <h5><span>2</span> Describe your car</h5>
          <div class="input-cell inline">
            <label for="car-year">Year</label>
            <input type="tel" id="car-year" required minlength=4 maxlength=4 name="year" placeholder="Year...">
          </div>
          <div class="input-cell inline">
            <label for="car-make">Make</label>
            <div class="select-wrap">
              <select name="make" id="car-make" required></select>
            </div>
          </div>
          <div class="input-cell inline">
            <label for="car-model">Model</label>
            <div class="select-wrap">
              <select name="model" id="car-model" required></select>
            </div>
          </div>
          <div class="input-cell inline">
            <label for="miles">Miles</label>
            <input type="tel" required maxlength=7 id="miles" name="miles" placeholder="Miles...">
          </div>
          <div class="input-cell inline">
            <label for="car-vin">VIN</label>
            <input type="text" name="vin" id="vin" maxlength=17 placeholder="VIN...">
          </div>
          <div class="input-cell inline">
            <label for="car-color">Color</label>
            <input type="text" id="car-color" name="extColor" placeholder="Exterior color...">
          </div>
          <div class="input-cell inline">
            <label for="car-color">Price</label>
            <input type="text" id="car-color" name="expPrice" placeholder="Expected amount...">
          </div>
          <div class="input-cell inline">
            <label for="car-options">Options</label>
            <textarea name="comments" id="car-options"></textarea>
          </div>
          <h5><span>3</span> How do we reach you?</h5>
          <div class="input-cell inline">
            <label for="ur-name">Name</label>
            <input type="text" id="ur-name" name="firstName" required placeholder="Full name...">
          </div>
          <div class="input-cell inline">
            <label for="ur-email">Email</label>
            <input type="email" id="ur-email" name="email" required placeholder="Email...">
          </div>
          <div class="input-cell inline">
            <label for="ur-phone">Phone</label>
            <input type="tel" id="ur-phone" name="cellPhone" placeholder="Number to call...">
          </div>
          <div class="input-cell inline">
            <label for="ur-zip">Zip</label>
            <input type="tel" id="ur-zip" name="zipCode" required minlength=5 max-length=5 placeholder="Postal code...">
          </div>
          <div class="input-cell">
            <button itemprop="makesOffer" id="btnSUYC" class="right">Sell My Car</button>
          </div>
          <div class="input-cell">
            <input type="hidden" , " name="url "," value="/">
            <input id="email-opt" name="email-opt" type="checkbox" checked>
            <label style="font-family:'Open Sans'; font-size:0.8em;" for="email-opt">I would like to receive occasional emails</label>
          </div>
          <div class="input-cell">
            <small>
                      By clicking Sell My Car, I authorize Texas Direct Auto
                      and its affiliates to text/call me. We may use an autodialer.
                      Consent is not required to purchase goods/services.
                    </small>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="finance" id="finance">
    <div class="wrapper">
      <section class="full">
        <h2 class="text-center">We have rates <strong>as low as 2.9%</strong></h2>
      </section>
      <section class="full">
        <div class="one-third">
          <a class="panel_link df-trigger" data-menu="#finance-form" href="javascript:void(0)">
            <div class="panel card mb-1">
              <div class="i-display" id="a-l-r"><i class="icon-wallet-giftcard"></i></div>
              <h3>Always Low Rates</h3>
              <p>Finance your new ride for <br> <strong>as low as 2.9%</strong></p>
            </div>
          </a>
        </div>
        <div class="one-third">
          <a class="panel_link df-trigger" data-menu="#finance-form" href="javascript:void(0)">
            <div class="panel card mb-1">
              <div class="i-display" id="f-f"><i class="icon-timer"></i></div>
              <h3>Freaky Fast</h3>
              <p>Zero to approval in <br> <strong>only a few minutes</strong></p>
            </div>
          </a>
        </div>
        <div class="one-third">
          <a class="panel_link df-trigger" data-menu="#finance-form" href="javascript:void(0)">
            <div class="panel card mb-1">
              <div class="i-display" id="b-w-c"><i class="icon-favorite-outline"></i></div>
              <h3>Because We Care</h3>
              <p>Call us anytime with questions <br> <strong>(281) 499-8200</strong></p>
            </div>
          </a>
        </div>
        <div class="full">
          <p>
            <a itemprop="makesOffer" id="rate-lock" class="panel_link df-trigger" data-menu="#finance-form" href="javascript:void(0)">
                        Get Financed!
                      </a>
          </p>
        </div>
      </section>
    </div>
  </section>
  <section class="why" id="why">
    <div class="wrapper">
      <section class="full">
        <h2>WOW FACTOR<span>(</span>Y<span>)</span></h2>
      </section>
      <section class="full">
        <div class="one-third">
          <div class="panel card mb-1">
            <div id="b-o-y" class="i-display">
              <i class="icon-face-unlock"></i>
            </div>
            <h3>Because of You</h3>
            <h5>Over $4 Billion Sold</h5>
            <h5>Largest Independent Dealer</h5>
            <h5>Over 100k Customers</h5>
          </div>
        </div>
        <div class="one-third">
          <div class="panel card mb-1">
            <div id="f-y-w" class="i-display">
              <i class="icon-wallet-giftcard"></i>
            </div>
            <h3>For Your Wallet</h3>
            <h5>As low as 2.9%</h5>
            <h5>As long as 72mos.</h5>
            <h5>Real Approvals from Real People</h5>
          </div>
        </div>
        <div class="one-third">
          <div class="panel card">
            <img id="wow-cert" src="//www.texasdirectauto.com/static/img/wowcert.png" alt="WOW Certified Vehicles Available">
            <h3>For Your Peace of Mind</h3>
            <h5>No Haggle Pricing!</h5>
            <h5>Low Interest Rates!</h5>
            <h5>Limited Warranty!</h5>
          </div>
        </div>
      </section>
      <section class="full mt-2 mb-2 text-center">
        <span class="mt-2 text-center">
                    <a title="Watch our Story!" class="play-button modal-trigger" href="javascript:void(0)" data-modal="#tda-awesome-video">
                        <i class="icon-play-arrow"></i>
                    </a>
                </span>
      </section>
    </div>
  </section>
  <section class="locations" id="locations">
	 <div class="wrapper">
      <section class="full">
        <h2 class="loc-visit">Texas Direct Auto <br><small>Visit one of our <span>Super Centers</span> Today!</small></h2>
      </section>
      <section class="full">
        <section class="half mb-1">
          <a target="_blank" href="/sell-us-your-car/houston/stafford/">
                    <img src="//www.texasdirectauto.com/static/img/tda_dealership_map.jpg" id="map-canvas" alt="Stafford, TX">
                  </a>
        </section>
        <section class="half mb-1">
          <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">12053 Southwest FWY (Highway 59)</span> <br>
            <span itemprop="addressLocality">Stafford</span>, <span itemprop="addressRegion">Texas</span> <span itemprop="postalCode">77477</span>            <br>
            <strong>Main Office:</strong> <a href="tel:2814998200"><span itemprop="telephone">281-499-8200</span></a> <br>
            <strong>Main Fax:</strong> 281-783-2098 <br>
            <strong>Comments/Suggestions:</strong> <a href="mailto:management@texasdirectauto.com">Click Here</a> <br>
          </p>
          <p>
            <strong>Office Hours</strong><br> 9 AM to 7 PM Monday-Saturday <br> Closed Sunday
          </p>
          <p>
            <strong>Got the right stuff?</strong><br>We're currently hiring for All Positions <strong><a href="https://vroom.workable.com/" target="_blank">Click Here!</a></strong>
          </p>
        </section>
      </section>
      <section class="full">
        <section class="half mb-1">
          <a target="_blank" href="/sell-us-your-car/dallas/grandprairie/">
                    <img src="/static/img/tda_gp_dealership.jpg" id="map-canvas" alt="Grand Prairie, TX">
                  </a>
        </section>
        <section class="half mb-1">
          <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">2615 I-20 Frontage Rd.</span> <br>
            <span itemprop="addressLocality">Grand Prairie</span>, <span itemprop="addressRegion">Texas</span> <span itemprop="postalCode">75052</span>            <br>
            <strong>Main Office:</strong> <a href="tel:4696601600"><span itemprop="telephone">469-660-1600</span></a> <br>
            <!--<strong>Main Fax:</strong> 281-499-6749 <br>-->
            <strong>Comments/Suggestions:</strong> <a href="mailto:management@texasdirectauto.com">Click Here</a> <br>
          </p>
          <p>
            <strong>Office Hours</strong><br> 9 AM to 7 PM Monday-Saturday <br> Closed Sunday
          </p>
          <p>
            <strong>Got the right stuff?</strong><br>We're currently hiring for All Positions <strong><a href="https://vroom.workable.com/" target="_blank">Click Here!</a></strong>
          </p>
        </section>
      </section>
      <section class="full">
        <section class="half mb-1">
          <a target="_blank" href="/sell-us-your-car/houston/airtex/">
                    <img src="//www.texasdirectauto.com/static/img/tda_airtex_dealership.jpg" id="map-canvas" alt="Houston, TX">
                  </a>
        </section>
        <section class="half mb-1">
          <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">14820 North Freeway #600</span> <br>
            <span itemprop="addressLocality">Houston</span>, <span itemprop="addressRegion">Texas</span> <span itemprop="postalCode">77090</span>            <br>
            <strong>Main Office:</strong> <a href="tel:7139362540"><span itemprop="telephone">713-936-2540</span></a> <br>
            <strong>Main Fax:</strong> 713-929-2168 <br>
            <strong>Comments/Suggestions:</strong> <a href="mailto:management@texasdirectauto.com">Click Here</a> <br>
          </p>
          <p>
            <strong>Office Hours</strong><br> 9 AM to 7 PM Monday-Saturday <br> Closed Sunday
          </p>
          <p>
            <strong>Got the right stuff?</strong><br>We're currently hiring for All Positions <strong><a href="https://vroom.workable.com/" target="_blank">Click Here!</a></strong>
          </p>
        </section>
      </section>
      <section class="full mb-1">
        <p>
          With over <strong>$4 Billion in Sales</strong>, and over <strong>100,000 customers satisfied</strong>, we are the
          Largest Independent Dealership in the country. Customers travel from all over the World to buy from Texas Direct
          Auto. We carry ALL makes and models, and our financing is second to none. More than anything, our Job is to <strong>WOW</strong>          our customers. <strong>WOW</strong> you with selection, financing, quality and service. If you are not WOW'd, then
          we have not done our jobs - not even close. Watch this short <a class="modal-trigger" data-modal="#tda-awesome-video"
            href="javascript:void(0)">Video</a> to learn more.
        </p>
        <p>
          Looking for a car? Call, <a href="/">Click</a> or Stop by our <strong>Stafford Campus</strong> located on <strong>over 70 Acres</strong>          in Southwest Houston. Looking to Sell Us Your Car? We are <strong>conveniently located</strong> in most Suburban
          areas of <strong>Houston and now Dallas</strong>.
        </p>
      </section>
      <section class="full map-bg">
        <section class="full mb-2">
          <h3 class="text-center mt-1">Houston Sell Us Your Car Centers</h3>
        </section>
        <section class="full mb-2">
          <section class="quarter">
            <h6 class="text-center">Clear Lake <small>(League City)</small></h6>
            <a target="_blank" href="/sell-us-your-car/houston/clearlake/">
                      <img src="//www.texasdirectauto.com/static/img/lc_map2.png" alt="League City, TX">
                    </a>
            <p class="text-center">
              300 Gulf Fwy N <br> League City, TX 77573
            </p>
            <p class="text-center">
              Office: <a href="tel:2818542542">281-854-2542</a> <br> Fax: 281-854-2543
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">The Woodlands</h6>
            <a target="_blank" href="/sell-us-your-car/houston/woodlands/">
                      <img src="//www.texasdirectauto.com/static/img/wl_map.png" alt="The Woodlands, TX">
                    </a>
            <p class="text-center">
              26119 I-45 N <br> Spring, TX 77380
            </p>
            <p class="text-center">
              Office: <a href="tel:2818542523">281-854-2523</a><br> Fax: 832-310-2167
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Memorial</h6>
            <a target="_blank" href="/sell-us-your-car/houston/memorial/">
                      <img src="//www.texasdirectauto.com/static/img/h-m-m.png" alt="Memorial, TX">
                    </a>
            <p class="text-center">
              12171 Katy Fwy <br> Houston, TX 77079
            </p>
            <p class="text-center">
              Office: <a href="tel:8324621191">832-462-1191</a> <br> Fax: 832-462-1192
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Katy</h6>
            <a target="_blank" href="/sell-us-your-car/houston/katy/">
                      <img src="//www.texasdirectauto.com/static/img/katy-m.png" alt="Katy, TX">
                    </a>
            <p class="text-center">
              22461 Katy Freeway <br> Katy, TX 77450
            </p>
            <p class="text-center">
              Office: <a href="tel:2819213030">281-921-3030</a><br> Fax: 281-476-7493
            </p>
          </section>
        </section>
        <section class="full mb-2">
          <section class="quarter">
            <h6 class="text-center">Cypress</h6>
            <a target="_blank" href="/sell-us-your-car/houston/cypress/">
                        <img src="//www.texasdirectauto.com/static/img/cypress_map.png" alt="Cypress, TX">
                      </a>
            <p class="text-center">
              19710 Northwest Freeway #400 <br> Houston, TX 77065
            </p>
            <p class="text-center">
              Office: <a href="tel:2818542548">281-854-2548</a> <br> Fax: 281-854-2549
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Kingwood</h6>
            <a target="_blank" href="/sell-us-your-car/houston/kingwood/"><img src="/static/img/kw-main.png" alt="Kingwood, TX"></a>
            <p class="text-center">
              23906 Highway 59 N. <br> Kingwood, TX 77339
            </p>
            <p class="text-center">
              Office: <a href="tel:2819213434">281-921-3434</a><br> Fax: 281-605-5764
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Tomball</h6>
            <a target="_blank" href="/sell-us-your-car/houston/tomball/">
                        <img src="//www.texasdirectauto.com/static/img/tomball_map.png" alt="Tomball, TX">
                      </a>
            <p class="text-center">
              21901 State Highway 249<br> Houston, TX 77070
            </p>
            <p class="text-center">
              Office: <a href="tel:2819213436">281-921-3436</a> <br> Fax: 281-929-0539
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Downtown</h6>
            <a target="_blank" href="/sell-us-your-car/houston/downtown/">
                        <img src="//www.texasdirectauto.com/static/img/downtown.jpg" alt="Houston, TX">
                      </a>
            <p class="text-center">
              1301 Leeland St. <br> Houston, TX 77002
            </p>
            <p class="text-center">
              Office: <a href="tel:2819213597">281-921-3597</a> <br> Fax: 713-456-2835
            </p>
          </section>
        </section>
        <section class="full mb-2">
          <section class="quarter">
            <h6 class="text-center">Galleria <small>(Westheimer)</small></h6>
            <a target="_blank" href="/sell-us-your-car/houston/galleria/">
              <img src="//www.texasdirectauto.com/static/img/westh_map.png" alt="Houston, TX">
            </a>
            <p class="text-center">
              7730 Westheimer Rd
              <br> Houston, TX 77063
            </p>
            <p class="text-center">
              Office:
              <a href="tel:8324304450">832-430-4450</a>
              <br> Fax: 832-460-3128
            </p>
          </section>
        </section>
        <section class="full mb-2">
          <h3 class="text-center">Dallas Sell Us Your Car Centers</h3>
        </section>
        <section class="full mb-2">
          <section class="quarter">
            <h6 class="text-center">Addison</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/addison">
                      <img src="/static/img/addison_map.jpg" alt="Addison, TX">
                    </a>
            <p class="text-center">
              15250 Dallas Parkway #300<br> Dallas, TX 75248
            </p>
            <p class="text-center">
              Office: <a href="tel:4696601620">469-660-1620</a> <br> Fax: 972-920-3204
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Plano</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/plano/">
                      <img src="//www.texasdirectauto.com/static/img/plano_suycc.jpg" alt="Plano, TX">
                    </a>
            <p class="text-center">
              1861 N. Central Expressway <br> Plano, TX 75075
            </p>
            <p class="text-center">
              Office: <a href="tel:469-661-1010">469-661-1010</a> <br> Fax: 469-533-3872
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Irving</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/irving/">
                      <img src="//www.texasdirectauto.com/static/img/dal_irv_map.png" alt="Irving, TX">
                    </a>
            <p class="text-center">
              3578 W. Airport Fwy #120 <br> Irving, TX 75062
            </p>
            <p class="text-center">
              Office: <a href="tel:9725909829">972-590-9829</a> <br> Fax: 972-590-9830
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Arlington</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/arlington/">
                      <img src="//www.texasdirectauto.com/static/img/arlington_map-compressor.png" alt="Arlington, TX">
                    </a>
            <p class="text-center">
              900 E Copeland Rd #260 <br> Arlington, TX 76011
            </p>
            <p class="text-center">
              Office: <a href="tel:9728952634">972-590-9832</a> <br> Fax: 972-692-7343
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">The Colony</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/the-colony/">
                      <img src="//www.texasdirectauto.com/static/img/colony_suycc.jpg" alt="Lewisville, TX">
                    </a>
            <p class="text-center">
              5040 TX-121 Suite 200 <br> Lewisville, TX 75056
            </p>
            <p class="text-center">
              Office: <a href="tel:469-660-1610">469-660-1610</a> <br> Fax: 281-605-5764
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Carrollton</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/carrollton">
                      <img src="//www.texasdirectauto.com/static/img/carrollton_map.png" alt="Carrollton, TX">
                    </a>
            <p class="text-center">
              1800 N Interstate 35E <br> Carrollton, TX 75006
            </p>
            <p class="text-center">
              Office: <a href="tel:469-660-1609">469-660-1609</a> <br> Fax: 469-574-7086
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">West Plano</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/west-plano">
                      <img src="//www.texasdirectauto.com/static/img/suyc-west-plano-map.jpg" alt="West Plano, TX">
                    </a>
            <p class="text-center">
              5969 Dallas Pkwy <br> Plano, TX 75093
            </p>
            <p class="text-center">
              Office: <a href="tel:469-660-1611">469-660-1611</a> <br> Fax: 972-767-5077
            </p>
          </section>
          <section class="quarter">
            <h6 class="text-center">Grapvine</h6>
            <a target="_blank" href="/sell-us-your-car/dallas/grapevine">
                      <img src="//www.texasdirectauto.com/static/img/suyc-grapevine-map.png" alt="Grapevine, TX">
                    </a>
            <p class="text-center">
              1000 W State Highway 114 <br> Grapevine, TX 76051
            </p>
            <p class="text-center">
              Office: <a href="tel:817-442-7100">817-442-7100</a> <br> Fax: 817-796-1860
            </p>
          </section>
        </section>
      </section>
    </div>
  
  </section>
</div>
<div class="modal" id="tda-awesome-video">
  <a href="javascript:void(0)" class="deactivate">x</a>
  <div class="tda-modal-inner">
    <div class="tda-video">
      <iframe id="player1" width="888" height="498" src="https://www.youtube.com/embed/GVgqdKMKZzE?enablejsapi=1" frameborder="0"
        allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="modal" id="select_location">
  <div class="tda-modal-inner small">
    <div class="modal-content">
      <h5>Choose A Location:</h5>
      <ul class="half">
        <li class="title">Houston Centers</li>
        <li><a data-store="stafford" class="location_selector" href="javascript:void(0)">Stafford</a></li>
        <li><a data-store="cllc" class="location_selector" href="javascript:void(0)">Clear Lake</a></li>
        <li><a data-store="woods" href="javascript:void(0)" class="location_selector">Woodlands</a></li>
        <li><a data-store="memorial" href="javascript:void(0)" class="location_selector">Memorial</a></li>
        <li><a data-store="katy" href="javascript:void(0)" class="location_selector">Katy</a></li>
        <li><a data-store="cypress" href="javascript:void(0)" class="location_selector">Cypress</a></li>
        <li><a data-store="kingwood" href="javascript:void(0)" class="location_selector">Kingwood</a></li>
      </ul>
      <ul class="half">
        <li class="title">Dallas Centers</li>
        <li><a data-store="grapevine" href="javascript:void(0)" class="location_selector">Grapevine</a></li>
        <li><a data-store="plano" class="location_selector" href="javascript:void(0)">Plano</a></li>
        <li><a data-store="irving" class="location_selector" href="javascript:void(0)">Irving</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="drop-form" id="search-makes">
	  <div class="content">
    <!-- <div class="df-close" id="close"><i class="icon-close"></i></div> -->
    <div class="bg-white">
      <div class="df-menu closer">
        <h6 class="df-close">Cancel Search<span id="closer"><i class="icon-close"></i></span></h6>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Acura-types">Acura <span>( 30 )</span></h6>
        <ul id="Acura-types" class="df-makes-list">
          <li><a href="/for-sale/Acura/">See all Acura <span>( 30 )</span></a></li>
             
          <li><a href="/for-sale/Acura-MDX/">MDX <span>( 15 )</span></a></li>
            
          <li><a href="/for-sale/Acura-RDX/">RDX <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Acura-RLX/">RLX <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Acura-TL/">TL <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Acura-TLX/">TLX <span>( 4 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#AlfaRomeo-types">Alfa Romeo <span>( 1 )</span></h6>
        <ul id="AlfaRomeo-types" class="df-makes-list">
          <li><a href="/for-sale/Alfa%20Romeo/">See all Alfa Romeo <span>( 1 )</span></a></li>
             
          <li><a href="/for-sale/Alfa%20Romeo-Giulia/">Giulia <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#AstonMartin-types">Aston Martin <span>( 1 )</span></h6>
        <ul id="AstonMartin-types" class="df-makes-list">
          <li><a href="/for-sale/Aston%20Martin/">See all Aston Martin <span>( 1 )</span></a></li>
             
          <li><a href="/for-sale/Aston%20Martin-Vantage/">Vantage <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Audi-types">Audi <span>( 97 )</span></h6>
        <ul id="Audi-types" class="df-makes-list">
          <li><a href="/for-sale/Audi/">See all Audi <span>( 97 )</span></a></li>
           
          <li><a href="/for-sale/Audi-A3/">A3 <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Audi-A4/">A4 <span>( 11 )</span></a></li>
            
          <li><a href="/for-sale/Audi-A5/">A5 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Audi-A6/">A6 <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Audi-A7/">A7 <span>( 7 )</span></a></li>
            
          <li><a href="/for-sale/Audi-A8/">A8 <span>( 4 )</span></a></li>
              
          <li><a href="/for-sale/Audi-Q3/">Q3 <span>( 8 )</span></a></li>
            
          <li><a href="/for-sale/Audi-Q5/">Q5 <span>( 14 )</span></a></li>
            
          <li><a href="/for-sale/Audi-Q7/">Q7 <span>( 16 )</span></a></li>
            
          <li><a href="/for-sale/Audi-RS7/">RS7 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Audi-S3/">S3 <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Audi-S4/">S4 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Audi-S5/">S5 <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Audi-S6/">S6 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Audi-SQ5/">SQ5 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Audi-TT/">TT <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#BMW-types">BMW <span>( 94 )</span></h6>
        <ul id="BMW-types" class="df-makes-list">
          <li><a href="/for-sale/BMW/">See all BMW <span>( 94 )</span></a></li>
           
          <li><a href="/for-sale/BMW-2Series/">2Series <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/BMW-3Series/">3Series <span>( 17 )</span></a></li>
            
          <li><a href="/for-sale/BMW-4Series/">4Series <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/BMW-5Series/">5Series <span>( 24 )</span></a></li>
            
          <li><a href="/for-sale/BMW-6Series/">6Series <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/BMW-7Series/">7Series <span>( 3 )</span></a></li>
              
          <li><a href="/for-sale/BMW-i3/">i3 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/BMW-i8/">i8 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/BMW-M3/">M3 <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/BMW-M4/">M4 <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/BMW-M5/">M5 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/BMW-M6/">M6 <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/BMW-X1/">X1 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/BMW-X3/">X3 <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/BMW-X5/">X5 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/BMW-X6/">X6 <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Buick-types">Buick <span>( 33 )</span></h6>
        <ul id="Buick-types" class="df-makes-list">
          <li><a href="/for-sale/Buick/">See all Buick <span>( 33 )</span></a></li>
             
          <li><a href="/for-sale/Buick-Enclave/">Enclave <span>( 16 )</span></a></li>
            
          <li><a href="/for-sale/Buick-Encore/">Encore <span>( 8 )</span></a></li>
            
          <li><a href="/for-sale/Buick-Lacrosse/">Lacrosse <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Buick-Regal/">Regal <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Buick-Verano/">Verano <span>( 2 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Cadillac-types">Cadillac <span>( 83 )</span></h6>
        <ul id="Cadillac-types" class="df-makes-list">
          <li><a href="/for-sale/Cadillac/">See all Cadillac <span>( 83 )</span></a></li>
           
          <li><a href="/for-sale/Cadillac-ATS/">ATS <span>( 12 )</span></a></li>
              
          <li><a href="/for-sale/Cadillac-CTS/">CTS <span>( 11 )</span></a></li>
            
          <li><a href="/for-sale/Cadillac-ELR/">ELR <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Cadillac-Escalade/">Escalade <span>( 41 )</span></a></li>
            
          <li><a href="/for-sale/Cadillac-SRX/">SRX <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Cadillac-XTS/">XTS <span>( 8 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Chevrolet-types">Chevrolet <span>( 325 )</span></h6>
        <ul id="Chevrolet-types" class="df-makes-list">
          <li><a href="/for-sale/Chevrolet/">See all Chevrolet <span>( 325 )</span></a></li>
           
          <li><a href="/for-sale/Chevrolet-Camaro/">Camaro <span>( 43 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Captiva%20Sport/">Captiva Sport <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Colorado/">Colorado <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Corvette/">Corvette <span>( 45 )</span></a></li>
              
          <li><a href="/for-sale/Chevrolet-Cruze/">Cruze <span>( 11 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Equinox/">Equinox <span>( 12 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Express/">Express <span>( 22 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Impala/">Impala <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Malibu/">Malibu <span>( 15 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Silverado%201500/">Silverado 1500 <span>( 59 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Silverado%202500/">Silverado 2500 <span>( 8 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Silverado%203500/">Silverado 3500 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Sonic/">Sonic <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Spark/">Spark <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Suburban/">Suburban <span>( 35 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Tahoe/">Tahoe <span>( 38 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Traverse/">Traverse <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Trax/">Trax <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Chevrolet-Volt/">Volt <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Chrysler-types">Chrysler <span>( 34 )</span></h6>
        <ul id="Chrysler-types" class="df-makes-list">
          <li><a href="/for-sale/Chrysler/">See all Chrysler <span>( 34 )</span></a></li>
           
          <li><a href="/for-sale/Chrysler-200%20Series/">200 Series <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Chrysler-300%20Series/">300 Series <span>( 11 )</span></a></li>
              
          <li><a href="/for-sale/Chrysler-Pacifica/">Pacifica <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Chrysler-Town%20%26%20Country/">Town &amp; Country <span>( 12 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Dodge-types">Dodge <span>( 183 )</span></h6>
        <ul id="Dodge-types" class="df-makes-list">
          <li><a href="/for-sale/Dodge/">See all Dodge <span>( 183 )</span></a></li>
           
          <li><a href="/for-sale/Dodge-Avenger/">Avenger <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Caravan/">Caravan <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Challenger/">Challenger <span>( 30 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Charger/">Charger <span>( 11 )</span></a></li>
              
          <li><a href="/for-sale/Dodge-Dart/">Dart <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Durango/">Durango <span>( 17 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Grand%20Caravan/">Grand Caravan <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Journey/">Journey <span>( 12 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Ram%201500/">Ram 1500 <span>( 64 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Ram%202500/">Ram 2500 <span>( 19 )</span></a></li>
            
          <li><a href="/for-sale/Dodge-Ram%203500/">Ram 3500 <span>( 7 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Fiat-types">Fiat <span>( 5 )</span></h6>
        <ul id="Fiat-types" class="df-makes-list">
          <li><a href="/for-sale/Fiat/">See all Fiat <span>( 5 )</span></a></li>
           
          <li><a href="/for-sale/Fiat-500/">500 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Fiat-500X/">500X <span>( 3 )</span></a></li>
             
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Ford-types">Ford <span>( 335 )</span></h6>
        <ul id="Ford-types" class="df-makes-list">
          <li><a href="/for-sale/Ford/">See all Ford <span>( 335 )</span></a></li>
           
          <li><a href="/for-sale/Ford-CMax/">CMax <span>( 2 )</span></a></li>
              
          <li><a href="/for-sale/Ford-Edge/">Edge <span>( 22 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Escape/">Escape <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/Ford-ESeries%20Van/">ESeries Van <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Expedition/">Expedition <span>( 27 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Explorer/">Explorer <span>( 32 )</span></a></li>
            
          <li><a href="/for-sale/Ford-F150/">F150 <span>( 105 )</span></a></li>
            
          <li><a href="/for-sale/Ford-F250/">F250 <span>( 25 )</span></a></li>
            
          <li><a href="/for-sale/Ford-F350/">F350 <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/Ford-F450/">F450 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Fiesta/">Fiesta <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Focus/">Focus <span>( 22 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Fusion/">Fusion <span>( 16 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Mustang/">Mustang <span>( 37 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Taurus/">Taurus <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Thunderbird/">Thunderbird <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Transit/">Transit <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Ford-Transit%20Connect/">Transit Connect <span>( 2 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#GMC-types">GMC <span>( 128 )</span></h6>
        <ul id="GMC-types" class="df-makes-list">
          <li><a href="/for-sale/GMC/">See all GMC <span>( 128 )</span></a></li>
           
          <li><a href="/for-sale/GMC-Acadia/">Acadia <span>( 30 )</span></a></li>
            
          <li><a href="/for-sale/GMC-Canyon/">Canyon <span>( 3 )</span></a></li>
              
          <li><a href="/for-sale/GMC-Savana/">Savana <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/GMC-Sierra%201500/">Sierra 1500 <span>( 36 )</span></a></li>
            
          <li><a href="/for-sale/GMC-Sierra%202500/">Sierra 2500 <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/GMC-Sierra%203500/">Sierra 3500 <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/GMC-Terrain/">Terrain <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/GMC-Yukon/">Yukon <span>( 30 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Harley-Davidson-types">Harley-Davidson <span>( 1 )</span></h6>
        <ul id="Harley-Davidson-types" class="df-makes-list">
          <li><a href="/for-sale/Harley-Davidson/">See all Harley-Davidson <span>( 1 )</span></a></li>
             
          <li><a href="/for-sale/Harley-Davidson-FLSTC%20Heritage%20Softail%20Classic/">FLSTC Heritage Softail Classic <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Honda-types">Honda <span>( 91 )</span></h6>
        <ul id="Honda-types" class="df-makes-list">
          <li><a href="/for-sale/Honda/">See all Honda <span>( 91 )</span></a></li>
           
          <li><a href="/for-sale/Honda-Accord/">Accord <span>( 24 )</span></a></li>
            
          <li><a href="/for-sale/Honda-Civic/">Civic <span>( 11 )</span></a></li>
              
          <li><a href="/for-sale/Honda-CRV/">CRV <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Honda-Fit/">Fit <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Honda-HRV/">HRV <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Honda-Odyssey/">Odyssey <span>( 17 )</span></a></li>
            
          <li><a href="/for-sale/Honda-Pilot/">Pilot <span>( 22 )</span></a></li>
            
          <li><a href="/for-sale/Honda-Ridgeline/">Ridgeline <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Honda-S2000/">S2000 <span>( 2 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Hyundai-types">Hyundai <span>( 64 )</span></h6>
        <ul id="Hyundai-types" class="df-makes-list">
          <li><a href="/for-sale/Hyundai/">See all Hyundai <span>( 64 )</span></a></li>
           
          <li><a href="/for-sale/Hyundai-Accent/">Accent <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Azera/">Azera <span>( 3 )</span></a></li>
              
          <li><a href="/for-sale/Hyundai-Elantra/">Elantra <span>( 16 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Equus/">Equus <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Genesis/">Genesis <span>( 7 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Santa%20Fe/">Santa Fe <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Sonata/">Sonata <span>( 16 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Tucson/">Tucson <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Hyundai-Veloster/">Veloster <span>( 4 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Infiniti-types">Infiniti <span>( 76 )</span></h6>
        <ul id="Infiniti-types" class="df-makes-list">
          <li><a href="/for-sale/Infiniti/">See all Infiniti <span>( 76 )</span></a></li>
             
          <li><a href="/for-sale/Infiniti-EX/">EX <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-FX/">FX <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-G37/">G37 <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-JX/">JX <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-M37/">M37 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-Q50/">Q50 <span>( 8 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-Q60/">Q60 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-Q70/">Q70 <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-QX30/">QX30 <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-QX50/">QX50 <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-QX56/">QX56 <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-QX60/">QX60 <span>( 19 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-QX70/">QX70 <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Infiniti-QX80/">QX80 <span>( 20 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Jaguar-types">Jaguar <span>( 8 )</span></h6>
        <ul id="Jaguar-types" class="df-makes-list">
          <li><a href="/for-sale/Jaguar/">See all Jaguar <span>( 8 )</span></a></li>
             
          <li><a href="/for-sale/Jaguar-FType/">FType <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Jaguar-XE/">XE <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Jaguar-XF/">XF <span>( 3 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Jeep-types">Jeep <span>( 184 )</span></h6>
        <ul id="Jeep-types" class="df-makes-list">
          <li><a href="/for-sale/Jeep/">See all Jeep <span>( 184 )</span></a></li>
           
          <li><a href="/for-sale/Jeep-Cherokee/">Cherokee <span>( 18 )</span></a></li>
            
          <li><a href="/for-sale/Jeep-Compass/">Compass <span>( 15 )</span></a></li>
              
          <li><a href="/for-sale/Jeep-Grand%20Cherokee/">Grand Cherokee <span>( 62 )</span></a></li>
            
          <li><a href="/for-sale/Jeep-Patriot/">Patriot <span>( 15 )</span></a></li>
            
          <li><a href="/for-sale/Jeep-Renegade/">Renegade <span>( 17 )</span></a></li>
            
          <li><a href="/for-sale/Jeep-Wrangler/">Wrangler <span>( 57 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Kia-types">Kia <span>( 46 )</span></h6>
        <ul id="Kia-types" class="df-makes-list">
          <li><a href="/for-sale/Kia/">See all Kia <span>( 46 )</span></a></li>
           
          <li><a href="/for-sale/Kia-Cadenza/">Cadenza <span>( 1 )</span></a></li>
              
          <li><a href="/for-sale/Kia-Forte/">Forte <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Kia-Optima/">Optima <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Kia-Sedona/">Sedona <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Kia-Sorento/">Sorento <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Kia-Soul/">Soul <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Kia-Sportage/">Sportage <span>( 9 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#LandRover-types">Land Rover <span>( 20 )</span></h6>
        <ul id="LandRover-types" class="df-makes-list">
          <li><a href="/for-sale/Land%20Rover/">See all Land Rover <span>( 20 )</span></a></li>
             
          <li><a href="/for-sale/Land%20Rover-Discovery/">Discovery <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Land%20Rover-Discovery%20Sport/">Discovery Sport <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Land%20Rover-Evoque/">Evoque <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Land%20Rover-LR4/">LR4 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Land%20Rover-Range%20Rover/">Range Rover <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Land%20Rover-Range%20Rover%20Sport/">Range Rover Sport <span>( 3 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Lexus-types">Lexus <span>( 118 )</span></h6>
        <ul id="Lexus-types" class="df-makes-list">
          <li><a href="/for-sale/Lexus/">See all Lexus <span>( 118 )</span></a></li>
             
          <li><a href="/for-sale/Lexus-CT/">CT <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-CT%20200h/">CT 200h <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-ES/">ES <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-ES%20350/">ES 350 <span>( 12 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-ES300h/">ES300h <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-GS/">GS <span>( 11 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-GX/">GX <span>( 18 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-IS/">IS <span>( 27 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-IS200t/">IS200t <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-LS/">LS <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-LX/">LX <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-NX200t/">NX200t <span>( 8 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-RC/">RC <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-RC%20F/">RC F <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-RC350/">RC350 <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Lexus-RX/">RX <span>( 17 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Lincoln-types">Lincoln <span>( 29 )</span></h6>
        <ul id="Lincoln-types" class="df-makes-list">
          <li><a href="/for-sale/Lincoln/">See all Lincoln <span>( 29 )</span></a></li>
           
          <li><a href="/for-sale/Lincoln-Continental/">Continental <span>( 2 )</span></a></li>
              
          <li><a href="/for-sale/Lincoln-MKC/">MKC <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Lincoln-MKS/">MKS <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Lincoln-MKT/">MKT <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Lincoln-MKX/">MKX <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Lincoln-MKZ-Zephyr/">MKZ/Zephyr <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Lincoln-Navigator/">Navigator <span>( 12 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Lotus-types">Lotus <span>( 3 )</span></h6>
        <ul id="Lotus-types" class="df-makes-list">
          <li><a href="/for-sale/Lotus/">See all Lotus <span>( 3 )</span></a></li>
             
          <li><a href="/for-sale/Lotus-Evora/">Evora <span>( 3 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Maserati-types">Maserati <span>( 6 )</span></h6>
        <ul id="Maserati-types" class="df-makes-list">
          <li><a href="/for-sale/Maserati/">See all Maserati <span>( 6 )</span></a></li>
             
          <li><a href="/for-sale/Maserati-Ghibli/">Ghibli <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Maserati-Quattroporte/">Quattroporte <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Mazda-types">Mazda <span>( 42 )</span></h6>
        <ul id="Mazda-types" class="df-makes-list">
          <li><a href="/for-sale/Mazda/">See all Mazda <span>( 42 )</span></a></li>
             
          <li><a href="/for-sale/Mazda-CX3/">CX3 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mazda-CX5/">CX5 <span>( 18 )</span></a></li>
            
          <li><a href="/for-sale/Mazda-CX9/">CX9 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Mazda-Mazda2/">Mazda2 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Mazda-Mazda3/">Mazda3 <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Mazda-Mazda5/">Mazda5 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mazda-Mazda6/">Mazda6 <span>( 12 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Mercedes-Benz-types">Mercedes-Benz <span>( 175 )</span></h6>
        <ul id="Mercedes-Benz-types" class="df-makes-list">
          <li><a href="/for-sale/Mercedes-Benz/">See all Mercedes-Benz <span>( 175 )</span></a></li>
           
          <li><a href="/for-sale/Mercedes-Benz-CClass/">CClass <span>( 30 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-CLAClass/">CLAClass <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-CLClass/">CLClass <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-CLSClass/">CLSClass <span>( 10 )</span></a></li>
              
          <li><a href="/for-sale/Mercedes-Benz-EClass/">EClass <span>( 65 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GClass/">GClass <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GLAClass/">GLAClass <span>( 14 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GLCClass/">GLCClass <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GLClass/">GLClass <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GLEClass/">GLEClass <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GLKClass/">GLKClass <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-GLSClass/">GLSClass <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-MClass/">MClass <span>( 19 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-Metris/">Metris <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-SClass/">SClass <span>( 7 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-SLClass/">SLClass <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-SLKClass/">SLKClass <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Mercedes-Benz-Sprinter/">Sprinter <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Mini-types">Mini <span>( 5 )</span></h6>
        <ul id="Mini-types" class="df-makes-list">
          <li><a href="/for-sale/Mini/">See all Mini <span>( 5 )</span></a></li>
           
          <li><a href="/for-sale/Mini-Cooper/">Cooper <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Mini-Cooper%20S/">Cooper S <span>( 1 )</span></a></li>
             
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Mitsubishi-types">Mitsubishi <span>( 8 )</span></h6>
        <ul id="Mitsubishi-types" class="df-makes-list">
          <li><a href="/for-sale/Mitsubishi/">See all Mitsubishi <span>( 8 )</span></a></li>
             
          <li><a href="/for-sale/Mitsubishi-iMiEV/">iMiEV <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Mitsubishi-Outlander/">Outlander <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Mitsubishi-Outlander%20Sport/">Outlander Sport <span>( 4 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Nissan-types">Nissan <span>( 163 )</span></h6>
        <ul id="Nissan-types" class="df-makes-list">
          <li><a href="/for-sale/Nissan/">See all Nissan <span>( 163 )</span></a></li>
           
          <li><a href="/for-sale/Nissan-370Z/">370Z <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Altima/">Altima <span>( 28 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Armada/">Armada <span>( 5 )</span></a></li>
              
          <li><a href="/for-sale/Nissan-Frontier/">Frontier <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Juke/">Juke <span>( 14 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Leaf/">Leaf <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Maxima/">Maxima <span>( 19 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Murano/">Murano <span>( 24 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Pathfinder/">Pathfinder <span>( 15 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Quest/">Quest <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Rogue/">Rogue <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Sentra/">Sentra <span>( 15 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Titan/">Titan <span>( 10 )</span></a></li>
            
          <li><a href="/for-sale/Nissan-Versa/">Versa <span>( 2 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Porsche-types">Porsche <span>( 44 )</span></h6>
        <ul id="Porsche-types" class="df-makes-list">
          <li><a href="/for-sale/Porsche/">See all Porsche <span>( 44 )</span></a></li>
           
          <li><a href="/for-sale/Porsche-911/">911 <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Porsche-Boxster/">Boxster <span>( 7 )</span></a></li>
            
          <li><a href="/for-sale/Porsche-Cayenne/">Cayenne <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Porsche-Cayman/">Cayman <span>( 5 )</span></a></li>
              
          <li><a href="/for-sale/Porsche-Macan/">Macan <span>( 8 )</span></a></li>
            
          <li><a href="/for-sale/Porsche-Panamera/">Panamera <span>( 9 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Ram-types">Ram <span>( 5 )</span></h6>
        <ul id="Ram-types" class="df-makes-list">
          <li><a href="/for-sale/Ram/">See all Ram <span>( 5 )</span></a></li>
           
          <li><a href="/for-sale/Ram-1500/">1500 <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Ram-3500/">3500 <span>( 1 )</span></a></li>
              
          <li><a href="/for-sale/Ram-ProMaster/">ProMaster <span>( 2 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Scion-types">Scion <span>( 4 )</span></h6>
        <ul id="Scion-types" class="df-makes-list">
          <li><a href="/for-sale/Scion/">See all Scion <span>( 4 )</span></a></li>
             
          <li><a href="/for-sale/Scion-iM/">iM <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Scion-tC/">tC <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Scion-xD/">xD <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Smart-types">Smart <span>( 1 )</span></h6>
        <ul id="Smart-types" class="df-makes-list">
          <li><a href="/for-sale/Smart/">See all Smart <span>( 1 )</span></a></li>
             
          <li><a href="/for-sale/Smart-Fortwo/">Fortwo <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Subaru-types">Subaru <span>( 28 )</span></h6>
        <ul id="Subaru-types" class="df-makes-list">
          <li><a href="/for-sale/Subaru/">See all Subaru <span>( 28 )</span></a></li>
           
          <li><a href="/for-sale/Subaru-BRZ/">BRZ <span>( 1 )</span></a></li>
              
          <li><a href="/for-sale/Subaru-Crosstrek/">Crosstrek <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Subaru-Forester/">Forester <span>( 3 )</span></a></li>
            
          <li><a href="/for-sale/Subaru-Impreza/">Impreza <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Subaru-Legacy/">Legacy <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Subaru-Outback/">Outback <span>( 6 )</span></a></li>
            
          <li><a href="/for-sale/Subaru-WRX/">WRX <span>( 7 )</span></a></li>
            
          <li><a href="/for-sale/Subaru-XV%20Crosstrek/">XV Crosstrek <span>( 6 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Tesla-types">Tesla <span>( 16 )</span></h6>
        <ul id="Tesla-types" class="df-makes-list">
          <li><a href="/for-sale/Tesla/">See all Tesla <span>( 16 )</span></a></li>
             
          <li><a href="/for-sale/Tesla-Model%20S/">Model S <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/Tesla-Model%20X/">Model X <span>( 3 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Toyota-types">Toyota <span>( 221 )</span></h6>
        <ul id="Toyota-types" class="df-makes-list">
          <li><a href="/for-sale/Toyota/">See all Toyota <span>( 221 )</span></a></li>
           
          <li><a href="/for-sale/Toyota-4Runner/">4Runner <span>( 34 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Avalon/">Avalon <span>( 4 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Camry/">Camry <span>( 33 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Corolla/">Corolla <span>( 15 )</span></a></li>
              
          <li><a href="/for-sale/Toyota-FJ%20Cruiser/">FJ Cruiser <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Highlander/">Highlander <span>( 15 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Land%20Cruiser/">Land Cruiser <span>( 2 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Prius/">Prius <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Prius%20V/">Prius V <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-RAV4/">RAV4 <span>( 20 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Sequoia/">Sequoia <span>( 9 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Sienna/">Sienna <span>( 13 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Tacoma/">Tacoma <span>( 27 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Tundra/">Tundra <span>( 41 )</span></a></li>
            
          <li><a href="/for-sale/Toyota-Yaris/">Yaris <span>( 1 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Volkswagen-types">Volkswagen <span>( 61 )</span></h6>
        <ul id="Volkswagen-types" class="df-makes-list">
          <li><a href="/for-sale/Volkswagen/">See all Volkswagen <span>( 61 )</span></a></li>
           
          <li><a href="/for-sale/Volkswagen-BeetleNew/">BeetleNew <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Volkswagen-CC/">CC <span>( 2 )</span></a></li>
              
          <li><a href="/for-sale/Volkswagen-Golf/">Golf <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Volkswagen-Jetta/">Jetta <span>( 11 )</span></a></li>
            
          <li><a href="/for-sale/Volkswagen-Passat/">Passat <span>( 32 )</span></a></li>
            
          <li><a href="/for-sale/Volkswagen-Tiguan/">Tiguan <span>( 5 )</span></a></li>
            
          <li><a href="/for-sale/Volkswagen-Touareg/">Touareg <span>( 5 )</span></a></li>
           
        </ul>
      </div>
      
      <div class="df-menu">
        <h6 class="df-m-trigger" data-list="#Volvo-types">Volvo <span>( 11 )</span></h6>
        <ul id="Volvo-types" class="df-makes-list">
          <li><a href="/for-sale/Volvo/">See all Volvo <span>( 11 )</span></a></li>
             
          <li><a href="/for-sale/Volvo-V60/">V60 <span>( 1 )</span></a></li>
            
          <li><a href="/for-sale/Volvo-XC90/">XC90 <span>( 10 )</span></a></li>
           
        </ul>
      </div>
      
    </div>
  </div>

</div>

<div class="drop-form" id="finance-form">
  <div class="content">
    <div class="bg-white">
      <div class="df-menu closer">
        <h6 class="df-close">Cancel Finance<span id="closer"><i class="icon-close"></i></span></h6>
      </div>
      <div class="df-menu">
        <iframe id='tda-kiosk__finance-form' src="javascript:void(0)" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="drop-form" id="pmt-search">
  <div class="content">
    <!-- <div class="df-close" id="close"><i class="icon-close"></i></div> -->
    <div class="bg-white">
      <div class="df-menu closer">
        <h6 class="df-close">Cancel Search<span id="closer"><i class="icon-close"></i></span></h6>
      </div>
      <div class="df-menu"><a href="/for-sale/payment%20%24200/">$200/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24300/">$300/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24400/">$400/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24500/">$500/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24600/">$600/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24700/">$700/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24800/">$800/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%24900/">$900/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%241000/">$1000/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%241100/">$1100/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%241200/">$1200/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
      <div class="df-menu"><a href="/for-sale/payment%20%241300/">$1300/mo or less <span><i class="icon-keyboard-arrow-right"></i></span></a></div>
    </div>
  </div>
</div>



<?php get_footer(); ?>
<script async src="https://www.youtube.com/iframe_api"></script>
<script>

  jQuery('#suycUpload').submit(function (e) {
    jQuery('#btnSUYC').html('<i class="icon-settings i__spin"></i> Processing...');
    e.preventDefault();
    submitTrade(function (response) {
      var data = JSON.parse(response)
      analytics.track('Sell My Car', {
        action: 'Sell My Car Submit',
        category: 'Homepage',
        label: 'Sell My Car',
        year: data.year,
        make: data.make,
        model: data.model,
        vin: data.vin,
        color: data.color,
        price: data.expPrice,
        email: data.email,
        phone: data.cellPhone.replace(/[^0-9]/g, '')
      });
    });
  });

  jQuery('#locationSelect').on('change', function (e) {
    var location = $(this).val();
    jQuery('.location').removeClass('active');
    jQuery('.locationInfo').removeClass('active');
    jQuery('#' + location + 'Info').addClass('active');
    jQuery('#' + location).addClass('active');
    e.preventDefault();
  });

  jQuery('.location_selector').on('click', function (e) {
    var location = $(this).data('store');
    jQuery('.location').removeClass('active');
    jQuery('.locationInfo').removeClass('active');
    jQuery('#' + location + 'Info').addClass('active');
    jQuery('#' + location).addClass('active');
    jQuery('.modal').removeClass('is-visible');
    e.preventDefault();
  });

  jQuery('.car-selfie').click(function () {
    $('#up-selfie').click();
  });

  var selfies = [];

  jQuery('.df-trigger').on('click', function () {
    var menu = jQuery(this).data('menu');
    if (menu == '#finance-form') {
      var finance_form = jQuery('#tda-kiosk__finance-form').attr('src');
      if (finance_form == 'javascript:void(0)') {
        jQuery('#tda-kiosk__finance-form').attr('src', 'https://www.routeone.net/XRD/turnKeyOcaStart.do?&rteOneDmsId=F00TD2&dealerId=HZ7GJ&dealership_name=Texas+Direct+Auto&dealership_address=12053+Southwest+FWY+(Highway+59)&dealership_city=Stafford&dealership_state=TX&dealership_zip=77477&dealership_phone=(832)+241-0017&buyOrLease=1&dealership_email=sales@texasdirectauto.com&dealership_contact_name=Texas+Direct+Auto');
      }
    }
    jQuery(menu).addClass('active');
    jQuery('body').addClass('df-lock');
    jQuery('html').addClass('df-lock');
  });

  jQuery('.df-m-trigger').on('click', function () {
    var list = $(this).data('list');
    if (jQuery(list).css('display') == 'none') {
      jQuery('.df-makes-list').slideUp('slow');
      jQuery(list).slideToggle('slow');
    } else {
      jQuery(list).slideToggle('slow');
    }
  });

  jQuery('.df-close').on('click', function () {
    jQuery('.drop-form').removeClass('active');
    jQuery('body').removeClass('df-lock');
    jQuery('html').removeClass('df-lock');
  });
  jQuery('.notification__close').on('click', function () {
    jQuery('.wrapper').removeClass('notification__attached')
  });

</script>



