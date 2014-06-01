<?php
class IndexView extends HtmlView {

	protected $css = array('planet');

	protected function page() {

		echo '<h2>'._("Hey, welcome ... home ?").'</h2><br/>';

		$c = 1;
		foreach($this->data['egPlanet'] as $oPlanet) {
			echo $oPlanet->displayBlock();
			if($c % 4 === 0) {
				echo '<br/>';
			}
			$c++;
		}

	}

}
