<?php

namespace Sidea\EpGeo;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public static function load_ep_geo_feature()
    {
        if (class_exists('\ElasticPress\Features')) {
            // Register your feature in ElasticPress.
            \ElasticPress\Features::factory()->register_feature(
                new EpGeoFeature()
            );
        }
    }

    public function register()
    {
        if (did_action('plugins_loaded') > 0) {
            self::load_ep_geo_feature();
        } else {
            add_action(
                'plugins_loaded',
                [__CLASS__, 'load_ep_geo_feature'],
                11
            );
        }
    }
}
