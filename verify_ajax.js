document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("submitButton").addEventListener("click", function() {
        // Get the user input value
        var userInputValue = document.getElementById("userInput").value;

        // Check whether the input is empty or not
        if (userInputValue !== "") {

            // Use AJAX to pass the username to info.php
            var request = new XMLHttpRequest();

            request.open("POST", "info.php", true);
            request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            request.onreadystatechange = function() {
                if (request.readyState === 4 && request.status === 200) {

                    // Handle the response from the server
                    var response = request.responseText;
                    var resultElement = document.getElementById("result");

                    // Update the result element based on the server response
                    if (response === "Verified") {
                        resultElement.innerHTML = "<p class='success'>Verified</p>";
                    } else {
                        resultElement.innerHTML = "<p class='error'>Error</p>";
                    }
                }
            };
            request.send("username=" + encodeURIComponent(userInputValue));
        } else {
            // Handle the case where the username will be empty
            document.getElementById("result").innerHTML = "<p class='infoEmpty'>Key in username and click submit</p>";
        }
    });
});
