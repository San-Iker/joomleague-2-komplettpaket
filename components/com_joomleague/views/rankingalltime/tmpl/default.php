<?php
defined('_JEXEC') or die('Restricted access');

// Make sure that in case extensions are written for mentioned (common) views,
// that they are loaded i.s.o. of the template of this view
$templatesToLoad = array(
    'projectheading',
    'backbutton',
    'footer');
JoomleagueHelper::addTemplatePaths($templatesToLoad, $this);
?>

<div class="joomleague">
	<?php
echo $this->loadTemplate('projectheading');

?>
</div>