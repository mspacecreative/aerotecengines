<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Aerotec Engines – Approved Service Centres</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    
        function initMap() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap',
				disableDefaultUI: true,
				styles: [
				    {
				        "featureType": "water",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#e9e9e9"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 29
				            },
				            {
				                "weight": 0.2
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 18
				            }
				        ]
				    },
				    {
				        "featureType": "road.local",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "featureType": "poi.park",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#dedede"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "saturation": 36
				            },
				            {
				                "color": "#333333"
				            },
				            {
				                "lightness": 40
				            }
				        ]
				    },
				    {
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            },
				            {
				                "lightness": 19
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 17
				            },
				            {
				                "weight": 1.2
				            }
				        ]
				    }
				]
            };
                            
            // Display a map on the web page
            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            map.setTilt(50);
                
            // Multiple markers location, latitude, and longitude
            var markers = [
                ['Alpha One Flight School', 41.9114243, -70.7329279, 1],
                ['Border City Aviation', 53.3126503, -110.0768333, 2],
                ['Canadian Aviation Maintenance', 45.3349636, -75.6896825, 3],
				['Kings Aero Tech', 45.1442102, -64.4252045, 4],
				['Hampton Airfield', 42.9612064, -70.8339491, 5],
				['Maine Instrument Flight', 44.3180341, -69.7949923, 6],
				['Northwind Aviation', 42.7322938, -81.0053827, 7],
				['Rockcliffe Flying Club', 45.4621376, -75.6479172, 8],
				['Vermont Flight Academy', 44.4628445, -73.1455876, 9]
            ];
                                
            // Info window content
            var infoWindowContent = [
                ['<div class="info_content">' +
                '<h3>Alpha One Flight School</h3>' +
                '<p>246 South Meadow Rd, Plymouth, MA 02360, USA</p>' + '<a href="http://alpha-1.com">VISIT WEBSITE</a>' + '<a href="tel:+1508-747-1494">CALL</a>' + '</div>'],
                ['<div class="info_content">' +
                '<h3>Border City Aviation</h3>' +
                '<p>7054-83rd Avenue, Lloydminster, AB T9V 3B3, Canada</p>' + '<a href="https://bordercityaviation.com" target="_blank">VISIT WEBSITE</a>' + '<a href="tel:+1780-875-5834">CALL</a>' + '</div>'],
                ['<div class="info_content">' +
                '<h3>Canadian Aviation Maintenance</h3>' +
                '<p>20 Lindbergh Private, Ottawa, ON K1V 1H7, Canada</p>' + '<a href="tel:+1613-799-2568">CALL</a>' + '</div>'],
				['<div class="info_content">' +
				'<h3>Kings Aero Tech</h3>' +
				'<p>1670 Saxon Street, Hillaton, Nova Scotia, B0P 1T0, Canada</p>' + '<a href="https://kingsaero.com/kings-aerodrome/">VISIT WEBSITE</a>' + '<a href="tel:+1902-670-2118">CALL</a>' + '</div>'],
				['<div class="info_content">' +
				'<h3>Hampton Airfield</h3>' +
				'<p>9A Lafayette Rd, North Hampton, NH 03862, USA</p>' + '<a href="http://hamptonairfield.com/" target="_blank">VISIT WEBSITE</a>' + '<a href="tel:+1603-964-6749">CALL</a>' + '</div>'],
				['<div class="info_content">' +
				'<h3>Maine Instrument Flight</h3>' +
				'<p>215 Winthrop St, Augusta, ME 04330, USA</p>' + '<a href="https://www.maineinstrumentflight.com/" target="_blank">VISIT WEBSITE</a>' + '<a href="tel:+1207-622-1211">CALL</a>' + '</div>'],
				['<div class="info_content">' +
				'<h3>Northwind Aviation</h3>' +
				'<p>48726 John Wise Line, Aylmer, Ontario  N5H 2R4, Canada</p>' + '<a href="https://www.northwindaviation.ca/">VISIT WEBSITE</a>' + '<a href="tel:+1519-765-2209">CALL</a>' + '</div>'],
				['<div class="info_content">' +
				'<h3>Rockcliffe Flying Club</h3>' +
				'<p>1495 Sir George-Étienne Cartier Pkwy, Ottawa, ON K1K 4Y5, Canada</p>' + '<a href="http://www.rfc.ca/en/home/" target="_blank">VISIT WEBSITE</a>' + '<a href="tel:+1613-746-4425">CALL</a>' + '</div>'],
				['<div class="info_content">' +
				'<h3>Vermont Flight Academy</h3>' +
				'<p>355 Valley Rd, South Burlington, VT 05403, USA</p>' + '<a href="https://flyvfa.org/" target="_blank">VISIT WEBSITE</a>' + '<a href="tel:+1802-863-5988">CALL</a>' + '</div>']
            ];
                
            // Add multiple markers to map
            var infoWindow = new google.maps.InfoWindow(), marker, i;
            
            // Place each marker on the map  
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });
                
                // Add info window to marker    
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
						map.setCenter(marker.getPosition());
						map.panBy(0,-100);
                    }
                })(marker, i));
        
                // Center the map to fit all markers on the screen
                map.fitBounds(bounds);
            }
        
            // Set zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(4);
                google.maps.event.removeListener(boundsListener);
            });
            
        }
        // Load initialize function
        google.maps.event.addDomListener(window, 'load', initMap);
    
        </script>
  </body>
</html>