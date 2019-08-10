<?php
$stack = new SplStack();
$socket = stream_socket_server("tcp://0.0.0.0:8080");

while ($connection = stream_socket_accept($socket, -1)) {
	fwrite($connection, "Hello \r\n");
	$data = fread($connection, 1024);

	if ($data == 0) {
		$lastMessage = $stack->pop();
		fwrite($connection, $lastMessage);
	}

	else {
		$stack->push($data);
		fwrite($connection, "Message added".PHP_EOL);
	}

	fwrite($connection, "goodbye \r\n");
	print_r($data);
	fclose($connection);
	}
