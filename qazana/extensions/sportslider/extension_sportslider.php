<?php
namespace Qazana\Extensions;

class Sportslider extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'sportslider';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'sportslider', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'sportslider',
        ];
	}

}
