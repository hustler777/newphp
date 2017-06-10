<?php

include __DIR__ . '/views/form.php';

require_once __DIR__ . '/models/DB.php';

DB_add($_POST['title'],$_POST['text']);