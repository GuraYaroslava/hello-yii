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

function drawParam(data) {
    var block;

    if (data["param_type_id"] === 1) {
        block = $("<input/>");

    } else if (data["param_type_id"] === 2) {
        block = $("<textarea/>");

    } else if (data["param_type_id"] === 3) {
        block = $("<input/>", {type: "date"});
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
