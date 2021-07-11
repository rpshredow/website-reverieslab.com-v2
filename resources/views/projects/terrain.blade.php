@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3>3D Terrain using Three.js</h3>
{{--                 <p>Use tab to enter the input boxes and use ctrl-v to paste latitude, longitude, and zoom. The latitude and longitude 
                    of Mt Elbert is 39.1178 and 106.4452 and the best zooms are between 10 and 15.</p> --}}
                <p>This project was to turn a AWS public dataset for terrain heights into 3D representation using a WebGL wrapper 
                    called Three.js. Three.js makes using WebGL easier to use. The terrain data is represented in .png images whose 
                    dimensions are 256x256 where terrain heights are decoded from the RGB values.</p>
                <p>The last three numbers in the URL are the zoom, x tile and y tile, https://s3.amazonaws.com/elevation-tiles-prod/terrarium/{z}/{x}/{y}.png. 
                    The tiles are retrieved by a formula where you input the latitude and longitude you want and zoom and it gives the x and y values of the tile.</p>
                <img src="/images/terrain1.jpg" width="750">
                <p>The pipeline goes as follows, the user inputs the zoom, latitude and longitude of the area they want displayed into the page, 
                    that is converted to x and y tile values for that zoom value with JavaScript. Neighboring tiles are retrieved by adding and 
                    subtracting from the x and y tile values. Tile zoom, x and y coordinate information is sent to a Java Servlet in .json format 
                    that is located in a AWS EC2 (Amazon Web Services Elastic Compute Cloud) instance. The java program retrieves the .png image 
                    it then decodes the RGB (red, green, blue) values from that .png image and gets the height data then sends the height data 
                    back to the web app in .json format and three.js receives the information and displays a tile based on the height data. The 
                    app renders the center tile and several neighboring tiles.</p>
                <img src="/images/terrain3.jpg" width="750">
                <p>Further work that needs to be done is to prefetch information for more surrounding tiles and for different zoom levels at that 
                    location. Multithreaded processing could be used to retrieve and decode that information faster. The ideal data structure would 
                    be a hash table because very zoom, x and y value for each tile is unique and hash tables provide a constant time complexity which 
                    is very fast.</p>
                <img src="/images/terrain2.jpg" width="750">
            </div>
        </div>
    </div>
</div>
@endsection