<?php
if (version_compare(phpversion(), '7.2', '<')) {
    die("ERROR! The php version isn't high enough, you need at least 7.2 to run this application! But you have: " . phpversion());
}

# set the new path of config.php (must be in a safe location outside the `public_html`)
require_once '.././config.php';

# load php dependencies:
require_once './backend-libs/autoload.php';

require_once './user.php';
require_once './imap_client.php';
require_once './controller.php';
require_once './router.php';

$imapClient = new ImapClient($config['imap']['url'], $config['imap']['username'], $config['imap']['password']);

$router = new Router($_SERVER['REQUEST_METHOD'], $_GET['action'] ?? NULL, $_GET, $_POST, $_SERVER['QUERY_STRING'], $config);
$controller = $router->route();
$controller->setViewHandler(new ServerRenderViewHandler());
$controller->invoke($imapClient);

// delete after each request
$imapClient->delete_old_messages($config['delete_messages_older_than']);

?>
