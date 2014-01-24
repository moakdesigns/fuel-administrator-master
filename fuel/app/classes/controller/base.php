<?php


class Controller_Base extends Controller {

    public function before()
    {
        parent::before();
            
        // load the theme template
        $this->theme = \Theme::instance();

        // set the page template
        $this->theme->set_template('layouts/default');
        $this->theme->set_partial('navigation', 'partials/navigation');
        $this->theme->set_partial('alert_messages', 'partials/alert_messages');
        $this->theme->get_template()->set('title', ucwords(implode(" - ", \Uri::segments())));
        $this->theme->get_template()->set('description', ucwords(implode(" - ", \Uri::segments())));
        $this->theme->get_template()->set('author', ucwords(implode(" - ", \Uri::segments())));
        $this->current_user = "Guest";
		// Assign current_user to the instance so controllers can use it
		if(\Warden::check())
        {
            $user = \Warden::current_user();
            $this->current_user = $user->username;
        }
     
		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);
        
    }

    public function after($response)
    {
        // If no response object was returned by the action,
        if (empty($response) or  ! $response instanceof Response)
        {
            // render the defined template
            $response = \Response::forge(\Theme::instance()->render());
        }

        return parent::after($response);
    }
   


}