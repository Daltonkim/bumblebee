<?php
namespace Qazana\Extensions;

class Excites extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'excites';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Excitement', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'excites',
        ];
	}

}
