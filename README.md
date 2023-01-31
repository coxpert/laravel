# Integrate ElasticSearch with Laravel

## Step 1. Install Elastic search on local system
https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-7.1.0.msi

JDK download
https://download.oracle.com/java/19/latest/jdk-19_windows-x64_bin.msi

## Step 2. Setup Laravel adn Elasticsearch env.

```json
{
  "require": {
    "elasticquent/elasticquent": "dev-master"
  }
}
```
```
composer update
```

```php
'aliases' => [
    'Es' => Elasticquent\ElasticquentElasticsearchFacade::class,
]
```

### Elasticsearch Configuration

```
php artisan vendor:publish --provider="Elasticquent\ElasticquentServiceProvider"
```

app>config>elasticquent.php

defualt_index => 'articles'
