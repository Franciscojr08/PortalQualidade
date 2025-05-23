<?php

namespace PortalQualidade\Core;

/**
 * Class Functions
 * @package PortalQualidade\Core
 * @version 1.0.0
 */
class Functions {

	/**
	 * Renderiza o menu
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function renderMenu(): void {
		require_once "Sistema/nav.php";
	}

	/**
	 * Renderiza o footer
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function renderFooter(): void {
		require_once "Sistema/footer.php";
	}

	/**
	 * Adiciona o css na página
	 *
	 * @param array $aCss
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function addStyleSheet(array $aCss = []): void {
		$oData = new \DateTimeImmutable("now");
		$sTimeStamp = $oData->getTimestamp();

		$aCssPadrao = [
			"css/lib/bootstrap/bootstrap.min.css",
			"css/lib/fontawesome/all.min.css"
		];

		$aCss = array_merge($aCssPadrao,$aCss);

		foreach ($aCss as $sCss) {
			echo PHP_EOL . "<link rel='stylesheet' href='../public/assets/$sCss?$sTimeStamp'>";
		}
	}

	/**
	 * Adiciona o js na página
	 *
	 * @param array $aScript
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function addScript(array $aScript = []): void {
		$oData = new \DateTimeImmutable("now");
		$sTimeStamp = $oData->getTimestamp();

		$aJsPadrao = [
			"js/lib/jquery/jquery-3.6.4.js",
			"js/lib/bootstrap/bootstrap.bundle.min.js",
			"js/lib/fontawesome/all.min.js",
		];

		$aJs = array_merge($aJsPadrao,$aScript);

		foreach ($aJs as $sJs) {
			echo PHP_EOL . "<script type='text/javascript' src='../public/assets/$sJs?$sTimeStamp'></script>";
		}
	}

	/**
	 * Adiciona o Favicon
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function addFavicon(): void {
		echo "<link rel=\"shortcut icon\" href=\"../public/assets/img/favicon.png\">";
	}

	/**
	 * Adiciona uma imagem na página
	 *
	 * @param string $sNomeImagem
	 * @param string $sFormato
	 * @param string $sLink
	 * @param string|null $sAlt
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function addImage(string $sNomeImagem, string $sFormato, string $sLink, string $sAlt = null): void {
		$oData = new \DateTimeImmutable("now");
		$sTimeStamp = $oData->getTimestamp();

		echo "<a href=\"$sLink\"><img src='../public/assets/img/$sNomeImagem.$sFormato?$sTimeStamp'  alt='$sAlt'></a>";
	}

}