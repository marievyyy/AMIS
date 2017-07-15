<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Post Details Search Engine</title>
</head>
<body>
<form method="post" action="<?php echo base_url() . "SearchEngine"; ?>">
<input type="text" class="searchBox" id="searchBox" name="search"> </input>
<input type="submit" value="Search" class="btnInput" id="btnInput"> </input>
</form>
<br><br>
<?php
if(!empty($_POST)) {
	echo '<hr>';
	echo '<h3> Post Details </h3>';
	echo '<table id="maintable"  class="table">';
	echo '<th> Post Code</th>';
	echo '<th> Title </th>';
	echo '<th> Details </th>';
	echo '<th> Author </th>';

foreach($SearchPost as $rows) {
    echo '<tr>
            <td>'.$rows->postCode.'</td>
            <td>'.$rows->title.'</td>
            <td>'.$rows->details.'</td>
            <td>'.$rows->author.'</td>
        </tr>';
}
echo '</table>';

}
?>
</body>
</html>