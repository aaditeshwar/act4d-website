<?php
header('Content-Type: application/json');

$event = isset($_GET['event']) ? preg_replace('/[^0-9]/', '', $_GET['event']) : '';
$np = isset($_GET['np']) ? preg_replace('/[^a-z0-9]/', '', strtolower($_GET['np'])) : '';
$coverage = isset($_GET['coverage']) ? $_GET['coverage'] : 'aspect';

$kind = ($coverage === 'sentiment') ? 'AspectSentiment' : 'AspectCoverage';
$path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'csv data' . DIRECTORY_SEPARATOR
	. 'Mass Media' . DIRECTORY_SEPARATOR . $event . DIRECTORY_SEPARATOR . $np
	. DIRECTORY_SEPARATOR . $kind . DIRECTORY_SEPARATOR . 'Mass' . DIRECTORY_SEPARATOR . 'GraphData.csv';

if ($event === '' || $np === '' || !is_readable($path)) {
	echo '[]';
	exit;
}

$fh = fopen($path, 'r');
if ($fh === false) {
	echo '[]';
	exit;
}

$header = fgetcsv($fh);
$data = array();
while (($row = fgetcsv($fh)) !== false) {
	if (!isset($row[0]) || $row[0] === '') {
		continue;
	}
	$item = array($row[0], isset($row[1]) ? 0 + $row[1] : 0);
	if (isset($row[2]) && $row[2] !== '') {
		$item[] = 0 + $row[2];
	}
	$data[] = $item;
}
fclose($fh);

usort($data, function ($a, $b) {
	if ($a[1] == $b[1]) {
		return 0;
	}
	return ($a[1] < $b[1]) ? -1 : 1;
});

echo json_encode($data);
