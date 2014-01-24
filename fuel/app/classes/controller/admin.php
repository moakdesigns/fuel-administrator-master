<?php


class Controller_Admin extends Controller_Base {


    public function before()
    {
        parent::before();
        
        \Lang::load('users');
        
        
        // load the theme template
        $this->theme = \Theme::instance();
        $this->theme->active('admin');
        // set the page template
        $this->theme->set_template('layouts/default');
        $this->theme->set_partial('navigation', 'partials/navigation');
        $this->theme->set_partial('alert_messages', 'partials/alert_messages');
        $this->theme->get_template()->set('title', ucwords(implode(" - ", \Uri::segments())));
        $this->theme->get_template()->set('description', ucwords(implode(" - ", \Uri::segments())));
        $this->theme->get_template()->set('author', ucwords(implode(" - ", \Uri::segments())));


        //check that the user is logged in and has the permission to see the admin panel
        if(!\Warden::check() || (\Warden::check() && !\Warden::can(array('execute'), 'controlpanel')))
        {
            \Messages::error( \Lang::get('access_denied') );
            \Response::redirect('/');
        }
        
        
        //View::set_global('current_user', $this->current_user);


    }



}