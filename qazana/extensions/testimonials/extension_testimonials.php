<?php
namespace Qazana\Extensions;

class testimonials extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'testimonials';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Testimonials', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'testimonials',
        ];
	}

}
