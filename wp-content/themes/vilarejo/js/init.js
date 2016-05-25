(function ($) {

    /*
     *  new_map
     *
     *  This function will render a Google Map onto the selected jQuery element
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$el (jQuery element)
     *  @return	n/a
     */

    function new_map($el) {

        // var
        var $markers = $el.find('.marker');


        // vars
        var args = {
            zoom: 16,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };


        // create map
        var map = new google.maps.Map($el[0], args);


        // add a markers reference
        map.markers = [];


        // add markers
        $markers.each(function () {

            add_marker($(this), map);

        });


        // center map
        center_map(map);


        // return
        return map;

    }

    /*
     *  add_marker
     *
     *  This function will add a marker to the selected Google Map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$marker (jQuery element)
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function add_marker($marker, map) {

        // var
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // create marker
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        // add to array
        map.markers.push(marker);

        // if marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function () {

                infowindow.open(map, marker);

            });
        }

    }

    /*
     *  center_map
     *
     *  This function will center the map, showing all markers attached to this map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function center_map(map) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each(map.markers, function (i, marker) {

            var latlng = new google.maps.LatLng(marker.position.lat() - 0.0060, marker.position.lng());

            bounds.extend(latlng);

        });

        // only 1 marker?
        if (map.markers.length == 1) {
            // set center of map
            map.setCenter(bounds.getCenter());
            map.setZoom(15);
        }
        else {
            // fit to bounds
            map.fitBounds(bounds);
        }

    }

    /*
     *  document ready
     *
     *  This function will render each map when the document is ready (page has loaded)
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	5.0.0
     *
     *  @param	n/a
     *  @return	n/a
     */
// global var
    var map = null;
    $(document).ready(function(){

        $('.bxslider').each(function(){
            $(this).bxSlider({
                captions:true,
                auto:true,
                preloadImages:'all'
            });
        });

        //map init
        $('.acf-map').each(function () {
            map = new_map($(this));
        });
    });


    $('#reserve').submit(function (e) {
        e.preventDefault();
        var $self = $(this);

        if($('#verify').val() == $('#cap-code').val()){
            $.ajax({
                url: $self.attr('action'),
                data: $self.serialize(),
                success: function () {
                    $self.get(0).reset();

                    $('#msg').html('Sua reserva no Vilarejo Chalé foi registrado com sucesso');
                    setTimeout(function(){
                        $('#msg').fadeOut().html('');
                    },6000);
                }
            });
        }else{
            alert('Code is not correct, please try again');
        }
    });


    $('#news').submit(function (e) {
        e.preventDefault();

        var $self = $(this);

        $.ajax({
            url: $self.attr('action'),
            data: $self.serialize(),
            success: function () {
                $self.get(0).reset();

                $('#newsmsg').html('Seu cadastro de email foi registrado com sucesso');

                setTimeout(function(){
                    $('#newsmsg').fadeOut().html('');
                },6000);
            }
        });
    });


    $('.tooltip').click(function(){
        var self = $(this);
        $('.tooltip').find('span').hide();
        self.find('span').toggle( "slide");
    });



})(jQuery);