$(document).ready(
    function() {
        setUpEventHandlers();
    }
);

function setUpEventHandlers() {
    var forgotPasswordForm = $("#forgotPasswordForm");
    $("[name='submit']").on("click", function(event) {
        event.preventDefault();
        var passwordsMatch = doPasswordsMatch();
        var usernameValid = userNameCheckValidation();

        // If the passwords match, submit the form
        if(passwordsMatch && usernameValid) {
            $(this).off("click");
            forgotPasswordForm.submit();
        }
        else {
            document.getElementById('submitbutton').disabled
        }
    });
}
