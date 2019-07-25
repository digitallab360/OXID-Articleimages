<?php
/**
 * Modul: dlb_articleimages
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

namespace DigitalLab\ArticleImages\Application\Controller\Admin;

class CustomArticleImages extends CustomArticleImages_parent {

    protected function _loadCustomConfig() {

        parent::_loadCustomConfig();

        if ($imageFields = $this->getConfigParam('CustomImageFields')) {
            $this->setConfigParam('iPicCount', $imageFields);
        }

    }

}