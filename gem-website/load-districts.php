<?php
/**
 * Read districts_info rows from create-mysql-table.sql (no MySQL).
 * Column names follow the INSERT value order used by the district pages.
 */

function gem_sql_paths() {
	$here = __DIR__;
	return array(
		$here . DIRECTORY_SEPARATOR . 'create-mysql-table.sql',
		$here . DIRECTORY_SEPARATOR . 'Entities' . DIRECTORY_SEPARATOR . 'create-mysql-table.sql',
	);
}

function gem_district_columns() {
	return array(
		'State_code', 'State_name', 'District_name', 'District_code',
		'No_HH', 'TOT_P', 'ELG_POP', 'LIT',
		'EMP_AL', 'EMP_NAL', 'EMP_UN',
		'FC_RUD', 'FC_INT', 'FC_ADV',
		'MSL_RUD', 'MSL_INT', 'MSL_ADV',
		'CHH_RUD', 'CHH_INT', 'CHH_ADV',
		'MSW_RUD', 'MSW_INT', 'MSW_ADV',
		'BF_RUD', 'BF_INT', 'BF_ADV',
		'radio_transistor', 'TV', 'Telephone', 'Bicycle',
		'Column_2_wheeler', 'Column_4_wheeler', 'No_asset',
		'State', 'District_2011', 'No_HH_2011', 'TOT_P_2011',
		'EMP_AL_2011', 'EMP_NAL_2011', 'EMP_UN_2011',
		'ELG_POP_2011', 'LIT_2011_val', 'F_EMP_2011',
		'BF_RUD_2011', 'BF_INT_2011', 'BF_ADV_2011',
		'CHH_RUD_2011', 'CHH_INT_2011', 'CHH_ADV_2011',
		'FC_RUD_2011', 'FC_INT_2011', 'FC_ADV_2011',
		'MSL_RUD_2011', 'MSL_INT_2011', 'MSL_ADV_2011',
		'MSW_RUD_2011', 'MSW_INT_2011', 'MSW_ADV_2011',
		'Radio_2011', 'TV_2011', 'Telephone_2011', 'Cycle_2011',
		'Column_2_Wheeler_2011', 'Column_4_Wheeler_2011', 'No_Asset_2011',
		'EMP_2011_type', 'EMP_2001_type',
		'MSW_2011', 'MSW_2001', 'BF_2011', 'BF_2001',
		'MSL_2011', 'MSL_2001', 'FC_2011', 'FC_2001',
		'CHH_2011', 'CHH_2001',
		'Population_Change', 'MSL_Change', 'MSW_Change', 'FC_Chnage',
		'BF_Change', 'EMP_Change', 'CHH_Change', 'Asset_Change',
		'ASSET_2011', 'ASSET_2001',
		'F_Main_2001', 'F_Marg_2001', 'F_Main_2001_L', 'F_Marg_2001_L',
		'F_Main_2011', 'F_marg_2011', 'F_Main_2011_L', 'F_marg_2011_L',
		'District_code_2',
		'Ind_2011', 'Ind_2001', 'Ind_change',
		'LIT_2001', 'LIT_2011', 'LIT_Change',
		'Formal_share_2001', 'Formal_share_2011',
		'Formal_EMP_2001', 'Formal_emp_2011', 'Formal_emp_change',
	);
}

function gem_parse_sql_tuple($text, $start) {
	$vals = array();
	$cur = '';
	$in_string = false;
	$len = strlen($text);
	for ($j = $start; $j < $len; $j++) {
		$c = $text[$j];
		if ($in_string) {
			if ($c === "'" && $j + 1 < $len && $text[$j + 1] === "'") {
				$cur .= "'";
				$j++;
				continue;
			}
			if ($c === "'") {
				$in_string = false;
				continue;
			}
			$cur .= $c;
			continue;
		}
		if ($c === "'") {
			$in_string = true;
			continue;
		}
		if ($c === ',' || $c === ')') {
			$raw = trim($cur);
			$vals[] = (strtoupper($raw) === 'NULL') ? null : $raw;
			$cur = '';
			if ($c === ')') {
				return array($vals, $j + 1);
			}
			continue;
		}
		$cur .= $c;
	}
	return array($vals, $len);
}

function gem_load_districts() {
	static $by_code = null;
	if ($by_code !== null) {
		return $by_code;
	}
	$by_code = array();
	$path = null;
	foreach (gem_sql_paths() as $candidate) {
		if (is_readable($candidate)) {
			$path = $candidate;
			break;
		}
	}
	if ($path === null) {
		return $by_code;
	}
	$text = file_get_contents($path);
	$marker = 'INSERT INTO districts_info VALUES';
	$pos = stripos($text, $marker);
	if ($pos === false) {
		return $by_code;
	}
	$text = substr($text, $pos);
	$cols = gem_district_columns();
	$ncol = count($cols);
	$len = strlen($text);
	$j = 0;
	while ($j < $len) {
		$i = strpos($text, '(', $j);
		if ($i === false) {
			break;
		}
		list($vals, $j) = gem_parse_sql_tuple($text, $i + 1);
		if (count($vals) < 4) {
			continue;
		}
		$row = array();
		$n = min($ncol, count($vals));
		for ($k = 0; $k < $n; $k++) {
			$row[$cols[$k]] = $vals[$k];
		}
		$code = (string) intval($row['District_code']);
		$by_code[$code] = $row;
	}
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
