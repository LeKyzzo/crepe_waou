<?php

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page "About"
    public function about()
    {
        $this->render('about');
    }

    // Page "Cart"
    public function cart()
    {
        $this->render('cart');
    }

    // Page "Login"
    public function catalog()
    {
        $this->render('catalog');
    }

    // Page "Login"
    public function login()
    {
        $this->render('login');
    }

    // Page "Product"
    public function product()
    {
        $this->render('product');
    }

    // Page "Register"
    public function register()
    {
        $this->render('register');
    }


    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
