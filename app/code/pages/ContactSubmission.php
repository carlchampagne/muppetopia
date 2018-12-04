namespace SilverStripe\Muppetopia;

use SilverStripe\ORM\DataObject;

class ContactSubmission extends DataObject
{

    private static $db = [
        'Name' => 'Varchar',
        'Email' => 'Varchar',
        'Comment' => 'Text'
    ];

    private static $has_one = [
        'ContactPage' => ContactPage::class,
    ];
}