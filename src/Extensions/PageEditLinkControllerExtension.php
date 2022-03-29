<?php

namespace aetchell\Extensions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;

class PageEditLinkControllerExtension extends DataExtension {

    /**
     * Test if this page has an override theme set from within the settings tab, if so, rebuild the theme registry
     */
    public function onAfterInit() { 
        Requirements::javascript('aetchell/silverstripe-admin-edit-link:client/js/script.js', ['defer' => true]);
        Requirements::css('aetchell/silverstripe-admin-edit-link:client/css/EditLink.css');
    }
}