<?php

namespace B2\Web;

use SleepingOwl\Apist\Apist;

/*

Use as:

	$r = new B2\Web\Radikal;
	var_dump($r->ImageUrl('http://radikal.ru/F/s39.radikal.ru/i086/0909/e7/c510615b8119.jpg.html'));

Result:

	string(51) "http://s39.radikal.ru/i086/0909/e7/c510615b8119.jpg"

//TODO:

	- http://querypath.org/
	- https://github.com/PavelPolyakov/parsing-with-php
	- https://code.google.com/p/phpquery/

*/

class Radikal extends Apist
{
	public function ImageUrl($url)
	{
		// http://radikal.ru/F/s39.radikal.ru/i086/0909/e7/c510615b8119.jpg.html
		//  redirect -> http://f-picture.net/fp/80c5ae08a4564d288671f1f060ba8786
		$data = $this->get($url, [
			'image_url' => Apist::filter('div.f-content div img')->attr('src'),
		]);

		return $data['image_url'];
	}
}
