<?php
/**
 * Properties for the dewplayer snippet.
 *
 * @package dewplayer
 * @subpackage build
 */
$properties = array(
	array(
		'name' => 'version',
		'desc' => 'prop_version_desc',
		'type' => 'list',
		'options' => array(
			array('text' => 'prop_version_opt_classic','value' => 'classic'),
			array('text' => 'prop_version_opt_mini','value' => 'mini'),
			array('text' => 'prop_version_opt_multi','value' => 'multi'),
			array('text' => 'prop_version_opt_multi_rect','value' => 'multi rect'),
			array('text' => 'prop_version_opt_playlist','value' => 'playlist'),
			array('text' => 'prop_version_opt_bubble','value' => 'bubble'),
		),
		'value' => 'classic',
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'backgrndColor',
		'desc' => 'prop_backgrndColor_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => 'transparent',
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'volume',
		'desc' => 'prop_volume_desc',
		'type' => 'numberfield',
		'options' => '',
		'value' => 100,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'autostart',
		'desc' => 'prop_autostart_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => False,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'loop',
		'desc' => 'prop_loop_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => False,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'showtime',
		'desc' => 'prop_showtime_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => False,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'nopointer',
		'desc' => 'prop_nopointer_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => False,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'randomplay',
		'desc' => 'prop_randomplay_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => False,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'fading',
		'desc' => 'prop_fading_desc',
		'type' => 'numberfield',
		'options' => '',
		'value' => 0,
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'fileType',
		'desc' => 'prop_fileType_desc',
		'type' => 'list',
		'options' => array(
			array('text' => 'prop_fileType_opt_mp3','value' => 'mp3'),
			array('text' => 'prop_fileType_opt_xml','value' => 'xml'),
		),
		'value' => 'mp3',
		'lexicon' => 'dewplayer:properties',
	),
	array(
		'name' => 'filePath',
		'desc' => 'prop_filePath_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => '',
		'lexicon' => 'dewplayer:properties',
	),
/*
	array(
		'name' => '',
		'desc' => 'prop_',
		'type' => 'textfield',
		'options' => '',
		'value' => '',
		'lexicon' => 'dewplayer:properties',
	),
    */
);

return $properties;
