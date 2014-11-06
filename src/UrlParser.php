<?php namespace Vizath\ParseUrl;

user Twitter\Text\Extractor;
user Twitter\Text\LooseAutolink;

class UrlParser {

	public function findLinks($text) {
		return Extractor::create($text)->extractURLs();
	}

	public function addHtmlLinks($text, $cssClass="url"){
		return LooseAutolink::create($text)->setURLClass($cssClass)->addLinksToURLs();
 	}
}
