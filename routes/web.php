<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	$config['center'] = 'Air Canada center , Torento';
	$config['zoom'] = '18';
	$config['map_height'] = '540px';
	$config['geocodeCaching'] = true;
    $config['scrollwheel'] = false;
    
    GMaps::initialize($config);
    
    $marker['position'] = 'Air Canada center , Torento';
    $marker['infowindow_content'] = 'Air Canada center';
    GMaps::add_marker($marker);

    $marker['position'] = 'CN Tower, Torento';
    $marker['infowindow_content'] = 'CN Tower';
    $marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/purple.png';
    GMaps::add_marker($marker);

    $circle['center'] = 'union staion,Torento';
    $circle['radius'] = '50';
    GMaps::add_circle($circle);
/*
    $config['center'] = 'saigaon , India';
	$config['zoom'] = '18';
	$config['map_height'] = '540px';
    $config['scrollwheel'] = false;
    
    GMaps::initialize($config);
    
    $marker['position'] = 'Air Canada center , Torento';
    $marker['infowindow_content'] = 'Air Canada center';
    GMaps::add_marker($marker);


    $marker['position'] = 'kamat farm , India';
    $marker['infowindow_content'] = 'saigaon';
    GMaps::add_marker($marker);

    $marker['position'] = 'misty woods , India';
    $marker['infowindow_content'] = 'misty woods';
    GMaps::add_marker($marker);*/



    $map = GMaps::create_map();
    return view('welcome')->with('map',$map);
});



Route::get('/directions', function () {

	$config['center'] = 'Air Canada center , Torento';
	$config['zoom'] = '18';
	$config['map_height'] = '540px';
    $config['scrollwheel'] = false;
    
    GMaps::initialize($config);
    
    $config['directions'] = true;
	$config['directionsStart'] = 'Air Canada center , Torento';
	$config['directionsEnd'] = 'Yorldale,Torento';
	$config['directionsDivID'] = 'directionsDiv';


    GMaps::initialize($config);
    $map = GMaps::create_map();
    return view('welcome')->with('map',$map);
});
