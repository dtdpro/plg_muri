<?php
/**
 * MUri Content plugin for Joomla! 1.5/1.6+
 * Version: 1.0
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v2.0.
 * @by DtD Productions
 * @Copyright (C) 2012
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

class  plgContentMUri extends JPlugin
{
	function plgContentMUri( &$subject, $params )
	{
		parent::__construct( $subject, $params );
	}

	function onPrepareContent( &$article, &$params, $limitstart )
	{
		$app =& JFactory::getApplication();
		if($app->getName() != 'site') { return true; }
		$article->text = str_replace('{muri}',JURI::base( true ),$article->text);
	}
	
	public function onContentPrepare($context, &$article, &$params, $limitstart)
	{
		$app = JFactory::getApplication();
		if($app->getName() != 'site') {	return true;}
		$article->text = str_replace('{muri}',JURI::base( true ),$article->text);
	}

}


?>
