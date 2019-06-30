<?php
namespace Qazana\Extensions;

class Hero2 extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'hero2';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'hero2', 'qazana' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'hero2',
        ];
	}

}
