<?php

namespace PortalQualidade\Src\Sistema\Enum;

use Exception;

/**
 * Class TipoArquivoEnum
 * @package PortalQualidade\Src\Sistema\Enum
 * @version 1.0.0
 */
enum TipoArquivoEnum implements EnumInterface {

	const DOC = 1;
	const PDF = 2;
	const IMG = 3;
	const CSV = 4;
	const EXCEL = 5;

	/**
	 * Retorna um array de valores do enum
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return array
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getValores(): array {
		$aValores = [];

		$aValores[] = [
			'valor' => self::DOC,
			'descricao' => "Word"
		];

		$aValores[] = [
			'valor' => self::PDF,
			'descricao' => "PDF"
		];

		$aValores[] = [
			'valor' => self::IMG,
			'descricao' => "Imagem"
		];

		$aValores[] = [
			'valor' => self::CSV,
			'descricao' => "CSV"
		];

		$aValores[] = [
			'valor' => self::EXCEL,
			'descricao' => "Excel"
		];

		return $aValores;
	}

	/**
	 * Retorna a descrição do enum com base no valor
	 *
	 * @param int $iValorEnum
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 * @throws Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getDescricaoById(int $iValorEnum): string {
		return match ($iValorEnum) {
			self::DOC => "Word",
			self::PDF => "PDF",
			self::IMG => "Imagem",
			self::CSV => "CSV",
			self::EXCEL => "Excel",
			default => throw new Exception("Tipo de arquivo não encontrado.")
		};
	}
}
