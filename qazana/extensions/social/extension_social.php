<?php
namespace Qazana\Extensions;

class social extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'social';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Social', 'qazana' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'social',
        ];
	}

}
