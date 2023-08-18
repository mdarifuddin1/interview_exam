<!DOCTYPE html>
<html>

<head>
    <title>Employee Salary Systam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Employee Salary Information</h2>
        <?php
        include 'employee.php';

        $employee1 = new Employee("Md Arif Uddin", 50000);
        $employee2 = new Employee("Md Nizam Uddin", 60000);

        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $employee1->getName() . '</h5>';
        echo '<p class="card-text">Salary: '. $employee1->getSalary(). ' TK'. '</p>';
        echo '</div>';
        echo '</div>';

        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $employee2->getName() . '</h5>';
        echo '<p class="card-text">Salary: '. $employee2->getSalary() . ' TK'. '</p>';
        echo '</div>';
        echo '</div>';
        ?>
    </div>
</body>

</html>