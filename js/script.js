function getFormData(id) {
    var values = [];
    var empty = false;
    var pattern = /^[ \t\v\r\n\f]{0,}$/;
    var data = $("#"+id+" [for-saving=true][was-changed=true]");

    for (var i = 0; i < data.length; ++i) {
        var elem = data[i];
        if (pattern.test($(elem).val())) {
            alert("Поле '" + $(elem).attr("name") + "' обязательное к заполнению.");
            empty = true;
            break;
        }

        values.push({
            "value": $(elem).val(),
            "id": $(elem).attr("id"),
        });
    };

    return empty || values.length == 0 ? false : values;
}

function drawParam(data, readonly) {
    var block;

    if (data["param_type_id"] === 1) {
        block = $("<input/>");

    } else if (data["param_type_id"] === 2) {
        block = $("<textarea/>");

    } else if (data["param_type_id"] === 3) {
        block = $("<input/>", {type: "date"});
    }

    if (readonly) {
        block.attr("readonly", true);
    }

    if (data["value"]) {
        block.val(data["value"]);
    }

    block.attr("id", data["id"]);
    block.attr("for-saving", true);
    block.attr("name", data["name"]);

    block.change(function() {
        block.attr("was-changed", true);
    });

    var lable = $("<label/>", {
        text: data["name"],
    });

    return $("<p/>", {class: "row"}).append(lable).append(block);
}

function showBlank(event) {
    var ulForms = $("<ul/>", {});
    $(ulForms).appendTo("#blank");
    $("<div/>", {id: "tabs"}).appendTo("#blank");

    for (i = 0; i < event.length; ++i) {
        if ($("#blank div#form-"+event[i]["form_id"]).attr("id") == undefined) {
            var aForm = $("<a/>", {href: "#form-"+event[i]["form_id"]}).text(event[i]["form_name"]);
            $(ulForms).append($("<li/>").append(aForm));

            var divTabForm = $("<div/>", {id: "form-"+event[i]["form_id"], class: "form"});
            $("#tabs").append(divTabForm);
        }
        $(divTabForm).append(drawParam(event[i], true));
    }
}
