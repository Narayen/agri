
<!DOCTYPE html>
<html>
    <head>
        <title>Crop selection</title>
    </head>
    <body background = "bg-01.jpg">
    	<form action = "cropvalues.php" method = "POST" align = "center">
    		<div>
    		<div>
    			<p>Select Soil Type</p>
                <select name="soil">
                    <option value="-1" selected>Select Soil type</option>
                    <option value="black soil">black soil</option>
                    <option value="Red soil">Red soil</option>
                    <option value="laterite soil">laterite soil</option>
                    <option value="arid soil">arid soil</option>
                    <option value="forest and mountain soil">forest and mountain soil</option>
                    <option value="desert soil">desert soil</option>
                    <option value="saline">saline</option>
                    <option value="marshy soil">marshy soil</option>
                </select>
                </div>
                <div>
                <p>Select Climate</p>
                <select name="climate">
                    <option value="-1"selected>Select climate</option>
                    <option value="rainy">rainy</option>
                </select>
                </div>
                <div><br/><br/><input type="submit" name="submit" value="check"></div>
            </div>
		</form>    
    </body>
</html>
