<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get','post'],'/','OneController::listcontent');
$routes->match(['get','post'],'tujuan', 'OneController::listContent');
$routes->match(['get','post'],'kategori', 'OneController::kategori');
$routes->match(['get','post'],'tujuan/edit/(:segment)', 'OneController::updateVisiting/$1');
$routes->get('tujuan/delete/(:segment)', 'OneController::deleteVisiting/$1');
$routes->get('tujuan/detail/(:num)', 'OneController::detailVisiting/$1');



