<?php

namespace Drupal\bitcoin\Controller;

use Drupal\Core\Controller\ControllerBase;

class BitcoinPayment {

	public function display(){
		return array(
				'#title' => 'Commerce Payment',
				'#markup' => 'Payement page.'
			);
	}
}