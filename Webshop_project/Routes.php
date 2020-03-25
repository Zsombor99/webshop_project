<?php

Route::set('index.php', function(){
    Home::CreateView('Home');
});
Route::set('home', function(){
    Home::CreateView('Home');
});

Route::set('about_us', function(){
    AboutUs::CreateView('AboutUs');
    AboutUs::test();
});

Route::set('contact_us', function(){
    ContactUs::CreateView('ContactUs');
});

Route::set('register', function(){
    Register::CreateView('Register');
});

Route::set('login', function(){
    Login::CreateView('Login');
});

Route::set('profile', function(){
    Profile::CreateView('Profile');
});

Route::set('products', function(){
    Product::CreateView('Product');
});

Route::set('loadup', function(){
    Product::CreateView('Loadup');
});

Route::set('404', function(){
    Error404::CreateView('Error404');
});

?>