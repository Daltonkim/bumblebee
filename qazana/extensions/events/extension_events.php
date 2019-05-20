<?php
namespace Qazana\Extensions;

class Events extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'events';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Events', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'events',
        ];
	}

}
