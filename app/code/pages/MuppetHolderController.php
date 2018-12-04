<?php
namespace SilverStripe\Muppetopia;

use PageController;
use SilverStripe\Control\HTTPRequest;

class MuppetHolderController extends PageController
{
	public function index(HTTPRequest $request)
    {
        $muppets = MuppetPage::get();		
		return array('Results' => $muppets);
	}
}
?>