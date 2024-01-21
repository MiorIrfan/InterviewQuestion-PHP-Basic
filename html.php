<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question A</title>

	<style>
		.panel input {
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 10px;
        }

        .clickButton {
            margin-top: 20px;
        }

         .submit-btn {
         	width: 9%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 160px;
        }
	</style>
</head>
<body>

    <div class="panel">

    	<!--Include the user's input-->
    	<div class="panel">
	    	<label for="userInput">User Name:</label>
			<input type="text" id="userInput">
		</div>

		<!--Include the button-->
		<div class="clickButton">
    		<button class="submit-btn" id="submitButton">Submit</button>
		</div>

		<!--Display the result or outcome-->
		<div class="resultContainer">
    		<p id="result"></p>
		</div>
    </div>
    <!--Connect with verify_ajax.js to enable the functionality-->
    <script src="verify_ajax.js"></script> 

</body>
</html>
