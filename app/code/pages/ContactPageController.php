<?php
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Control\Email\Email;
use SilverStripe\Recaptcha;
use SilverStripe\Recaptcha\RecaptchaField;

class ContactPageController extends PageController 
{
    private static $allowed_actions = array('Form');
    public function Form() 
    { 
        $fields = new FieldList( 
            new TextField('Name'), 
            new EmailField('Email'), 
            new TextareaField('Message'),
            new RecaptchaField('MyCaptcha')
        ); 
        
        $actions = new FieldList( 
            new FormAction('submit', 'Submit') 
        ); 
        $validator = new RequiredFields('Name', 'Email', 'Message');
		return new Form($this, 'Form', $fields, $actions, $validator); 
         
    }
    
    public function submit($data, $form) 
    { 
        $email = new Email(); 
        $email->setTo('cchampag@gmail.com'); 
        $email->setFrom($data['Email']); 
        $email->setSubject("Contact Message from {".$data["Name"]."}"); 

        $messageBody = " 
            <p><strong>Name:</strong> {".$data['Name']."}</p> 
            <p><strong>Message:</strong> {".$data['Message']."}</p> 
        "; 
        $email->setBody($messageBody); 
        $email->send(); 
        $this->redirect('/contact-us/thank-you/');
    }
}
?>