function input() {
    var val = document.getElementById("value").value;
    val = val.trim();
    if (val === '') {
        alert("Please fill the field");
        return false;
    }

    if (isNaN(val)) {
        alert("Must input numbers");
    } else {
        $.ajax({
            type: "POST",
            url: "post.php",
            dataType: "JSON",
            data: {val: val},
            cache: false,
            success: [function (data) {
                var arrValues = [];
                $( "#tableData" ).remove();
                var table = "<tbody id=\"tableData\">";
                for (var i = 0; i < data.length; i++) {
                    var value = data[i].val;
                    if (value === '') break;
                    arrValues.push(value);
                    table += "<tr>" +
                        "<td>" + value + "</td>" +
                        "</tr>";
                }
                table += "</tbody>";
                $("#mainTable").append(table);

                new Chart(document.getElementById("line-chart"), {
                    type: 'line',
                    data: {
                        labels: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                        datasets: [{
                            data: arrValues,
                            label: "Demchenko Maxim 121-16-1",
                            borderColor: "#3e95cd",
                            fill: true
                        }
                        ]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'chart for the 1st lab KPZ'
                        }
                    }
                });
            }]
        });
    }
    return false;
}