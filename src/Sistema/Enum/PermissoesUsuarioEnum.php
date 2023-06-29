<?php

namespace PortalQualidade\Src\Sistema\Enum;

use Exception;

/**
 * Class PermissoesUsuarioEnum
 * @package PortalQualidade\Src\Sistema\Enum
 * @version 1.0.0
 */
enum PermissoesUsuarioEnum implements EnumInterface {

	const VISUALIZAR = 1;
	const EDITAR = 2;
	const CADASTRAR = 3;
	const EXCLUIR = 4;

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
			'valor' => self::VISUALIZAR,
			'descricao' => "Visualizar"
		];

		$aValores[] = [
			'valor' => self::EDITAR,
			'descricao' => "Editar"
		];

		$aValores[] = [
			'valor' => self::CADASTRAR,
			'descricao' => "Cadastrar"
		];

		$aValores[] = [
			'valor' => self::EXCLUIR,
			'descricao' => "Excluir"
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
			self::VISUALIZAR => "Visualizar",
			self::EDITAR => "Editar",
			self::CADASTRAR => "Cadastrar",
			self::EXCLUIR => "Excluir",
			default => throw new Exception("Permissão não encontrada.")
		};
	}
}
