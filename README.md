
# Qordoba Connector Magento-2 Extension
 
### Extension Installation Process

##### Manual Installation

```$xslt
$ cd magento_installtion/app/code
$ mkdir Qordoba
$ git clone git@github.com:Qordobacode/magento-2.git ./Connector
$ cd magento_installtion
$ composer require qordoba/qordoba-php
$ magento setup:upgrade
```

##### Installation via Composer Package Manager

```$xslt
$ cd magento_installtion
$ composer require qordoba/magento-2
$ magento setup:upgrade
```

### Configuration

    1. Configure and run magento 2 cron
    2. Add your Qordoba Prefrences on Prefrences Page (Each Store have to have it's own configuration)

## Releases

    1. Stable Release v0.0.1