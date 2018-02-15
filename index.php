<?php

require_once __DIR__ . '/helpers/database.php';

$a = $_GET['type'];
$a = ltrim(rtrim($a, "/"), "/");


// Partie Routing
if ($a == '') {
    require_once __DIR__ . '/front/index.php';
} else if ($a == 'articles/addForm') {
    require  __DIR__ . '/front/form-articles.php';
} else if ($a == 'articles/add') {
    require  __DIR__ . '/crud/add-articles.php';
} else if ($a == 'articles/edit') {
    require  __DIR__ . '/front/form-articles-update.php';
} else if ($a == 'articles/editAction') {
    require __DIR__ . '/crud/modifier-articles.php';
} else if ($a == 'articles/delete') {
    require __DIR__ . '/crud/delete-articles.php';

} else if($a == 'events/add'){
    require __DIR__ . '/crud/add-events.php';
} else if ($a == 'events/edit') {
    require __DIR__ . '/front/form-events-update.php';
} else if ($a == 'events/editActionEvent') {
    require __DIR__ . '/crud/update-events.php';
} else if ($a == 'events/delete') {
    require __DIR__ . '/crud/delete-events.php';
} else if ($a == 'events/addFormEvents') {
    require __DIR__ . '/front/form-events.php';
}

else if($a == 'front/indexEvents') {
    require __DIR__ . '/front/index-events.php';
} else if ($a == 'front/index') {
    require __DIR__ . '/front/index.php';
}