<?php

namespace Magiccart\VietnameseUrl\Plugin\Olegkoval\RegenerateCategoryRewrites;

/**
 * Url compatible translit filter
 *
 * Process string based on UTF-8 formatting
 */
class TranslitUrlProduct extends \Magiccart\VietnameseUrl\Filter\AbstractTranslitUrl
{

    public function after_prepareUrlRewrites(\OlegKoval\RegenerateUrlRewrites\Model\RegenerateProductRewrites $subject, $result)
    {
        if(is_array($result)){
            foreach ($result as $key => $url) {
                $url = strtr($url, $this->_convertTable);
                $$result[$key] = strtr($url, $this->_convertVietnamese);
            }
        }
        return $result;
    }

}
