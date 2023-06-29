<?php

namespace PortalQualidade\Src\Sistema\Connection;

/**
 * Interface ConnectionInterface
 * @package PortalQualidade\Src\Sistema\Connection
 * @version 1.0.0
 */
interface ConnectionInterface {

	/**
	 * Executa uma query sql
	 *
	 * @param string $sSql
	 * @param array|null $aParams
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return bool
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function execute(string $sSql, array $aParams = null): bool;
}