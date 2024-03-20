function formValidate(formId, messages) {
    return $(formId).validate({
        messages: { ...messages },
        errorPlacement: function (error, element) {
            error.css({
                "font-style": "italic",
                "font-weight": "bold",
                color: "red",
            });

            var parentClass = element.parent().attr("class");
            if (parentClass.includes("group")) {
                error.insertAfter(element.parent());
            } else {
                // If no parent, insert after the element itself
                error.insertAfter(element);
            }
        },
    });
}
