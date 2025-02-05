<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

/**
 * @link https://symfony.com/doc/current/bundles/best_practices.html#services
 */
return static function (ContainerConfigurator $container): void {
	$container
		->parameters()// ->set('tito10047_admin.param_name', 'param_value');
	;
	$container
		->services()// ->set('tito10047_admin.service_name', 'service_class')
	;
};
