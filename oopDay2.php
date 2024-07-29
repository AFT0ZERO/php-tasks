<pre>
<?php
class Student
{
    private $studentName;
    private $studentAge;
    private $studentID;

    private function getNewId()
    {
        static $id = 0;
        return ++$id;
    }
    function __construct($studentName, $studentAge)
    {
        $this->studentName = $studentName;
        $this->studentAge = $studentAge;
        $this->studentID = $this->getNewId();
    }
    function __destruct()
    {
        echo "the student object destroy\n";
    }

    function getDetails()
    {
        return " student Name : {$this->studentName} \n student Age : {$this->studentAge} \n student ID : {$this->studentID} \n  ";
    }

    //*get
    function getStudentName()
    {
        return $this->studentName;
    }
    function getStudentAge()
    {
        return $this->studentAge;
    }
    function getStudentID()
    {
        return $this->studentID;
    }

    //* set 
    function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }
    function setStudentAge($studentAge)
    {
        $this->studentAge = $studentAge;
    }


}
class Classroom
{
    private $Students = array();
    function addStudent(Student $student)
    {
        array_push($this->Students, $student);
    }
    function removeStudent($ID)
    {
        foreach ($this->Students as $indexOfObject => $student) {
            if ($student->getStudentID() == $ID) {
                unset($this->Students[$indexOfObject]);
                return;
            }
        }
    }
    function listStudents()
    {
        foreach ($this->Students as $student) {
            echo $student->getDetails() . "\n";
        }
    }
}

$student_1 = new Student("ahmad", 18);
$student_2 = new Student("koko", 15);
$student_3 = new Student("zaid", 20);

$classroom_1 = new Classroom();

$classroom_1->addStudent($student_1);
$classroom_1->addStudent($student_2);
$classroom_1->addStudent($student_3);

$classroom_1->listStudents();
echo "<br>=====================================================================<br>";
$classroom_1->removeStudent(1);

$classroom_1->listStudents();
?>
</pre>