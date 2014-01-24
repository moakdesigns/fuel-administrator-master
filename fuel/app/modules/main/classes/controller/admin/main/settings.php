<?php

namespace Main;

class Controller_Admin_Main_Settings extends \Controller_Admin 
{

    public function action_index()
    {
       /*
        if(!\Warden::can(array('create', 'update', 'delete'), 'users'))
        {
            \Session::set_flash('notice', 'Ups. You have not the permission to do this action.');
            \Fuel\Core\Response::redirect('/');
        }
        */


        if (\Input::method() == 'POST')
        {


            //fields for general settngs
            \Config::set('website.website_title', \Input::post('website_title'));
            \Config::set('website.website_description', \Input::post('website_description'));
            \Config::set('website.website_author', \Input::post('website_author'));
            
            if(\Config::save('website', 'website'))
            {
                \Messages::success('Website Settings are saved successfully.');
            }
            else
            {
                \Messages::error('Website Settings could not saved.');
            }
        }




        return \Theme::instance()
                ->get_template()
                ->set(  'content', 
                        \Theme::instance()->view('admin/settings/form')
                    );

    }
	
}