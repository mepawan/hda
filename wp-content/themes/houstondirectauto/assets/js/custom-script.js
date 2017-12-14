/* jQuery('#suycUpload').submit(function (e) {
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
  */
  