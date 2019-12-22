<?php


function city() {

	$key = 'city';
	if(env('Cache')){
		Cache::forget($key);
	}
	if (Cache::has($key)) {
		$citi = Cache::store('file')->get($key);
		return $citi;
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/cities");
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
		'token' => 'mzoc1CEq401565108119FTd7QvbGea',
	)));
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
	]);

	$response = curl_exec($ch);

	if ($response) {
		Cache::store('file')->put($key, $response, env('CacheTime'));
	}

	return json_decode($response);
	
}
function hotelTypes() {

	$key = 'hotelTypes';
	if(env('Cache')){
		Cache::forget($key);
	}
	if (Cache::has($key)) {
		$citi = Cache::store('file')->get($key);
		return $citi;
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/hotelTypes");
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
		'token' => 'mzoc1CEq401565108119FTd7QvbGea',
	)));
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
	]);

	$response = json_decode(curl_exec($ch));

	if ($response) {
		Cache::store('file')->put($key, $response, env('CacheTime'));
	}
	return $response->data;
	
}

