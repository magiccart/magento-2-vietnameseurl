# Vietnamese URL for Magento 2
Magento 2 module to save UTF-8 characheters  allowing categories and products UTF-8 URL keys
and convert url Vietnamese characheters to English characheters example: url-có-ký-tự-đặc-biệt to url-co-ky-tu-dac-biet
## Installation
Install this module within Magento 2 using composer:

    composer require magiccart/magento2-vietnameseurl

After this, enable the module as usual:

    bin/magento module:enable Magiccart_VietnameseUrl
    bin/magento setup:upgrade
    bin/magento cache:clean
