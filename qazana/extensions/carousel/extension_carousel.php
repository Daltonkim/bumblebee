<?php
namespace Qazana\Extensions;

class Carousel extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'carousel';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Carousel', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'Carousel',
        ];
	}

}
