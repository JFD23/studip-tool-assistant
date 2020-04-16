<?PHP
/*
 * ToolAssistant.class.php - ToolAssistant plugin for Stud.IP
 * Copyright (c) 2007  Elmar Ludwig
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 */

class ToolAssistant extends StudIPPlugin implements StandardPlugin
{
    public function __construct()
    {
        parent::__construct();

        $preferredLang = mb_substr($GLOBALS['user']->preferred_language, 0, 2);
        if ($preferredLang=='en') {
            $name='Teach Online';
        } else {
            $name='Online-Lehre';
        }

        if ($this->isActivated() && Navigation::hasItem('/course/admin')) {
            $navigation = new Navigation($name, PluginEngine::getURL($this, null, 'assistant'));
            Navigation::insertItem('/course/assistant', $navigation, 'admin');
        }
    }

    public function getIconNavigation($course_id, $last_visit, $user_id)
    {
        return null;
    }

    public function getInfoTemplate($course_id)
    {
        return null;
    }

    public function getTabNavigation($course_id)
    {
        return null;
    }
}
