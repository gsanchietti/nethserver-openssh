<?php

/* @var $view Nethgui\Renderer\Xhtml */

echo $view->header()->setAttribute('template', $T('Ssh_header'));

echo $view->panel()
    ->insert($view->textInput('port'))
    ->insert($view->checkBox('rootLogin', 'yes'))
    ->insert($view->checkBox('passwordAuth', 'yes'))
;

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP);
