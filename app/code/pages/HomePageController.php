<?php
use SilverStripe\ORM\DB;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Muppetopia\MuppetPage;

class HomePageController extends PageController
{
	public function Muppet () {
		$random = DB::get_conn()->random(); 
		return MuppetPage::get()->sort($random)->limit(1);
	}
}
?>