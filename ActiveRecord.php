<?php

namespace ActiveRecordServiceProvider;

use \Pimple\Container;

class ActiveRecord implements \Pimple\ServiceProviderInterface
{
    private $_options;

    public function __construct($options)
    {
        $this->_options = $options;
    }

    public function register(Container $app)
    {
        $options = $this->_options;

        \ActiveRecord\Config::initialize(function($cfg) use ($app, $options)
        {
            $app['ar.connections'] = $options['ar.connections'];
            $cfg->set_model_directory($options['ar.model_path']);
            $cfg->set_connections($options['ar.connections']);
            $cfg->set_default_connection($options['ar.default_connection']);
            if (isset($options['db.active_record.logger'])) {
                $app['db.active_record.logger'] = $options['db.active_record.logger'];
                $cfg->set_logger($app['db.active_record.logger']);
                $cfg->set_logging(true);
            }
        });
    }

}
