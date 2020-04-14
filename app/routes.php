 <?php
    $router->get('', 'HomesController@home');
    $router->get('home', 'HomesController@home');
    $router->get('about', 'AboutsController@about');
    $router->get('blog', 'BlogsController@blog');
    $router->get('contact', 'ContactsController@contact');
    $router->get('galeria', 'GaleriasController@galeria');
    $router->get('asociados', 'AsociadosController@asociados');
    $router->get('login', 'LoginsController@login');
    $router->post('users', 'UsersController@store');