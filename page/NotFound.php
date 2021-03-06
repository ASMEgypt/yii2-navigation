<?php
/**
 */

namespace execut\navigation\page;


use Codeception\PHPUnit\ResultPrinter\HTML;
use execut\navigation\Page;

class NotFound extends Page
{
    protected $code = 404;
    public function __construct($config = [])
    {
        $this->setName(\yii::t('execut/navigation', 'Not found'));
        $notFoundMessage = \yii::t('execut/navigation', 'Page is not found');
        $aboutMessage = \yii::t('execut/navigation', 'The above error occurred while the Web server was processing your request');
        $pleaseContactMessage = \yii::t('execut/navigation', 'Please contact us if you think this is a server error. Thank you');
        $this->setText(<<<HTML
<p>$notFoundMessage.</p>
<p>$aboutMessage.</p>
<p>$pleaseContactMessage.</p>
HTML
);
        parent::__construct($config);
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function getCode() {
        return $this->code;
    }
}