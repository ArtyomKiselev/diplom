     <?php

require_once 'connect.php';

//...

     ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>prroducts</title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>descpition</th>
			<th>price</th>
		</tr>

        <?php
            $news1 = mysqli_connect($connect, query:"SELECT * FROM `news`");
            var_dump($news)


        ?>


		<tr>
			<td>1</td>
			<td>news 1</td>
			<td>lorem ispm</td>
			<td>01.05.2023</td>
		</tr>
	</table>
</body>
</html>