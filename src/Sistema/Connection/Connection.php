<?php

namespace PortalQualidade\Src\Sistema\Connection;

use PDO;

/**
 * Class Connection
 * @package PortalQualidade\Src\Sistema
 * @version 1.0.0
 */
class Connection implements ConnectionInterface {
	private PDO $oPDO;

	/**
	 * Connection Constructor
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function __construct() {
		$sDriver = 'mysql';
		$sHost = 'mysql';
		$sUser = 'root';
		$sPassword = 'Qualidade@HP!#';
		$sDatabase = 'qualidadeHP';

		$oConexao = new PDO("$sDriver:host=$sHost;dbname=$sDatabase", $sUser, $sPassword);
		$oConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$this->oPDO = $oConexao;
	}

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
	public function execute(string $sSql, array $aParams = null): bool {
		$oSttm = $this->oPDO->prepare($sSql);

		if (!empty($aParams)) {
			foreach ($aParams as $iKey => $aParam) {
				$iContador = 1 + $iKey;
				$oSttm->bindValue($iContador,$aParam);
			}
		}

		try {
			return $oSttm->execute();
		} catch (\PDOException $e) {
			throw new \Exception("Não foi possível consultar os dados.",0,$e);
		}
	}
}