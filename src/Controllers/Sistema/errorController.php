<?php

namespace PortalQualidade\Src\Controllers\Sistema;

/**
 * Class errorController
 * @package PortalQualidade\Src\Controllers\Sistema
 * @version 1.0.0
 */
class errorController {

	public function paginaNaoEncontrada(): void {
		require_once "sistema/notFound.php";
	}

	public function errorExeption(string $sMensagem): void {
		require_once "sistema/errorException.php";
	}
}