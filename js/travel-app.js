(function() {
    "use strict";

    /*
     *   Click add new route
     * */

    var addRoute = function(e) {
        var $clone = $(".add-prototype").clone();
        var $addOrigin = $(".add-new");

        $addOrigin.html($clone);

        e.preventDefault();
    };

    $(".add-route").click(addRoute);

    /*
     *   Search route
     * */

    var search = function(e) {

        e.preventDefault();

        var $whence = $("#whence").val().toLowerCase();
        var $where = $("#where").val().toLowerCase();
        var $startDate = $("#start-date").val();
        var $endDate = $("#end-date").val();
        var $result = $("#result p");
        var $resultSearch = $("#result-search");
        var $resultBody = $("#result-search tbody");
        var $classAir = $('input[name="travel-class"]:checked').val();

        var formData = {
            "location": $whence,
            "whereAir": $where,
            "startDate": $startDate,
            "endDate": $endDate
        };

        if (!$classAir) {
            $classAir = "-"
        }

        var jqxhr = $.ajax({
                url: "aircraft.php",
                type: 'POST',
                data: 'jsonData=' + $.toJSON(formData)
            })
            .done(function(data) {
                console.log(data);
                $resultBody.html("");
                $resultSearch.hide();

                if (data === 'Error empty') {
                    $result.html("Заполнены не все поля");
                    return;
                }

                var result = JSON.parse(data);

                if (result.length === 0) {
                    $result.html("Нет билетов с такими параметрами");
                }

                $resultSearch.show();
                $result.html("");
                console.log(result);

                $.each(result, function(i, item) {
                    $resultBody.append(
                        "<tr>" +
                        "<td>" + item.location + "</td>" +
                        "<td>" + item.whereAir + " </td>" +
                        "<td> " + item.startDate + " </td>" +
                        "<td> " + item.endDate + " </td>" +
                        "<td> " + $classAir + "</td>" +
                        "<td> <button type='button' class='btn btn-success btn-block'>Заказать</button></td>" +
                        "</tr>"
                    );
                });

            })
            .fail(function() {
                console.log("error");
            });
    };

    $("#search-route").click(search);

    var searchOneTravel = function() {
        var $modelTurist = $(".model-turist").val();
        var $resultBody = $("#result-search tbody");
        var $result = $("#result p");
        var $resultOriginal = $("#result-search");
        var formData = {
            "model-turist": $modelTurist
        }
        console.log($modelTurist)
        var jqxhr = $.ajax({
                url: "aircraft-turs.php",
                type: 'POST',
                data: 'jsonData=' + $.toJSON(formData)
            })
            .done(function(data) {
                console.log(data);
                $resultBody.html("");

                if (data === 'Error empty') {
                    $resultOriginal.hide();
                    $result.html("Заполнены не все поля");
                    return;
                }

                var result = JSON.parse(data);

                if (result.length === 0) {
                    $resultOriginal.hide();
                    $result.html("Нет билетов с такими параметрами");
                }

                $result.html("");
                $resultOriginal.show();

                $.each(result, function(i, item) {
                    $resultBody.append(
                        "<tr>" +
                        "<td>" + item.location + "</td>" +
                        "<td>" + item.whereAir + " </td>" +
                        "<td> " + item.startDate + " </td>" +
                        "<td> " + item.endDate + " </td>" +
                        "<td> <button type='button' class='btn btn-success btn-block'>Заказать</button></td>" +
                        "</tr>"
                    );
                });

            })
            .fail(function() {
                console.log("error");
            });
    };

    $(".search-routes-btn").click(searchOneTravel);


})();