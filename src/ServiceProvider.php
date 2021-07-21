<?php

namespace Sidea\EpGeo;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        add_action(
            'plugins_loaded',
            [__CLASS__, 'load_ep_geo_feature'],
            11
        );

        ep_register_feature('ep_geo', array(
            'title'                     => 'Geo',
            'setup_cb'                  => __NAMESPACE__ . '\ep_geo_setup',
            'feature_box_summary_cb'    => __NAMESPACE__ . '\ep_geo_box_summary',
            'feature_box_long_cb'       => __NAMESPACE__ . '\ep_geo_box_long',
            'requires_install_reindex'  => true,
        ));
        
    }

    public static function load_ep_geo_feature() {
        if ( class_exists( '\ElasticPress\Features' ) ) {
            // Register your feature in ElasticPress.
            \ElasticPress\Features::factory()->register_feature(
                new EpGeoFeature()
            );
        }
    }

    // public function boot()
    // {
    // }
}
