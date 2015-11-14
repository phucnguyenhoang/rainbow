<div class="container">
    <div class="main-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo lang('contact_description'); ?>

                <div id="map"></div>
                <script type="text/javascript">

                    var map, marker,
                        myLatlng = {lat: 11.5480222, lng: 104.9271959};
                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: 11.5485222, lng: 104.9271959},
                            zoom: 18
                        });
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: 'HEALTHY HOMES CO., LTD'
                        });
                        var infowindow = new google.maps.InfoWindow({
                            content: '<strong>HEALTHY HOMES CO., LTD</strong><br>Healthy Homes (Cambodia) Co Ltd,<br> Level 5 Sun City Building,<br> 255 Street 51 (Corner of Street 370) BKK1, Phnom Penh<br><center><img src="https://lh3.googleusercontent.com/EJn5KKPcqmhstL5nUtReS-CNrWwMrT1VrfoQKsbw4TwPAWDOLDBgw2KNiZZOrNPo-WrKEQGfSCXEwuO7L_Wch6mtHKKN7fZ5V7Cq7CHRvtBXg-oaUD14ScVmTd18aPtr4w2xRO57Xeybt438IfCIJhXMB94AqoVYeQCluV6JBqoLJQ4jOsYT-Qfpr04ge02V9UZfb1Iq23xERw0Hf72JI-xg4PX3Kf4lp6IVpPD_M5vICCcztpvJXjQWrfjREUoK-J145-t4BCku4Rp_cBiYaWtuN4ByAkhNDO8Kaaf3EhECKadehfue3GY1iFXQN8hTe7Suv_BfEq5OIQ_J8Mk6Vu8GbyX99B96kL3lhSI-FHrguk-xtZilzFByQT6sxFEkJ5b8bzaVH6TtuuZnjjbrA3NSXM34OM5N4dSHKr2bD2at-lsVak7MTuVx0_ZholjHLu4qmIHSHxOmuac0aXl18P8OGVHzKs_WkX7M2PjYGdY-7SK9g8zFlel-FOKsiCV5ulpWhj4qXAKnSTUkud2lQjdX3hEvgX6dtD4HTVmkV7o=w598-h798-no" width="150px"></center>',
                            maxWidth: 220
                        });
                        marker.addListener('mouseover', function() {
                            infowindow.open(marker.get('map'), marker);
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtL8rcBzNvirHpVM8-Mf-jzU3b-gaB9Uc&callback=initMap">
                </script>
            </div>
        </div>
    </div>
</div>