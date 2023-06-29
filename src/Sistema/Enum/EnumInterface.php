<?php

namespace PortalQualidade\Src\Sistema\Enum;

use Exception;

/**
 * Interface EnumInterface
 * @package PortalQualidade\Src\Sistema\Enum
 * @version 1.0.0
 */
interface EnumInterface {

	/**
	 * Retorna um array de valores do enum
	 *
	 * @author Francisco Santos franciscosantos@moobitech.com.br
	 * @return array
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getValores(): array;

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
	public function getDescricaoById(int $iValorEnum): string;
}