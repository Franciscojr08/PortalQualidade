<?php

namespace PortalQualidade\Src\Sistema\Enum;

use Exception;

/**
 * Class TipoReuniaoEnum
 * @package PortalQualidade\Src\Sistema\Enum
 * @version 1.0.0
 */
enum TipoReuniaoEnum implements EnumInterface {

	const ONLINE = 1;
	const PRESENCIAL = 2;

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
			'valor' => self::ONLINE,
			'descricao' => "Online"
		];

		$aValores[] = [
			'valor' => self::PRESENCIAL,
			'descricao' => "Presencial"
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
			self::ONLINE => "Online",
			self::PRESENCIAL => "Presencial",
			default => throw new Exception("Tipo de relatório não encontrado.")
		};
	}
}
