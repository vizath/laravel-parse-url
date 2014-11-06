<?php namespace Vizath\ParseUrl;

use Twitter\Text\Extractor;
use Twitter\Text\LooseAutolink;

class UrlParser {

	public function findLinks($text) {
		return Extractor::create($text)->extractURLs();
	}

	public function addHtmlLinks($text, $cssClass="url"){
		return LooseAutolink::create($text)->setURLClass($cssClass)->addLinksToURLs();
 	}
}
