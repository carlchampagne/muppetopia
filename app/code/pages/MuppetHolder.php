<?php
namespace SilverStripe\Muppetopia;

use Page;

class MuppetHolder extends Page
{
	private static $allowed_children = array(
      MuppetPage::class
    );

    public function getCMSFields() {
    	$fields = parent::getCMSFields();

    	//$fields->fieldByName('Root.ChildPages')->setTitle('Muppets');

    	return $fields;
    }
}

?>