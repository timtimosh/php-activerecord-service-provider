#ActiveRecord
PHP ActiveRecord for Silex version 2. 

#Using
```
$app->register(new \ActiveRecordServiceProvider\ActiveRecord(array(
        'ar.model_path'   => __DIR__.'/Model',
        'ar.default_connection' => 'development',
        'ar.connections' => array(
            'development' => 'mysql://login:password@hostname/database'
        ),
    ))
);

```
