<?php
namespace Pulse\Kernel;

class MethodOverride extends \Pulse\Kernel
{
    /**
     * @var array
     */
    protected $settings;

    /**
     * Constructor
     * @param  array  $settings
     */
    public function __construct($settings = array())
    {
        $this->settings = array_merge(array('key' => '_METHOD'), $settings);
    }

    /**
     * Call
     *
     * Implements Pulse kernel interface. This method is invoked and passed
     * an array of environment variables. This kernel inspects the environment
     * variables for the HTTP method override parameter; if found, this kernel
     * modifies the environment settings so downstream kernel and/or the Pulse
     * application will treat the request with the desired HTTP method.
     *
     * @return array[status, header, body]
     */
    public function call()
    {
        $env = $this->app->environment();
        if (isset($env['HTTP_X_HTTP_METHOD_OVERRIDE'])) {
            // Header commonly used by Backbone.js and others
            $env['pulse.method_override.original_method'] = $env['REQUEST_METHOD'];
            $env['REQUEST_METHOD'] = strtoupper($env['HTTP_X_HTTP_METHOD_OVERRIDE']);
        } elseif (isset($env['REQUEST_METHOD']) && $env['REQUEST_METHOD'] === 'POST') {
            // HTML Form Override
            $req = new \Pulse\Http\Request($env);
            $method = $req->post($this->settings['key']);
            if ($method) {
                $env['pulse.method_override.original_method'] = $env['REQUEST_METHOD'];
                $env['REQUEST_METHOD'] = strtoupper($method);
            }
        }
        $this->next->call();
    }
}
