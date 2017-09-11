<?php
class Config {


    /**
     * @return array
     */
    static function Routes()
    {

        $routes = [

            'Users' => [

            '' => ['controller' => 'Home', 'action' => 'Index', 'method' => 'get'],

            'page/{id}' => ['controller' => 'Page', 'action' => 'View', 'method' => 'get'],

            'reviews' => ['controller' => 'Reviews', 'action' => 'ViewReviews', 'method' => 'get'],

            'postdata/ajax' => ['controller' => 'Ajax', 'action' => 'PostData', 'method' => 'post'],

            'cart/order' => ['controller' => 'Cart', 'action' => 'ViewCart', 'method' => 'get'],

            'login' => ['controller' => 'Login', 'action' => 'Auth', 'method' => 'get'],

            'login/enter' => ['controller' => 'Auth', 'action' => 'Enter', 'method' => 'post'],

            ],

            'AdminRoutes' => [

                'admin' => ['controller' => 'Admin', 'action' => 'Index', 'method' => 'get'],

                'admin/categories' => ['controller' => 'Admin', 'action' => 'Categories', 'method' => 'get'],

                'admin/categories/edit/{id}' => ['controller' => 'Admin', 'action' => 'editCategory', 'method' => 'get'],

                'admin/category/update' => ['controller' => 'Admin', 'action' => 'updateCategory', 'method' => 'post'],

                'admin/products' => ['controller' => 'Admin', 'action' => 'Products', 'method' => 'get'],

                'admin/product/edit/{id}' => ['controller' => 'Admin', 'action' => 'editProduct', 'method' => 'get'],

            ]


        ];
        return $routes;
    }

    /**
     * return final routes
     */
    static function getRoutes()
    {
        $protected = self::Routes();
            $routes = [];
            foreach ($protected as $protect => $path) {

                foreach ($path as $key => $val) {
                    $key = explode('/', $key);
                    if (is_array($key)) {

                        if (in_array('{params}', $key)) {
                            array_pop($key);
                            $val['params'] = 'many';
                        } elseif ((in_array('{id}', $key))) {
                            array_pop($key);
                            $val['params'] = 'id';
                        }
                    }
                    $val['protected'] = $protect;
                    $key = implode($key, '/');
                    $routes[$key] = $val;
                }
            }
            return $routes;
        }


    /**
     * @return string
     */
    static function loadCss()
        {

            $result = '
    <link rel="stylesheet" href="/template/css/normalize.css">
    <link rel="stylesheet" href="/template/css/main.css">
    <link rel="stylesheet" href="/template/css/fonts.css">
    <link rel="stylesheet" href="/template/css/responsive.css">
    <link rel="stylesheet" href="/template/libs/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/template/libs/modal/jquery.modal.css">
    <link rel="stylesheet" type="text/css" href="/template/libs/tooltipster/css/tooltipster.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="/template/libs/tooltipster/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css" />
    <script src="/template/js/vendor/modernizr-2.8.3.min.js"></script>';

            return $result;
        }

    /**
     * @return string
     */
    static function loadJs()
    {
        $map = '';
        @Storage::set('map', $map);
        $result = ' <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                    <script src="/template/js/jquery.mobile.custom.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
                    <script>window.jQuery || document.write(\'<script src="/template/js/vendor/jquery-1.12.0.min.js"><\/script>\')</script>
                    <script src="/template/js/plugins.js"></script>
                    <script src="/template/js/main.js"></script>
                    <script src="/template/js/calc.js"></script>
                    <script src="/template/js/lg.js"></script>
                    <script src="/template/libs/counterup/jquery.counterup.min.js"></script>
                    <script src="/template/libs/modal/jquery.modal.js"></script>
                    <script type="text/javascript" src="/template/libs/tooltipster/js/tooltipster.bundle.min.js"></script>
                    <script type="text/javascript" src="/template/js/footerJS.js"></script>';


        return $result;
    }



}







