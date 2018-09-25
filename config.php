<?php

// set your time zone:
date_default_timezone_set('Europe/Paris');

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
$config['locale'] = 'en_US';


// enable in production:
error_reporting(0);

// enable while testing:
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


// Change IMAP settings (check SSL flags on http://php.net/manual/en/function.imap-open.php)
$config['imap']['url'] = '{mail.50webs.com:143/novalidate-cert}INBOX';
$config['imap']['username'] = "yum@podayba.ga";
$config['imap']['password'] = "123456qqqq";

// For gmail you can use '{imap.gmail.com:993/imap/ssl}INBOX'
// and follow the troubleshooting at:
// https://stackoverflow.com/a/25238515/79461

// email domains, usually different from imap hostname:
$config['domains'] = array('mydomain.com', 'example.com');

// When to delete old messages?
$config['delete_messages_older_than'] = '3 days ago';


// Mails to those usernames can not be accessed:
$config['blocked_usernames'] = array('root', 'admin', 'administrator', 'hostmaster', 'postmaster', 'webmaster');

// Mails are usually show as Text and only if not available as HTML. You can turn this around to prefer HTML over text.
$config['prefer_plaintext'] = false;
