
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Student{
            public $name;
            public $age;

            public function __construct($name, $age){
                $this->name = $name;
                $this->age = $age;
            }

            public function message(){
                return "L'eleve ".$this->name." a ".$this->age." ans";
            }
        }

        $stu = new Student("Optimus ged", 22);
        echo $stu->message();
        echo "<br>";
        $stu = new Student("John Kuhanda", 61);
        echo $stu->message();
    ?>
</body>
</html>