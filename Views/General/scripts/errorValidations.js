function removeErrorInputBorder(inputErrorField) {
    inputErrorField.removeClass("invalidInput");
}

function removeErrorInputLabel(inputTextLabel) {
    inputTextLabel.addClass("displayNone");
}

function addErrorInputBorder(inputErrorElement) {
    // Add the red border around the input field
    inputErrorElement.addClass("invalidInput");
}

function addErrorInputLabel(inputErrorLabel, errorLabelText = "") {
    inputErrorLabel.removeClass("displayNone");

    if(errorLabelText !== "") {
        inputErrorLabel.html(errorLabelText);
    }
}


function doPasswordsMatch() {
    var passwordInputField = $("[name='password']");
    var confirmPasswordInputField = $("[name='confirmPassword']");
    var confirmPasswordErrorInputLabel = $("[name='notMatchingPasswordLabel']");

    var regex = /^[\w\.\-]{8,}$/
    var passwordsMatch = false;
    if (passwordInputField.val() === confirmPasswordInputField.val() && regex.test(passwordInputField.val())) {
        removeErrorInputBorder(confirmPasswordInputField);
        removeErrorInputLabel(confirmPasswordErrorInputLabel);
        passwordsMatch = true;
    }

    else {
        addErrorInputBorder(confirmPasswordInputField);
        addErrorInputLabel(confirmPasswordErrorInputLabel, "Passwords do not match or invalid Password\nPassword should have at least 8 alphanumeric characters [optional: '-','.','_']");
    }
    return passwordsMatch;
}


function userNameCheckValidation() {
    var username = $("[name='username']");
    var usernameNameErrorLabel = $("[name='errorUsernameLabel']");

    var regex = /^[\w\-]{5,50}$/;

    var userNameValid = regex.test(username.val());
    var check = false;
    // console.log(firstNameValid);
    if(userNameValid) {
        check = true;
        removeErrorInputBorder(username);
        removeErrorInputLabel(usernameNameErrorLabel);
    }
    else {
        addErrorInputBorder(username);
        addErrorInputLabel(usernameNameErrorLabel, "Username must be a alphanumeric and at least 5 characters, max of 50");
    }
    return check;
}


