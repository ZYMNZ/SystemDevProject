$(document).ready(
    function() {
        setUpEventHandlers();
    }
);

function setUpEventHandlers() {
    var registrationForm = $("#registrationForm");
    $("[name='submit']").on("click", function(event) {

        var passwordsMatch = doPasswordsMatch();
        var usernameValid = userNameCheckValidation();

        // If the passwords match, submit the form
        if(!passwordsMatch && !usernameValid) {
            event.preventDefault();
        }
    });
}
