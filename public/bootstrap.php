<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', true);

require '../vendor/autoload.php';

require '../app/controllers/Home.php';

require '../app/controllers/User.php';

require '../app/controllers/Login.php';

require '../app/controllers/Online_tests.php';

require '../app/controllers/Question.php';

require '../app/controllers/Admin.php';

require '../app/controllers/Answer.php';

require '../app/controllers/Cites.php';

require '../app/controllers/States.php';

require '../app/controllers/Resp.php';

require '../app/controllers/QuestionAdd.php';

require '../app/controllers/Maintenance.php';


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();