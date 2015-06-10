function Validate(form) {
    var errorMessage = "";
    var warningDiv = document.getElementById("warning");

    errorMessage += ValidateEmpty(form.namefield);
    errorMessage += ValidateEmail(form.emailfield);
    errorMessage += ValidateAge(form.agefield);
    errorMessage += ValidateEmpty(form.subjectfield);
    errorMessage += ValidateEmpty(form.messagefield);

    if (errorMessage !== "") {
        warningDiv.innerHTML = errorMessage;
        warningDiv.style.background = 'Yellow';
        return false;
    } else {
        warningDiv.innerHTML = "";
        warningDiv.style.background = 'Black';
        return true;
    }
}

function ValidateEmpty(field) {
    var error = "";
    if (field.value.length === 0) {
        field.style.background = 'Yellow';
        error = "This field can not be empty!<br/>";
    } else {
        field.style.background = 'White';
    }
    return error;
}

function ValidateEmail(field) {
    var error = "";
    var emailAdress = field.value.trim();
    if (emailAdress.length === 0) {
        error = "You did not enter an emailadress!<br/>";
        field.style.background = 'Yellow';
    } else {
        var atSymbol = emailAdress.indexOf("@");
        var dot = emailAdress.indexOf(".");
        if (atSymbol < 1) {  //@-position in the beginning or not at all
            error = "You did not enter a valid emailaddress! : @ is missing";
            field.style.background = 'Yellow';
        } else if (dot <= atSymbol + 2) { //.-position before @ or just after it
            error = "You did not enter a valid emailaddress! : . is missing";
            field.style.background = 'Yellow';
        } else if (dot === emailAdress.length - 1) { //.-position at the end
            error = "You did not enter a valid emailaddress! : . in the beginning!";
            field.style.background = 'Yellow';
        } else {
            field.style.background = 'White';
        }
    }
    return error;
}

function ValidateAge(field) {
    var error = "";
    var age = field.value;
    if (age === "") {
        error = "You did not enter an age!<br/>";
        field.style.background = 'Yellow';
    } else if (isNaN(age)) {
        error = "You can only enter numbers!<br/>";
        field.style.background = 'Yellow';
    } else if (age < 1 || age > 125) {
        error = "Please enter a correct age!<br/>";
        field.style.background = 'Yellow';
    } else {
        field.style.background = 'White';
    }
    return error;
}

function Reset(form) {
    form.reset();
    var warningDiv = document.getElementById("warning");
    warningDiv.innerHTML = "";
    warningDiv.style.background = 'Black';

    form.messagefield.style.background = 'White';

    inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++)
    {
        inputs[i].style.background = 'White';

    }
}