#ActiveRecord
PHP ActiveRecord for Silex version 2. 

#Using
```
$app->register(new Component\ActiveRecord\ActiveRecord(array(
        'ar.lib_path'   => __DIR__.'/../vendor/php-activerecord', //your active record path, i put it in vendor directory
        'ar.model_path'   => __DIR__.'/Model', //your model path
        'ar.default_connection' => 'development', 
        'ar.connections' => array(
            'development' => 'mysql://user:password@localhost/dbname'
        )
    ))
);
```
##attention
dont forgot about autoloading, must have php-active record in composer.json autoload section or just put it to the vendors dir.



