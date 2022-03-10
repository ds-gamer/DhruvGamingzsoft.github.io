<?php # Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('');
$domain = "YOUR_DOMAIN_NAME";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@>',
	'to'	=> 'Dhruv Shekhawat <dgashost@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Elite awesomness!'
));
?>
