<?php

namespace PortalQualidade\Src\Sistema\Enum;

use Exception;

/**
 * Class TipoRelatorioEnum
 * @package PortalQualidade\Src\Sistema\Enum
 * @version 1.0.0
 */
enum TipoRelatorioEnum implements EnumInterface {

	const PUBLICO = 1;
	const PRIVADO = 2;

	/**
	 * Retorna um array de valores do enum
	 *
	 * @author Francisco Santos franciscosantos@moobitech.com.br
	 * @return array
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getValores(): array {
		$aValores = [];

		$aValores[] = [
			'valor' => self::PUBLICO,
			'descricao' => "Público"
		];

		$aValores[] = [
			'valor' => self::PRIVADO,
			'descricao' => "Privado"
		];

		return $aValores;
	}

	/**
	 * Retorna a descrição do enum com base no valor
	 *
	 * @param int $iValorEnum
	 * @author Francisco Santos franciscosantos@moobitech.com.br
	 * @return string
	 * @throws Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getDescricaoById(int $iValorEnum): string {
		return match ($iValorEnum) {
			self::PUBLICO => "Público",
			self::PRIVADO => "Privado",
			default => throw new Exception("Tipo de relatório não encontrado.")
		};
	}
}
