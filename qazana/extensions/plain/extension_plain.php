<?php
namespace Qazana\Extensions;

class Plain extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'plain';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'plain', 'qazana' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'plain',
        ];
	}

}
