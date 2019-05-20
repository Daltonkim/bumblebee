<?php
namespace Qazana\Extensions;

class Clients extends Base {
    /**
     * Unique extension name
     *
     * @return string
     */
    public function get_name() {
        return 'clients';
    }

    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Clients', 'energia' );
    }

    /**
	 * Extension widgets
	 *
	 * @return array
	 */
	public function get_widgets() {
		return [
            'Clients',
        ];
	}

}
