<?php
namespace Qazana\Extensions;

class Hero extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'hero';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'hero', 'qazana' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'hero',
        ];
	}

}
