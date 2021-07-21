<?php

namespace Sidea\EpGeo;

use ElasticPress\Feature;

class EpGeoFeature extends Feature {
/**
	 * Initialize feature settings.
	 */
	public function __construct() {
		$this->slug = 'feature_slug';

		$this->title = esc_html__( 'Geo', 'plugin-text-domain' );

		$this->requires_install_reindex = true;
		// $this->default_settings         = [
		// 	'my_feature_setting' => '',
		// ];

		parent::__construct();
	}

	/**
	 * Output feature box summary.
	 */
	public function output_feature_box_summary() {
		return ep_geo_box_summary();
	}

	/**
	 * Output feature box long
	 */
	public function output_feature_box_long() {
		return ep_geo_box_long();
	}

	/**
	 * Setup your feature functionality.
	 * Use this method to hook your feature functionality to ElasticPress or WordPress.
	 */
	public function setup() {
		return ep_geo_setup();
	}
}