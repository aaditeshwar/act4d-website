<?php
header('Content-Type: application/json');

$event = isset($_GET['event']) ? preg_replace('/[^0-9]/', '', $_GET['event']) : '';
$path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'csv data' . DIRECTORY_SEPARATOR
	. 'Mass Media' . DIRECTORY_SEPARATOR . $event . DIRECTORY_SEPARATOR . 'kld.csv';

if ($event === '' || !is_readable($path)) {
	echo '[]';
	exit;
}

$fh = fopen($path, 'r');
if ($fh === false) {
	echo '[]';
	exit;
}

fgetcsv($fh);
$data = array();
while (($row = fgetcsv($fh)) !== false) {
	if (!isset($row[0]) || $row[0] === '') {
		continue;
	}
	$data[] = array($row[0], isset($row[1]) ? 0 + $row[1] : 0);
}
fclose($fh);

usort($data, function ($a, $b) {
	if ($a[1] == $b[1]) {
		return 0;
	}
	return ($a[1] < $b[1]) ? -1 : 1;
});

echo json_encode($data);
