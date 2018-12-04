<?php
namespace SilverStripe\Muppetopia;

use Page;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;

class MuppetPage extends Page
{
	private static $table_name = 'Muppet';
	
	private static $db = array(
        'Type' => 'Varchar(100)',
        'BgColor' => Color::class
    );
    
    private static $has_one = array(
		'Photo' => Image::class
	);
    
    private static $owns = array(
		'Photo'
	);
	
	public function getCMSFields() 
	{
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main', TextField::create('Type','Show they appear in'),'Content');
		$fields->addFieldToTab('Root.Main', ColorField::create('BgColor','Background Color'),'Content');
	    $fields->addFieldToTab('Root.Attachments', UploadField::create('Photo'));	

		return $fields;
	}
}
?>