<?php

namespace Sidea\EpGeo;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        ep_register_feature('ep_geo', array(
            'title'                     => 'Geo',
            'setup_cb'                  => __NAMESPACE__ . '\ep_geo_setup',
            'feature_box_summary_cb'    => __NAMESPACE__ . '\ep_geo_box_summary',
            'feature_box_long_cb'       => __NAMESPACE__ . '\ep_geo_box_long',
            'requires_install_reindex'  => true,
        ));
        
    }

    // public function boot()
    // {
    // }
}
