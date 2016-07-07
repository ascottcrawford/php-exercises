<?php




// $total = 0;

//     function prompt($message) {
//         fwrite(STDOUT, $message . PHP_EOL);
//         return trim(fgets(STDIN));
//     }

 
//  do {
//     $student = prompt("Please enter student's name. Press x if finished");
//     if ($student == "x") {
//         break;
//     }
//     do {
//         $subject = prompt("Please enter subject. Press x if finished");
//         if ($subject == "x") {
//             break;
//         }
//         do {
//             $grade = prompt("Please enter student grade. Press x if finished");
//             if ($grade == "x") {
//                 break;
//             }
//             $grades[] = $grade;
//         } while ($grade != "x");
//         $subjects[$subject] = $grades;
//         $grades = [];
//         $students[$student] = $subjects;
//     } while ($subject != "x");
//     $subjects = [];
// }while ($student != "x");

// print_r($students);


$arrayOfNamesSubjectsAndGrades = [];


//ask add subject yes or no

// if(no) //break out of while

$addStudent = true;
$addSubject = true;
while($addStudent) {
    fwrite(STDOUT, "What is your name");
    $name = trim(fgets(STDIN));

    while($addSubject){
        fwrite(STDOUT, "What is the subject");
        $subject = trim(fgets(STDIN));

        fwrite(STDOUT, "What is your grade?");
        $grade = trim(fgets(STDIN));

        
        $arrayOfNamesSubjectsAndGrades[] = ['name' => $name, 'grade' => $grade];

        fwrite(STDOUT, "Add another subject?");
        $answer = trim(fgets(STDIN));
        if ($answer != 'yes') {
            $addSubject = false;
        }
    }

    $total = 0;
    $counter = 0;
    foreach ($arrayOfNamesSubjectsAndGrades as $subject) {
        $total += $subject['grade'];
        $counter++; 

    }
    $avg = $total / $counter;


    if ($avg > 80) {
        echo "You {$name} are awesome\n";
        echo "Your average is {$avg}\n";
      }  else {
            echo "You {$name} need practice\n";
            echo "Your average is {$avg}\n";
        }
    }
    $addStudent = false;
    exit(1);




// $name;

// $subject;

// $grade;

// $

// $subjects = [
//     ['name' => 'math', 'grade', => '100'],
//     ['name' => 'history', 'grade', => '50']
//     ];

// foreach ($subjects as $subject) {
//         $total += $subject['grade'];

// }
    
// $avg = $total / $numberOfGrades;














































// $subject = [];
// $subject['name'] = [];
// $subject['grade'] = [];

//     function prompt() {
//         fwrite(STDOUT, "What is your name?\n");
//         return trim(fgets(STDIN));
//     }


//     function prompt2($subject) {
//         fwrite(STDOUT, "Add Subject:\n");
//         $subject['name'] = fgets(STDIN);
//         array_push($subject['name']);
//         return trim(fgets(STDIN));
//     }

//     function prompt3($subject) {
//         fwrite(STDOUT, "Enter grade:\n");
//         $subject['grade'] = fgets(STDIN);
//         array_push($subject['grade']);
//         return trim(fgets(STDIN));
//     }

//     function awesome() {
//         $sum = array_sum($subject['grade']);
//         $average = ($sum / count($subject['grade']));
//         if ($average > 80) {
//             echo "You are awesome";
//         } else {
//             echo "You need practice";
//         }
//     }

// echo prompt() . PHP_EOL;
// echo prompt2($subject['name']) . PHP_EOL;
// echo prompt3($subject['grade']) . PHP_EOL;
// echo awesome() . PHP_EOL;




// (function () {
//     'use strict';
//     // Variables
//     var name, grade, average;
//     // Input
//     student.name = prompt("What's your name");
//     do {
//         name = prompt("What's the name of the subject?");
//         grade = Number(prompt("What's your grade?"));
//         student.addSubject(name, grade);
//     } while (confirm('Do you want to add another grade?'));
//     // Process
//     average = student.calculateAverage().toFixed(2);
//     // Output
//     if (student.isAwesome()) {
//         alert(student.name + " you're Awesome!!!! Your average was " + average);
//     } else {
//         alert(student.name + " you need more practice. Your average was " + average);
//     }
// })();

// 'use strict';
// // Object definition
// var student = {
//     awesomeGrade: 80,
//     name: null,
//     subjects: [],
//     calculateAverage: function () {
//         var average = 0;
//         this.subjects.forEach(function (subject) {
//             average += subject.grade;
//         });
//         return average / this.subjects.length;
//     },
//     addSubject: function (name, grade) {
//         var subject = {
//             name: name,
//             grade: grade
//         };
//         this.subjects.push(subject);
//     },
//     isAwesome: function () {
//         return this.calculateAverage() > this.awesomeGrade;
//     }
// }