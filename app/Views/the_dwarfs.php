<!doctype html>
<html>
<head>
    <title>The Dwarfs</title>
</head>
<body>
<a href="\">Home</a>
<h1>The Dwarfs</h1>
<ul>
    <?php foreach ($records as $record) {
        echo '<li><a href="/chores/assign/'.$record['id'].'">'.$record['id'].': '.$record['name'].' ', ' - ', ' '.$record['role'].'</a></li>';
    }
    ?>
</ul>
</body>
</html>