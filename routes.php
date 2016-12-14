$route['teams/create'] = 'teams/create';
$route['teams/(:any)'] = 'teams/view/$1';
$route['teams'] = 'teams';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
