Установка
===

Устанавливаем зависимость:

```
composer require yii2lab/yii2-geo
```

Объявляем миграции:

```php
return [
	...
	'dee.migration.path' => [
	    ...
		'@vendor/yii2lab/yii2-geo/src/domain/migrations',
		...
	],
	...
];
```

Создаем полномочие:

```
oGeoCityManage
```

```
oGeoCountryManage
```

```
oGeoRegionManage
```

```
oGeoCurrencyManage
```

Объявляем API модуль:

```php
return [
	'modules' => [
	    ...
        'geo' => [
            'class' => 'yii2lab\geo\api\Module',
        ],
        ...
	],
	'components' => [
		'urlManager' => [
			'rules' => [
                ...
                ['class' => 'yii\rest\UrlRule', 'controller' => ['v4/city' => 'geo/city']],
                ['class' => 'yii\rest\UrlRule', 'controller' => ['v4/country' => 'geo/country']],
                ['class' => 'yii\rest\UrlRule', 'controller' => ['v4/currency' => 'geo/currency']],
                ['class' => 'yii\rest\UrlRule', 'controller' => ['v4/region' => 'geo/region']],
                ...
			],
		],
	],
];
```

Объявляем домен:

```php
return [
	'components' => [
		// ...
		'geo' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2lab\geo\domain',
			'repositories' => [
				'region',
				'city',
				'country',
				'currency',
			],
			'services' => [
				'region',
				'city',
				'country',
				'currency',
			],
		],
		// ...
	],
];
```
