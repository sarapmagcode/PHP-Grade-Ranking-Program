<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Grade Ranking Program</title>
    </head>
    <body>
        <!-- PHP Codes -->
        <?php
            $name = "Mark Jason T. Galang";
            $ranking = "";
            $grade = 100;
            if ($grade < 60) {
                $ranking = "F";
            } else if ($grade < 63) {
                $ranking = "D-";
            } else if ($grade < 67) {
                $ranking = "D";
            } else if ($grade < 70) {
                $ranking = "D+";
            } else if ($grade < 73) {
                $ranking = "C-";
            } else if ($grade < 77) {
                $ranking = "C";
            } else if ($grade < 80) {
                $ranking = "C+";
            } else if ($grade < 83) {
                $ranking = "B-";
            } else if ($grade < 87) {
                $ranking = "B";
            } else if ($grade < 90) {
                $ranking = "B+";
            } else if ($grade < 93) {
                $ranking = "A-";
            } else if ($grade <= 100) {
                $ranking = "A";
            }
        ?>
        <!-- Profile Container -->
        <div class="container">
            <img src="images/photo.JPG" alt="photo">
            <h1><?php echo $name; ?></h1>
            <div class="rank">
                <h2><?php echo "Rank " . $ranking; ?></h2>
            </div>
            <div class="grade">
                <h2>
                    <?php
                        if ($grade < 60) {
                            echo "Below 60";
                        } else {
                            echo "Grade " . $grade;
                        }
                    ?>
                </h2>
            </div>
        </div>
    </body>
</html>