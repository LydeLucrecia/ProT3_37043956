<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('principal_ultimo', 'Home::index');
$routes->get('quienes_somos', 'Home::funcion_quienes_somos');
$routes->get('acercade', 'Home::funcion_AcercaDe');
$routes->get('registro', 'Home::funcion_registro');
$routes->get('login', 'Home::funcion_login');

/*rutas del registro de usuarios */
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/*
/*rutas del login*/
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');


