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

        var $whence = $("#whence").val().toLowerCase();
        var $where = $("#where").val().toLowerCase();
        var $startDate = $("#start-date").val();
        var $endDate = $("#end-date").val();
        var $result = $("#result");
        var $classAir = $('input[name="travel-class"]:checked').val();
        if (!$classAir) {
            $classAir = "-"
        }

        var jqxhr = $.getJSON("model/aircraft.json", function() {
                console.log("success");
            })
            .done(function(data) {
                $.each(data, function(i, item) {
                    // console.log($startDate)
                    console.log($startDate)
                    console.log(item.location.toLowerCase() === $whence)
                    console.log(item.where.toLowerCase() === $where)
                    console.log(item.startDate.toLowerCase() == $startDate)

                    if (item.location.toLowerCase() === $whence && item.where.toLowerCase() === $where && item.startDate.toLowerCase() == $startDate) {
                        $result.html(
                            `<div class='row'>
                                <div class='col-md-6'>
                                    <img src='img/plane.png' class='w100'>
                                </div>
                                <div class='col-md-6'> 
                                    <p><b>Откуда: </b> ${item.location} </p>  
                                    <p><b>Куда: </b> ${item.where} </p>
                                    <p><b>Дата отправление: </b> ${item.startDate} </p>
                                    <p><b>Класс: </b> ${$classAir} </p>
                                </div>
                                <div class='col-md-12'> 
                                    <button type="button" class="btn btn-success pull-right btn-lg">Заказать</button>
                                </div>
                            </div>`
                        );
                    } else {
                        $result.html("<p>Нет билетов с такими параметрами</p>");
                    }
                });
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });



        jqxhr.complete(function() {
            console.log("second complete");
        });

        e.preventDefault();
    }

    $("#search-route").click(search);


})();