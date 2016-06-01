<?php
/*
 * This file is part of the Pulse package.
 *
 * (c) Ferdinand Martin <info@pulseframework.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * ************** CAUTION **************
 *
 * THIS FILE WILL BE OVERWRITTEN ON CONTROLLER API INVOCATION
 *
 * ************** CAUTION **************
 */

// @Route(GET)
$API->get('/', 
    function() use($API) {
        // Optional: define a menu father
        pathActive('/');
        // replace this example code with whatever you need
        $API->render('Default:home', array(
            'title' => 'Welcome to PULSE!'
        ));
        
        if($API->config('database.host')=='your_host'){
            $API->redirect($API->urlFor('configure'));
        }
    }
);

// @Route(GET) Hello World example.
$API->get('/hello/{var}', 
    function($var) use($API) {
        // Optional: define a menu father
        pathActive('/hello');
        // replace this example code with whatever you need
        $API->render('Hello:world', array(
            'title' => 'Hello World!',
            'example' => $var
        ));
    }
);

// @Route(GET) Protected path with Authorization HEADER
$API->get('/secured', 
    function() use($API) {
        if(isAuth()){
            // Optional: define a menu father
            pathActive('secured');
            // replace this example code with whatever you need
            $API->render('Default:home', array(
                'title' => 'Welcome to Secured PULSE!'
            ));
        } else {
            echo errorAuth();
        }
    }
);

// @Route(POST)
$API->post(
    '/post', 
    function () {
        echo 'This is a POST route';
    }
);

// @Route(PUT)
$API->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// @Route(PATH)
$API->patch(
    '/patch',
    function () {
        echo 'This is a PATCH route';
    }
);

// @Route(DELETE)
$API->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

// @URIs External URL definition
setUri('documentationUrl','http://doc.pulseframework.com');
setUri('communityUrl','http://doc.pulseframework.com');
setUri('tutosUrl','http://doc.pulseframework.com');
