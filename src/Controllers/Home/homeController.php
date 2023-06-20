<?php

namespace PortalQualidade\Src\Controllers\Home;

/**
 * Class homeController
 * @package PortalQualidade\Src\Controllers\Home
 * @version 1.0.0
 */
class homeController {

	/**
	 * Renderiza a view da home
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function index(array $aDados): void {
		require_once "Home/index.php";
	}
}