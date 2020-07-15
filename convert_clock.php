<html>
    <head>
        <title>Convert Clock in 24 hour Format</title>
    </head>
    <body>
        <form action="" method="POST" name="form1">
            <table>
                <tr>
                    <td>Input Clock</td>
                    <td><input type="text" name="input_clock"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Convert"></td>
                </tr>
            </table>
        </form>
        <?php
		if($_POST){
			$in = $_POST['input_clock'];
			$clock = $time_in_24_hour_format  = date("H:i:s", strtotime($in));
			echo "Result -> ".$clock;
		}
        ?>
    </body>
</html>