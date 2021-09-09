<?php
/**
 * Sanitizer
 *
 * @package Google\AMP_Breadcrumb_Schema_Fix
 */

namespace Google\AMP_Breadcrumb_Schema_Fix;

use AMP_Base_Sanitizer;
use DOMElement;
use DOMNodeList;
use DOMXPath;

/**
 * Class Sanitizer
 */
class Sanitizer extends AMP_Base_Sanitizer {

	/**
	 * Sanitize.
	 */
	public function sanitize() {
		$xpath = new DOMXPath( $this->dom );

		// Breadcrumb Links.
		$breadcrumb_links = $xpath->query( '//a[@typeof="WebPage"]' );
		
		if ( $breadcrumb_links instanceof DOMNodeList ) {
			foreach ( $breadcrumb_links as $breadcrumb_link ) {
				if ( $breadcrumb_link instanceof DOMElement ) {
					$breadcrumb_link->removeAttribute( 'rel' );
				}
			}
		}
	}
}
