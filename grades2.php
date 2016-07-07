<?php

$student = [
'awesomeGrade' => 80,
'name' => null,
'subjects' => [],
];

function calculateAverage($subjects) {
	$average = 0;
	foreach ($subjects as $subject) {
		$average += $subject['grade'];
		
	}
}