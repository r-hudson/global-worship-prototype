function addDropDownOptions(selector, options) {
    var i;
    for (i = 0; i < options.length; i++) {
        console.log(options[i]);
        var option = $("<option></option>");
        option.name = options[i];
        option.value = options[i];
        console.log(option.html());

        $(selector).append(option);
        console.log($(selector).html);
    }
}

$(document).ready(function () {
    //todo: get languages
    var languages = ["English", "Spanish"];

    addDropDownOptions("#languages", languages);
})