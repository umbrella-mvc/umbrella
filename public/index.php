<?php

//---------------------------------------------------------------------------
// Get the configured app
//---------------------------------------------------------------------------
$app = require_once __DIR__.'/../app/config/bootstrap.php';

//---------------------------------------------------------------------------
// Run the app.
//---------------------------------------------------------------------------
$app->run();