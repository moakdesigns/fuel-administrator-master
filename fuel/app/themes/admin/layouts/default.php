<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title><?php echo \Config::get('website.website_title'); ?> <?php echo (($title)) ? ' - '.$title : ''; ?></title>
        
        <meta name="description" content="<?php echo \Config::get('website.website_description'); ?> <?php echo (($description)) ? ' - '.$description : ''; ?>">
        <meta name="author" content="<?php echo \Config::get('website.website_author'); ?> <?php echo (($author)) ? ' - '.$author : ''; ?>">

        <?php echo \Theme::instance()->asset->css('bootstrap.css'); ?>
        <?php echo \Theme::instance()->asset->css('sortable.css'); ?>
        <?php echo \Theme::instance()->asset->css('pace/pace.css'); ?>
        <?php echo \Theme::instance()->asset->js('pace/pace.js'); ?>
        <?php echo \Theme::instance()->asset->css('bootstrap/css/bootstrap.min.css'); ?>
        <?php echo \Theme::instance()->asset->css('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic'); ?>
        <?php echo \Theme::instance()->asset->css('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'); ?>
        <?php echo \Theme::instance()->asset->css('font-awesome.min.css'); ?>
        <?php echo \Theme::instance()->asset->css('style.css'); ?>
        <?php echo \Theme::instance()->asset->css('plugins.css'); ?>


        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            .navbar .divider-vertical {
                height: 40px;
                margin: 0 2px;
                border-left: 1px solid #e2e2e2;
                border-right: 1px solid white;
        </style>

        <script type="text/javascript">
        {
            <?php
                echo"var baseURL='".Uri::base(false)."';";
            ?>
        }
        </script>   
    </head>
    
    <body>

        <?php echo $partials['navigation']; ?>
        
        <?php if(isset($partials['subnavigation'])): ?>
            <?php echo $partials['subnavigation']; ?>
        <?php else: ?>
            <br/>
        <?php endif; ?>
        
        <div class="container">
                  		
      		<?php echo $partials['alert_messages']; ?>

            <div class="row">
                
                <div class="span12">
                    <?php echo \Breadcrumb::create_links(); ?>
                    <?php echo $content; ?>
                </div>
                
                
            </div><!--/row-->
    
            <?php //echo \Template::theme_partial('footer'); ?>
        
        </div>
        
        
        <?php echo \Theme::instance()->asset->js('jquery.js'); ?>
        <?php echo \Theme::instance()->asset->js('bootstrap.js'); ?>
        <?php echo \Theme::instance()->asset->js('bootstrap-tooltip.js'); ?>
        <?php echo \Theme::instance()->asset->js('modernizr.min.js'); ?>
        <?php echo \Theme::instance()->asset->js('respond.min.js'); ?>
        <?php echo \Theme::instance()->asset->js('jquery-ui.min.js'); ?>
        <?php echo \Theme::instance()->asset->js('jquery.ui.nestedSortable.js'); ?>
        <?php echo \Theme::instance()->asset->js('admin.js'); ?>
        <?php echo \Theme::instance()->asset->js('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); ?>
        <?php echo \Theme::instance()->asset->js('bootstrap/bootstrap.min.js'); ?>
        <?php echo \Theme::instance()->asset->js('slimscroll/jquery.slimscroll.min.js'); ?>
        <?php echo \Theme::instance()->asset->js('popupoverlay/jquery.popupoverlay.js'); ?>
        <?php echo \Theme::instance()->asset->js('popupoverlay/defaults.js'); ?>
        <?php echo \Theme::instance()->asset->js('popupoverlay/logout.js'); ?>
        <?php echo \Theme::instance()->asset->js('hisrc/hisrc.js'); ?>
        <?php echo \Theme::instance()->asset->js('flex.js'); ?>

    </body>

</html>