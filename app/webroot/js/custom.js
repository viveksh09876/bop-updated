
/* Scroll page to given element*/

function scrollToAnchor(elem){
	
    var aTag = $(elem);
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    
}

function showLoading(divid, Imgpath)
{
	$(divid).html('<div style="height:350px; margin-top:170px;text-align:center;"><img src="' + Imgpath + '" alt="Loading..."/></div>')	
}

function initialize(location_id, map_canvas_id) {

  var markers = [];
   var latLng = new google.maps.LatLng(-34.397, 150.644);
  var map = new google.maps.Map(document.getElementById(map_canvas_id), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-33.8902, 151.1759),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById(location_id));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
	
		
	
  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  // [END region_getplaces]
  
  
  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
  
}

function show_help(url)
{
	$.fancybox.open({
		'type' : 'ajax',
		'href' : url,
		'autoSize' : false,
		'closeBtn' : false, 
		'width' : '599',
		'height' : '400'
	});
}

function open_lightbox(url, width, height)
{
	$.fancybox.close();
	var temp = "yes";
	
	if(arguments[3])
		temp = arguments[3];
		
	setTimeout(function(){
		$.fancybox.open({
		'type' : 'ajax',
		'href' : url,
		'autoSize' : false,
		'closeBtn' : false, 
		'width' : width,
		'height' : height,
		'scrolling' : temp
	});
	},300);	
	
}

function follow_user(url, follow_id, my_id)
{
	$.post(url,{ following_id: follow_id, user_id: my_id}, function(data){
		$('.follow_btn').hide();
		$('.unfollow_btn').show();
	});
}

function unfollow_user(url, follow_id, my_id)
{
	var y = confirm("Are you sure you want to stop following this user?");
	if(y)
	{
		$.post(url,{ following_id: follow_id, user_id: my_id}, function(data){
			$('.follow_btn').show();
			$('.unfollow_btn').hide();
		});
	}
}

function follow_event(url, my_id, event_id)
{
	$.post(url,{ event_id: event_id, user_id: my_id}, function(data){
		$('.follow_event').hide();
		$('.unfollow_event').show();
	});
}

function unfollow_event(url, my_id, event_id)
{
	var y = confirm("Are you sure you want to stop following this event?");
	if(y)
	{
		$.post(url,{ event_id: event_id, user_id: my_id}, function(data){
			$('.follow_event').show();
			$('.unfollow_event').hide();
		});
	}
}

function toggle_dropdown()
{
	$('.drop-content').toggle('fast',function(){
		if($('.drop-content').is(':visible'))
		{
			$('.setting-icon').addClass('setting-active');	
		}else{
			$('.setting-icon').removeClass('setting-active');		
		}
	});	
}


function get_news_posts(url)
{
	$.post(url,function(data){
		$('.vticker').html(data);
	});
}


function get_my_fans(url)
{
	$.post(url,function(data){
		$('.my_fans').html(data);
	});
}

function get_athlete_messages(url)
{
	$.post(url,function(data){
		$('.athlete_messages').html(data);
	});
}

function isNumeric(value) {

  value = $.trim(value);	
  if (value == null || !value.toString().match(/^[-]?\d*\.?\d*$/)) return false;
  return true;
}

function get_events_i_follow(url)
{
	
	$.post(url,function(data){
		$('.events_i_follow').html(data);
	});
}

function get_athletes_i_follow(url)
{	
	$.post(url,function(data){
		$('.athletes_i_follow').html(data);
	});
}

function getCountry(results) {
     var geocoderAddressComponent,addressComponentTypes,address;
     for (var i in results) {
       geocoderAddressComponent = results[i].address_components;
       for (var j in geocoderAddressComponent) {
         address = geocoderAddressComponent[j];
         addressComponentTypes = geocoderAddressComponent[j].types;
         for (var k in addressComponentTypes) {
           if (addressComponentTypes[k] == 'country') {
             return address;
           }
         }
       }
     }
    return 'Unknown';
  }
