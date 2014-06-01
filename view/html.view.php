<?php
abstract class HtmlView extends View {

	protected $css = array();

	protected function crt() {

		$cssRessource = $this->css;
		array_push($cssRessource, 'common');
		$cssRessource = array_unique($cssRessource);

		echo '<html>';

		echo '	<head>';
		foreach($cssRessource as $ressource) {
			echo '		<link rel="stylesheet" type="text/css" href="/media/css/'.$ressource.'.css"/>';
		}

		echo '	</head>';
		echo '	<body>';

		echo $this->page();

		echo '	</body>';
		echo '</html>';

	}

	protected abstract function page();

}

