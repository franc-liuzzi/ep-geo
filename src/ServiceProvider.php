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
    }

    public static function load_ep_geo_feature() {
        if ( class_exists( '\ElasticPress\Features' ) ) {
            // Register your feature in ElasticPress.
            dump('load_ep_geo_feature');
            \ElasticPress\Features::factory()->register_feature(
                new EpGeoFeature()
            );
        }
    }

    // public function boot()
    // {
    // }
}
