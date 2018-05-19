/// <reference path="jquery-1.6.1.js"/>
/// <reference path="jquery.validate.js"/>
$(document).ready(function () {
    var $first = $('input:text,input:password').first();
    if ($first.val() == "")
        $first.focus();

    $("input:text,input:password").focus(function () {
        var name = "#" + $(this).attr("id");
        if ($(name).val() != "" || $(name).filter(".input-validation-error").size() > 0) {
            $("form").validate().element("#" + $(this).attr("id"));
        }
    });

//    var isSubmitted = false;
//    $('#submitButton').click(function () {
//        if (isSubmitted == false) {
//            isSubmitted = true;
//        }
//        else {
//            return;
//        }

//        var $form = $("form");

//        var valid = true;
//        $form.filter("input:text,input:password").each(function () {
//            if (!$form.validate().element("#" + $(this).attr("id"))) {
//                valid = false;
//                return false;
//            }
//        });

//        if (valid == false) {
//            isSubmitted = false;
//            return;
//        }

//        if (!$form.valid()) {
//            isSubmitted = false;
//            return;
//        }

//        $form.submit();
//    });

    var _val_field = null;
    $.extend($.validator.prototype, {
        showLabel: function (element, message) {
            if (message != undefined) {
                _val_field = element;
                $("#alertMessage").html(message);
            }
            else {
                if (_val_field == element) {
                    $("#alertMessage").empty();
                    _val_field = null;
                }

            }
        },
        defaultShowErrors: function () {
            var i = 0;
            for (i = 0; this.errorList[i]; i++) {
                var error = this.errorList[i];
                this.settings.highlight && this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
                this.showLabel(error.element, error.message);
                break;
            }
            if (this.errorList.length) {
                this.toShow = this.toShow.add(this.containers);
            }
            if (this.settings.success) {
                for (i = 0; this.successList[i]; i++) {
                    this.showLabel(this.successList[i]);
                }
            }
            if (this.settings.unhighlight) {
                for (i = 0, elements = this.validElements(); elements[i]; i++) {
                    this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
                }
            }
            this.toHide = this.toHide.not(this.toShow);
            this.hideErrors();
            this.addWrapper(this.toShow).show();
        }
    });
});

function autoTab(from, toName) {
    if (from.getAttribute && from.value.length == from.getAttribute("maxlength"))
        document.getElementById(toName).focus();
}