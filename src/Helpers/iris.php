<?php

namespace Iris\EniumPainel\Helpers;

//use Entrust;

class Iris
{

	public static function menu_active($url, $slug, $return)
	{

		$url = end($url);

		if (str_slug($slug) == $url) {
			return $return;
		}
	}

	public static function evento($event)
	{
		if ($event == "created") {
			return "cadastrou";
		} elseif ($event == "updated") {
			return "atualizou";
		} elseif ($event == "deleted") {
			return "deletou";
		} elseif ($event == "restored") {
			return "restaurou";
		}
	}

	public static function verStatus($status)
	{
		if ($status == "ativo") {
			return '<span class="badge-text badge-text-small success">' . $status . '</span>';
		} elseif ($status == "vencido") {
			return '<span class="badge-text badge-text-small danger">' . $status . '</span>';
		} elseif ($status == "cancelado") {
			return '<span class="badge-text badge-text-small secondary">' . $status . '</span>';
		}
	}


	public static function menu()
	{

		if (Entrust::hasRole('root')) {
			return [
				[
					'text' => 'Empresas',
					'icon' => 'la la-building',
					'can' => 'gestao-de-empresas',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/empresas',
							'can' => 'ver-usuarios',
							'slug' => 'empresas'
						],
						[
							'text' => 'Departamentos',
							'url' => '/painel/empresas/departamentos',
							'icon' => 'la la-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						]
					],
				],
				[
					'text' => 'Usuários',
					'icon' => 'la la-user',
					'can' => 'gestao-de-usuarios',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/usuarios',
							'icon' => 'la la-edit',
							'can' => 'ver-usuarios',
							'slug' => 'usuarios'
						],
						[
							'text' => 'Funções',
							'url' => '/painel/usuarios/funcoes',
							'icon' => 'la la-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						]
					],
				], [
					'text' => 'Configurações',
					'icon' => 'la la-wrench',
					'can' => 'configuracoes',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Geral',
							'url' => '/painel/configuracao',
							'icon' => 'la la-cogs',
							'slug' => 'configuracao'
						],
						[
							'text' => 'Gerenciar Atualizações',
							'url' => '/painel/configuracao',
							'icon' => 'la la-cogs',
							'slug' => 'configuracao'
						],
						[
							'text' => 'Backups',
							'url' => '/painel/backups',
							'icon' => 'la la-download',
							'slug' => 'backups'
						],
						[
							'text' => 'Logs de Erros',
							'url' => '/painel/erros',
							'icon' => 'la la-bug',
							'slug' => 'erros'
						],
					],
				]

			];
		} else if (Entrust::hasRole('administrador')) {
			return [
				[
					'text' => 'Clientes',
					'icon' => 'la la-users',
					'url' => '/painel/clientes',
					'can' => 'gestao-de-clientes',
				],
				[
					'text' => 'Tickets',
					'icon' => 'la la-ticket',
					'url' => '/painel/ticket',
					'can' => 'gestao-de-tickets',
				], [
					'text' => 'Mídia',
					'icon' => 'la la-file-image-o',
					'can' => 'gestao-de-midias',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/midia',
							'icon' => 'la la-edit',
							'slug' => 'midia'

						],
						[
							'text' => 'Lixeira',
							'url' => '/painel/midia/lixeira',
							'icon' => 'la la-trash',
							'slug' => 'lixeira'
						],
					],
				],
				[
					'text' => 'Minha Empresas',
					'icon' => 'la la-building',
					'can' => 'gestao-de-empresas',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/empresas',
							'can' => 'ver-usuarios',
							'slug' => 'empresas'
						],
						[
							'text' => 'Departamentos',
							'url' => '/painel/empresas/departamentos',
							'icon' => 'la la-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						],
						[
							'text' => 'Usuários',
							'url' => '/painel/usuarios',
							'icon' => 'la la-edit',
							'can' => 'ver-usuarios',
							'slug' => 'usuarios'
						],
						[
							'text' => 'Funções de Usuários',
							'url' => '/painel/usuarios/funcoes',
							'icon' => 'la la-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						]
					],
				],

			];
		}
	}
}