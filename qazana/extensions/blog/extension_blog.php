<?php
namespace Qazana\Extensions;

use Qazana\Utils;

class Blog extends Base {

    /**
	 * Unique extension name
	 *
	 * @return string
	 */
    public function get_name() {
        return 'blog';
    }
        
    /**
     * Extension title
     *
     * @return string
     */
    public function get_title() {
        return __( 'Blog', 'qazana' );
    }

    /**
     * Extension widgets
     *
     * @return array
     */
    public function get_widgets() {
        return [
            'Blog'
        ];
    }

}
