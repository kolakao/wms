// we add a custom jquery validation method
$.validator.addMethod('checkNotContinue', function (value, element, params) {
    return checkNotContinue(value);
}, '');

// and an unobtrusive adapter
$.validator.unobtrusive.adapters.add('notcontinue', {}, function (options) {
    if (options.element.tagName.toUpperCase() == "INPUT" && options.element.type.toUpperCase() == "PASSWORD") {
        options.rules['checkNotContinue'] = true;
        if (options.message) {
            options.messages['checkNotContinue'] = options.message;
        }
    }
});

// we add a custom jquery validation method
$.validator.addMethod('checkNotRepeat', function (value, element, params) {
    return checkNotRepeat(value);
}, '');

// and an unobtrusive adapter
$.validator.unobtrusive.adapters.add('notrepeat', {}, function (options) {
    if (options.element.tagName.toUpperCase() == "INPUT" && options.element.type.toUpperCase() == "PASSWORD") {
        options.rules['checkNotRepeat'] = true;
        if (options.message) {
            options.messages['checkNotRepeat'] = options.message;
        }
    }
});


// we add a custom jquery validation method
$.validator.addMethod("notcompare", function (value, element, params) {
    if (!this.optional(element)) {
        var otherProp = $('#' + params)
        return (otherProp.val() != value);
    }
    return true;
});
$.validator.unobtrusive.adapters.addSingleVal("notcompare", "otherproperty");

// we add a custom jquery validation method
$.validator.addMethod("notduplicated", function (value, element, params) {
    if (!this.optional(element)) {
        var otherProp = $('#' + params)
        return checkNotDuplicated(value, otherProp.val());
    }
    return true;
});
$.validator.unobtrusive.adapters.addSingleVal("notduplicated", "otherproperty");   


// we add a custom jquery validation method
$.validator.addMethod('checkNotNumberOnly', function (value, element, params) {
    return checkNotNumberOnly(value);
}, '');

// and an unobtrusive adapter
$.validator.unobtrusive.adapters.add('notnumber', {}, function (options) {
    if (options.element.tagName.toUpperCase() == "INPUT" && options.element.type.toUpperCase() == "TEXT") {
        options.rules['checkNotNumberOnly'] = true;
        if (options.message) {
            options.messages['checkNotNumberOnly'] = options.message;
        }
    }
});

// we add a custom jquery validation method
$.validator.addMethod('checkPasswordCharacter', function (value, element, params) {
    if (!value)
        return true;

    var c;
    for (var i = 0; i < value.length; i++) {
        c = value.charAt(i);
        if (c < '!' || c == '\\' || c > '~')
            return false;
    }

    return true;
}, '');

// and an unobtrusive adapter
$.validator.unobtrusive.adapters.add('passwordcharacter', {}, function (options) {
    if (options.element.tagName.toUpperCase() == "INPUT" && options.element.type.toUpperCase() == "PASSWORD") {
        options.rules['checkPasswordCharacter'] = true;
        if (options.message) {
            options.messages['checkPasswordCharacter'] = options.message;
        }
    }
});

var chars = "abcdefghijklmnopqrstuvwxyz";
var numbers = "01234567890";

function checkNotContinue(value) {
    if (!value || value.length < 4)
        return true;

    var input = value.toLowerCase();

    for (var i = 0; i < input.length - 3; i++) 
    {
        for (var j = 0; j < chars.length - 3; j++)
        {
            if (input.charAt(i) == chars.charAt(j) && input.charAt(i + 1) == chars.charAt(j + 1) && input.charAt(i + 2) == chars.charAt(j + 2) && input.charAt(i + 3) == chars.charAt(j + 3))
                return false;
        }

        for (j = 0; j < numbers.length - 3; j++)
        {
            if (input.charAt(i) == numbers.charAt(j) && input.charAt(i + 1) == numbers.charAt(j + 1) && input.charAt(i + 2) == numbers.charAt(j + 2) && input.charAt(i + 3) == numbers.charAt(j + 3))
                return false;
        }
    }

    return true;
}

function checkNotRepeat(value) {
    if (!value || value.length < 4)
        return true;

    for (var i = 0; i < value.length; i++) {
        if (value.charAt(i) == value.charAt(i + 1) && value.charAt(i) == value.charAt(i + 2) && value.charAt(i) == value.charAt(i + 3))
            return false;
    }

    return true;
}

function checkNotNumberOnly(value) {
    if (!value || value.length < 4)
        return true;

    return !value.match(/^\d+$/);
}

function checkNotDuplicated(value1, value2) {
    if (!value1 || value1.length < 4 || !value2 || value2.length < 4)
        return true;

     for (var i = 0; i < value1.length - 3; i++)
    {
        for (var j = 0; j < value2.length - 3; j++)
        {
            if (value1.charAt(i) == value2.charAt(j) && value1.charAt(i+1) == value2.charAt(j+1) && value1.charAt(i+2) == value2.charAt(j+2) && value1.charAt(i+3) == value2.charAt(j+3))
            {
                return false;
            }
        }            
    }

    return true;
}


//function checkStrongPassword(value) {
//    if (!value || value == "")
//        return true;

//    return Regex.IsMatch(valueString, "\d+") && Regex.IsMatch(valueString, "[a-zA-Z]+") && Regex.IsMatch(valueString, "[^0-9a-zA-Z]+");
//}