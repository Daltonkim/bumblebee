<?php
namespace Qazana\Extensions;

class Tabs extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'tabs';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'tabs', 'qazana' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'tabs',
        ];
	}

}
