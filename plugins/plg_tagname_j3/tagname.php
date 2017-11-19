<?php
/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

/** Import library dependencies */
jimport('joomla.event.plugin');

class plgccInvoicetagstagname extends JPlugin
{
	function plgccInvoicetagstagname( &$subject )
	{
		parent::__construct( $subject );
	}
	function _getCustomTags($val)
	{
		$op_val['newtag'] = "new Tag";
		return $op_val;
	}
}
?>