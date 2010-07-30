<?php

/* setup default properties */
$version = $modx->getOption('version',$scriptProperties,'classic');
$backgrndColor = $modx->getOption('backgrndColor',$scriptProperties,'transparent');
$volume = $modx->getOption('volume',$scriptProperties,'100');
$autostart = $modx->getOption('autostart',$scriptProperties,0);
$loop = $modx->getOption('loop',$scriptProperties,0);
$showtime = $modx->getOption('showtime',$scriptProperties,0);
$nopointer = $modx->getOption('nopointer',$scriptProperties,0);
$randomplay = $modx->getOption('randomplay',$scriptProperties,0);
$fading = $modx->getOption('fading',$scriptProperties,0);

/* swf files path */
$swfPath = $modx->getOption('assets_url').'components/dewplayer/swf/';

/* building flash object string */

/* player version */
switch ($version)
	{
	case 'classic':
		$swfFile = 'dewplayer';
		$width = '200';
		$height = '20';
		break;
	case 'mini':
		$swfFile = 'dewplayer-mini';
		$width = '160';
		$height = '20';
		break;
	case 'multi':
		$swfFile = 'dewplayer-multi';
		$width = '240';
		$height = '20';
		break;
	case 'multi rect':
		$swfFile = 'dewplayer-rect';
		$width = '240';
		$height = '20';
		break;
	case 'playlist':
		$swfFile = 'dewplayer-playlist';
		$widht = '240';
		$height = '200';
		break;
	case 'bubble':
		$swfFile = 'dewplayer-bubble';
		$width='250';
		$height = '65';
		break;
	}

/* background color */
if ($backgrndColor == 'transparent') {
	$transparentStr = '<param name="wmode" value="transparent" />';
	$colorStr = '';
} else {
	$transparentStr = '';
	$colorStr = '&amp;bgcolor='.$backgrndColor;
}

/* xml file or mp3 file(s) */
if (isset($xml)) {
	$fileStr = 'xml='.$xmlFile;
} else {
	$fileStr = 'mp3='.$mp3File;
}

/* object id & name */
$objid = 'dewplayer'.rand();

$output = '<object type="application/x-shockwave-flash" data="'.$swfPath.$swfFile.'.swf" width="'.$width.'" height="'.$height.'" id="'.$objid.'" name="'.$objid.'" >'.$transparentStr.'<param name="movie" value="'.$swfPath.$swfFile.'.swf" />'.'<param name="flashvars" value="'.$fileStr.'&amp;autostart='.$autostart.'&amp;autoreplay='.$loop.'&amp;showtime='.$showtime.'&amp;randomplay='.$randomplay.'&amp;nopointer='.$nopointer.'&amp;volume='.$volume.$colorStr.'&amp;fading='.$fading.'" /></object>';

return $output;
