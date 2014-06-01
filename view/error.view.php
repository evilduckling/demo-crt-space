<?php
class ErrorView extends HtmlView {

	protected function page() {
		echo "<h1>Error 404 !</h1>";
		echo "<p>
			This page handle 404 redirection.<br/>
			Sorry but this url can't be resolved by server.
		</p>";
	}

}
