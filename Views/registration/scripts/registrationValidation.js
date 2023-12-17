$(document).ready(
    function() {
        setUpEventHandlers();
    }
);

function setUpEventHandlers() {
    var registrationForm = $("#registrationForm");
    $("[name='submit']").on("click", function(event) {
        event.preventDefault();
        var passwordsMatch = doPasswordsMatch();
        var usernameValid = userNameCheckValidation();

        // If the passwords match, submit the form
        if(passwordsMatch && usernameValid) {
            $(this).off("click");
            registrationForm.submit();
        }
        else {
            document.getElementById('submitbutton').disabled
        }
    });
}
