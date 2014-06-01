<?php
class Planet extends PlanetShell {

	public static function createRandom() {
		
		$names = array('Uranus', 'Earth', 'Mars', 'Venus', 'Saturn', 'Pluto');
		shuffle($names);

		$oPlanet = new Planet();
		
		$oPlanet->setName($names[0]);
		$oPlanet->setType('Planet');
		$oPlanet->setUser(mt_rand(1, 10));
		$oPlanet->setAge(mt_rand(0, 5));
		$oPlanet->setWater(mt_rand(0, 1));
		$oPlanet->setOxygen(mt_rand(0, 1));
		$oPlanet->setGround(mt_rand(0, 1));
		$oPlanet->setItrium(mt_rand(0, 1));
		$oPlanet->setForest(mt_rand(0, 1));
		$oPlanet->setCivilisation(mt_rand(0, 1));

		$oPlanet->save();
	}

	public function displayBlock() {

		$html = '<div class="planet-block">';
		$html .= '<b>'.encode($this->getName()).'</b> <i>('.$this->getType().')</i><br/>';
		$html .= '<img src="/media/image/picto/age.png"> '.$this->getAge().'<br/>';

		if($this->getItrium()) {
			$html .= '<img src="/media/image/picto/itrium.png"> ';
		}
		if($this->getWater()) {
			$html .= '<img src="/media/image/picto/water.png"> ';
		}
		if($this->getForest()) {
			$html .= '<img src="/media/image/picto/forest.png"> ';
		}
		if($this->getCivilisation()) {
			$html .= '<img src="/media/image/picto/civilisation.png"> ';
		}

		$html .= '</div>';

		return $html;
	}

}
