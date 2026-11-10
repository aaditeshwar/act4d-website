<?php
/**
 * Read district census / development indicators from districts-info.csv.
 */

function gem_district_csv_path() {
	return __DIR__ . DIRECTORY_SEPARATOR . 'districts-info.csv';
}

function gem_load_districts() {
	static $by_code = null;
	if ($by_code !== null) {
		return $by_code;
	}
	$by_code = array();
	$path = gem_district_csv_path();
	if (!is_readable($path)) {
		return $by_code;
	}
	$fh = fopen($path, 'r');
	if ($fh === false) {
		return $by_code;
	}
	$header = fgetcsv($fh);
	if ($header === false) {
		fclose($fh);
		return $by_code;
	}
	while (($vals = fgetcsv($fh)) !== false) {
		if (!isset($vals[3]) || $vals[3] === '') {
			continue;
		}
		$row = array();
		$n = min(count($header), count($vals));
		for ($k = 0; $k < $n; $k++) {
			$row[$header[$k]] = ($vals[$k] === '') ? null : $vals[$k];
		}
		$code = (string) intval($row['District_code']);
		$by_code[$code] = $row;
	}
	fclose($fh);
	return $by_code;
}

function gem_district_by_code($censuscode) {
	$code = (string) intval($censuscode);
	$all = gem_load_districts();
	return isset($all[$code]) ? $all[$code] : array();
}

function gem_district_by_name($state, $district) {
	$state = strtolower(trim($state));
	$district = strtolower(trim($district));
	foreach (gem_load_districts() as $row) {
		if (strtolower($row['State_name']) === $state && strtolower($row['District_name']) === $district) {
			return $row;
		}
	}
	return array();
}
