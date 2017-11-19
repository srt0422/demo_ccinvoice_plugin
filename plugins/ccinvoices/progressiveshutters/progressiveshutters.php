<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

/** Import library dependencies */
jimport('joomla.event.plugin');

class plgccInvoicetagsprogressiveshutters extends JPlugin
{
	function __construct( &$subject )
	{
        echo "subject: <br><br><br>";
        var_dump($subject);
        echo "this: <br><br><br>";
        var_dump($this);
        exit;
		parent::__construct( $subject );
	}

	function _getCustomTags($val)
	{
        echo "val: <br><br><br>";
        var_dump($val);
        exit;
        //account tags
		$op_val['account_fax'] = "placeholder!";
		$op_val['account_phone'] = "placeholder!";

        // order tags
		$op_val['order_material'] = "placeholder!";
		$op_val['order_color'] = "placeholder!";
		$op_val['order_tiltrod'] = "placeholder!";
		$op_val['order_louver'] = "placeholder!";
		$op_val['order_mount'] = "placeholder!";
		$op_val['order_measure'] = "placeholder!";
		$op_val['order_frame'] = "placeholder!";
		$op_val['square_feet'] = "placeholder!";
		$op_val['color_match'] = "placeholder!";

        // order item tags
		$op_val['item_row_num'] = "placeholder!";
		$op_val['item_width'] = "placeholder!";
		$op_val['item_height'] = "placeholder!";
		$op_val['item_arch'] = "placeholder!";
		$op_val['item_divider'] = "placeholder!";
		$op_val['item_panels'] = "placeholder!";
		$op_val['item_specialty'] = "placeholder!";
		$op_val['item_notes'] = "placeholder!";

		return $op_val;
	}
}
?>