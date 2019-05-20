<?php
namespace Qazana\Extensions;

use Qazana\Utils;

class Team extends Base {

    /**
	 * Unique extension name
	 *
	 * @return string
	 */
    public function get_name() {
        return 'team';
    }
        
    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Team', 'qazana' );
    }

    /**
     * Extension widgets
     *
     * @return array
     */
    public function get_widgets() {
        return [
            'Team'
        ];
    }

}
