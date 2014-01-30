<script type="text/javascript">

      /*An example of using the MQA.EventUtil to hook into the window load event and execute defined function
      passed in as the last parameter. You could alternatively create a plain function here and have it
      executed whenever you like (e.g. <body onload="yourfunction">).*/

      MQA.EventUtil.observe(window, 'load', function() {

        /*Create an object for options*/
        var options={
          elt:document.getElementById('map'),        /*ID of element on the page where you want the map added*/
          zoom:17,                                   /*initial zoom level of map*/
          latLng:{lat:-8.01439, lng:-34.95036},    /*center of map in latitude/longitude*/
          mtype:'osm'                                /*map type (osm)*/
        };

        /*Construct an instance of MQA.TileMap with the options object*/
        window.map = new MQA.TileMap(options);

        MQA.withModule('directions', function() {

          /*Uses the MQA.TileMap.addRoute function (added to the TileMap with the directions module)
          passing in an array of location objects as the only parameter.*/
          map.routeType='pedestrian';
          map.addRoute([
            {latLng: {lat:<?php echo($latitudeO); ?>, lng:<?php echo($longitudeO); ?>}},
            {latLng: {lat:<?php echo($latitudeD); ?>, lng:<?php echo($longitudeD); ?>}}
          ]);
        });
      });

    </script>
    <div id='map' style='width:100%; height:400px;'></div>