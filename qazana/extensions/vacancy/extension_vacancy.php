<?php
namespace Qazana\Extensions;

use Qazana\Utils;

class Vacancy extends Base {

    /**
	 * Unique extension name
	 *
	 * @return string
	 */
    public function get_name() {
        return 'vacancy';
    }
        
    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( '', 'Vacancy' );
    }

    /**
     * Extension widgets
     *
     * @return array
     */
    public function get_widgets() {
        return [
            'vacancy'
        ];
    }

}
