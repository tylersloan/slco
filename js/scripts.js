$(document).ready(function() {

  $('.launch-popup').magnificPopup({
    type:'inline',
    closeBtnInside: true,
    closeOnBgClick: true,
    midClick: true,
    disableOn: 481
  });

  $('.chosen').chosen({
    "disable_search": true
  });
  
  $('.mobile-menu-icon').on('click', function(){
    $('header').toggleClass('open');
  });

  $('.contact-link').on('click', function(){
    $('header').removeClass('open')
  })

  $('.tab').on('click', function(){
    var id = $(this).attr('id');

    $('.tab').removeClass('selected');
    $(this).addClass('selected');
    $('.slide').removeClass('visible');
    $('.' + id).addClass('visible');
  });

  var windowWidth = $(window).width();
  var li = $('.tab')
  var liLength = li.length
  var liHeight = $('.js-slides').height()
  var multiplier = liLength + 1
  var ulHeight = multiplier*liHeight
  console.log(multiplier + ulHeight)

  if(windowWidth < 481) {
    
    $('#x').on('click', function(){

      if( $('#x').hasClass('js-show-options') ) {
        console.log('show options clicked');
        $(this).removeClass('js-show-options');
        $('.js-slides').css({"height": ulHeight});
      }
      else {
        console.log('hide options clicked');
        $(this).addClass('js-show-options');
        $('.js-slides').css({"height": liHeight});
      };

    });

    $('.tab').on('click', function(){
      $('#x').addClass('js-show-options');
      $('.js-slides').css({"height": liHeight});
    });
  };

  // multiple locations
  function initialize() {
    var mapOptions = {
      zoom: 9,
      center: new google.maps.LatLng(34.840954, -82.364133)
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'),
                                  mapOptions);

    setMarkers(map, offices);
  }

  /**
   * Data for the markers consisting of a name, a LatLng and a zIndex for
   * the order in which these markers should display on top of each
   * other.
   */
  var offices = [
    ['Greenville Office', 34.840954, -82.364133, 4],
    ['West Greenville Office', 34.888942, -82.466820, 2],
    ['Clemson office', 34.704724, -82.833379, 3],
    ['North Greenville', 35.027710, -82.500744, 4],
    ['Anderson', 34.478281, -82.598196, 5]
  ];

  function setMarkers(map, locations) {
    // Add markers to the map

    // Marker sizes are expressed as a Size of X,Y
    // where the origin of the image (0,0) is located
    // in the top left of the image.

    // Origins, anchor positions and coordinates of the marker
    // increase in the X direction to the right and in
    // the Y direction down.
    // var image = {
    //   url: '../images/map-marker.svg',
    //   // This marker is 55 pixels wide by 77 pixels tall.
    //   size: new google.maps.Size(55, 77),
    //   // The origin for this image is 0,0.
    //   origin: new google.maps.Point(0,0),
    //   // The anchor for this image is the base of the flagpole at 0,77.
    //   anchor: new google.maps.Point(0, 77)
    // };
    // Shapes define the clickable region of the icon.
    // The type defines an HTML &lt;area&gt; element 'poly' which
    // traces out a polygon as a series of X,Y points. The final
    // coordinate closes the poly by connecting to the first
    // coordinate.
    var shape = {
        coord: [1, 1, 1, 20, 18, 20, 18 , 1],
        type: 'poly'
    };
    for (var i = 0; i < locations.length; i++) {
      var office = locations[i];
      var myLatLng = new google.maps.LatLng(office[1], office[2]);
      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: office[0],
          zIndex: office[3]
      });
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);  
});