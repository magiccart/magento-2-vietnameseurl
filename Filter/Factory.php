<?php

namespace Magiccart\VietnameseUrl\Filter;

/**
 * Judaica custom filter factory
 */
class Factory extends \Magento\Framework\Filter\AbstractFactory
{
    /**
     * Set of filters
     *
     * @var array
     */
    protected $invokableClasses = [
        'translitUrlCategory' => 'Magiccart\VietnameseUrl\Filter\TranslitUrlCategory',
        'translitUrlProduct' => 'Magiccart\VietnameseUrl\Filter\TranslitUrlProduct',
    ];
}
