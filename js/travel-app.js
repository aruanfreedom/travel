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
            $endDate = curr_year + "-" + "0" + curr_month + "-" + curr_date;
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

        };

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
                        "<td> <button type='button' class='btn btn-success btn-block' data-dismiss='modal' data-toggle='modal' data-target='#profile-modal'>Заказать</button></td>" +
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
        };

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
                        "<td> <button type='button' class='btn btn-success btn-block' data-dismiss='modal' data-toggle='modal' data-target='#profile-modal'>Заказать</button></td>" +
                        "</tr>"
                    );
                });

            })
            .fail(function() {
                console.log("error");
            });
    };

    var searchHotels = function(e) {
        e.preventDefault();
        var $country = $("#country").val().toLowerCase();
        var $city = $("#city").val().toLowerCase();
        var $sd = $("#start-date").val();
        var $ed = $("#end-date").val();
        var $numbersCount = $("#numbers").val();

        var $resultBody = $("#result-search tbody");
        var $result = $("#result p");
        var $resultOriginal = $("#result-search");
        var formData = {
            country: $country,
            city: $city,
            sd: $sd,
            ed: $ed,
            numbersCount: $numbersCount
        };

        $resultOriginal.hide();

        var jqxhr = $.ajax({
            url: "hotels-turs.php",
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
                        "<td>" + item.country + "</td>" +
                        "<td>" + item.city + " </td>" +
                        "<td> " + item.startDate + " </td>" +
                        "<td> " + item.endDate + " </td>" +
                        "<td> " + item.numberCount + " </td>" +
                        "<td> <button type='button' class='btn btn-success btn-block'>Заказать</button></td>" +
                        "</tr>"
                    );
                });

            })
            .fail(function() {
                console.log("error");
            });
    };

    var serverSend = function(objArr) {
        var formData = {
            location: $(".location-modal").html(),
            whereAir: $(".whereAir-modal").html(),
            sd: $.trim($(".sd-modal").html()),
            ed: $.trim($(".ed-modal").html()),
            lastName: objArr[0].value,
            name: objArr[1].value,
            otherName: objArr[2].value,
            sex: objArr[3].value,
            birthday: objArr[4].value,
            numberDocument: objArr[5].value,
            phone: objArr[6].value,
            mail: objArr[7].value,
            adults: objArr[8].value,
            children: objArr[9].value,
            childrenBefore: objArr[10].value,
            classStatus: $("#bottom-radio").find("input[name='class-status']:checked")
                                           .parents('label')
                                           .text()
                                           .trim()
        };

        var jqxhr = $.ajax({
            url: "mail.php",
            type: 'POST',
            data: 'jsonData=' + $.toJSON(formData)
        })
            .done(function(data) {
                $('#profile-modal').modal('toggle');
                console.log(data);
            })
            .fail(function() {
                console.log("error");
            });
    };

    var routerData = function(e) {
        e.preventDefault();

        var dataForm = $("#profile-data").serializeArray();

        for(var item in dataForm) {
            if (dataForm[item].value === "" ) {
                $("#profile-data .alert").show();
                setTimeout(function(){
                    $("#profile-data .alert").hide();
                }, 5000);
                return false;
            }
        }

        serverSend(dataForm);
    };

    var orderAir = function(e) {
        var data = [];
        var dataTr = $(e.target).parents("tr").find("td");
        var $mainActive = $(".content-search-travel");
        var $startDate = $mainActive.find(".start-date").val();
        var $endDate = $mainActive.find(".end-date").val();
        var $profileData = $("#profile-data");

      $.each(dataTr, function(i, item){
          var btnValidate = $( (item) ).find("button");
          if( !btnValidate.length ) {
              data.push($(item).html());
          }
      });

      $(".location-modal").html(data[0]);
      $(".whereAir-modal").html(data[1]);
      $(".sd-modal").html(data[2]);
      $(".ed-modal").html(data[3]);

      $profileData.find(".adults").val($mainActive.find("#adulds").val());
      $profileData.find(".childrens-two").val($mainActive.find("#childrens").val());
      $profileData.find(".childrens-after").val($mainActive.find("#childrens-two").val());

        if ($.trim(data[4]) === "Эконом") {
          $( $("#bottom-radio").find("input")[0] ).attr("checked", true);
      } else {
            console.log(data[4]);
            $( $("#bottom-radio").find("input")[1] ).attr("checked", true);
      }

    };

    $(".search-routes-btn").click(searchOneTravel);
    $("#search-hotels").click(searchHotels);

    $("#result-search").click(orderAir);
    $("#order").click(routerData);


})();