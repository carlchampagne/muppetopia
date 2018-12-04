<?php
namespace SilverStripe\Muppetopia;

use PageController;
use SilverStripe\Control\HTTPRequest;

class MuppetPageController extends PageController
{
	public function index(HTTPRequest $request)
    {
        $muppet = MuppetPage::get();
        $data = array('Results' => $muppet);
		if ($request->isAjax()) {
			return $this->customise($data)
                         ->renderWith('Includes/Modal');
		}
		
		return $data;
	}
}
?>