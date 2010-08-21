<?php

/**
 * Add snippets to build
 * 
 * @package dewplayer
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'dewplayer',
    'description' => 'dewplayer mp3 flash player integration to modx revolution.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.dewplayer.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.dewplayer.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;
