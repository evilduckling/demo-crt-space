<?php
class IndexController extends Controller {

	protected $user = 1;

	protected function crt() {

		$this->mPlanet;

		Planet::createRandom();

		$this->data['egPlanet'] = $this->mPlanet
			->whereByUser($this->user)
			->select();

	}

}
