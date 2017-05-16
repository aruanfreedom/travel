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

        var $mainActive = $(".tab-content .tab-pane.active");

        var $whence = $mainActive.find(".whence").val().toLowerCase();
        var $where = $mainActive.find(".where").val().toLowerCase();
        var $startDate = $mainActive.find(".start-date").val();
        var $endDate = $mainActive.find(".end-date").val();

        var sum = $mainActive.find(".whence");
        var formData = {};

        if ($endDate === undefined) {
            $endDate = new Date();
            var curr_date = $endDate.getDate();
            var curr_month = $endDate.getMonth() + 1;
            var curr_year = $endDate.getFullYear();
            $endDate = curr_year + "-" + curr_month + "-" + curr_date;
        }

        var several = function(arr) {
            var $whenceArr = [];
            var $whereArr = [];
            var $startDateArr = [];

            $.each(arr, function(i, item) {
                $whenceArr.push({
                    whendce: $($mainActive.find(".whence")[i]).val().toLowerCase(),
                    where: $($mainActive.find(".where")[i]).val().toLowerCase(),
                    sd: $($mainActive.find(".start-date")[i]).val(),
                    ed: $endDate
                });
            });

            formData = {
                location: $whenceArr
            };

        }

        if (sum.length > 1) {
            several(sum);
        } else {
            formData = {
                location: $whence,
                whereAir: $where,
                startDate: $startDate,
                endDate: $endDate
            };
        }

        var $result = $("#result p");
        var $resultSearch = $("#result-search");
        var $resultBody = $("#result-search tbody");
        var $classAir = $('input[name="travel-class"]:checked').val();



        if (!$classAir) {
            $classAir = "-"
        }

        $resultSearch.hide();

        console.log(formData);

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
                    return;
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

        $resultOriginal.hide();

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
                    return;
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