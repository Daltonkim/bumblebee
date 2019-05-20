<?php
namespace Qazana\Extensions;

class History extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'history';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'history', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'history',
        ];
	}

}
