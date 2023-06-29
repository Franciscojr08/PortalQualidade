<?php

namespace PortalQualidade\Src\Sistema;

use PortalQualidade\Src\Sistema\Connection\Connection;
use PortalQualidade\Src\Sistema\Connection\ConnectionInterface;

/**
 * Class Sistema
 * @package PortalQualidade\Src\Sistema
 * @version 1.0.0
 */
class Sistema {

	/**
	 * Retorna a connection com o database
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return ConnectionInterface
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function connection(): ConnectionInterface {
		return new Connection();
	}
}