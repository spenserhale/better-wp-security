<?php

if ( ! class_exists( 'ITSEC_Pro_Setup' ) ) {

	class ITSEC_Pro_Setup {

		public function __construct() {

			pbhs_add_action( 'itsec_modules_do_plugin_activation',   array( $this, 'execute_activate'   )          );
			pbhs_add_action( 'itsec_modules_do_plugin_deactivation', array( $this, 'execute_deactivate' )          );
			pbhs_add_action( 'itsec_modules_do_plugin_uninstall',    array( $this, 'execute_uninstall'  )          );
			pbhs_add_action( 'itsec_modules_do_plugin_upgrade',      array( $this, 'execute_upgrade'    ), null, 2 );

		}

		/**
		 * Execute module activation.
		 *
		 * @since 4.0
		 *
		 * @return void
		 */
		public function execute_activate() {
		}

		/**
		 * Execute module deactivation
		 *
		 * @return void
		 */
		public function execute_deactivate() {
		}

		/**
		 * Execute module uninstall
		 *
		 * @return void
		 */
		public function execute_uninstall() {
		}

		/**
		 * Execute module upgrade
		 *
		 * @return void
		 */
		public function execute_upgrade( $itsec_old_version ) {
		}

	}

}

new ITSEC_Pro_Setup();
