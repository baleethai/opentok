<?php

require __DIR__ . '/vendor/autoload.php';

use OpenTok\MediaMode;
use OpenTok\OpenTok;
	
    $apiObj = new OpenTok(46314152, 'f78997032e57b9fca246da2a54a585c9f9cdd279');
    $session = $apiObj->createSession(array('mediaMode' => MediaMode::ROUTED));
    echo $session->getSessionId();
?>