<?php

namespace aetchell\Extensions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;

class PageEditLinkControllerExtension extends DataExtension 
{
    public function onAfterInit() 
    { 
        Requirements::javascript('aetchell/silverstripe-admin-edit-link:client/js/script.js', ['defer' => true]);
        Requirements::css('aetchell/silverstripe-admin-edit-link:client/css/EditLink.css');
    }
}