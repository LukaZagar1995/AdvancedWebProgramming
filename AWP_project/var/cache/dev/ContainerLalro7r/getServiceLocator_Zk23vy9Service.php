<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.zk23vy9' shared service.

return $this->services['service_locator.zk23vy9'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('entityManager' => function () {
    return ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'};
}));
