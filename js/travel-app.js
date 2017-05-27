(function() {
    "use strict";

    /*
     *   Click add new route
     * */

    var lang = (localStorage.lang) ? localStorage.lang : $("html").attr("lang");

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

        var $result = $(".result .status-message");
        var $resultSearch = $(".result-search");
        var $resultBody = $(".result-search tbody");
        var $classAir = $('input[name="travel-class"]:checked').val();

        if (!$classAir) {
            $classAir = "-"
        }

        $resultSearch.hide();

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
                    var langRequired = (lang === "ru") ? "Заполнены не все поля" : "Барлық параметірлер еңгізілмеген";
                    $result.html(langRequired);
                    return;
                }

                var result = JSON.parse(data);

                if (result.length === 0) {
                    var langNotFound = (lang === "ru") ? "Нет билетов с такими параметрами" : "Осындай параметірлермен билет табылған жоқ";
                    $result.html(langNotFound);
                    return;
                }

                $resultSearch.show();
                $result.html("");

                var langOrder = (lang === "ru") ? "Заказать" : "Тапсырыс беру";

                $.each(result, function(i, item) {
                    $resultBody.append(
                        "<tr>" +
                        "<td>" + item.location + "</td>" +
                        "<td>" + item.whereAir + " </td>" +
                        "<td> " + item.startDate + " </td>" +
                        "<td> " + item.endDate + " </td>" +
                        "<td> " + $classAir + "</td>" +
                        "<td class='summa-air-td'> " + item.summaAir + "</td>" +
                        "<td> <button type='button' class='btn btn-success btn-block' data-dismiss='modal' data-toggle='modal' data-target='#profile-modal'>"+  langOrder +"</button></td>" +
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
        var $resultBody = $(".result-search tbody");
        var $result = $(".result p");
        var $resultOriginal = $(".result-search");
        var formData = {
            "model-turist": $modelTurist
        };

        console.log(formData);

        $resultOriginal.hide();

        var jqxhr = $.ajax({
                url: "aircraft-turs.php",
                type: 'POST',
                data: 'jsonData=' + $.toJSON(formData)
            })
            .done(function(data) {
                $resultBody.html("");

                if (data === 'Error empty') {
                    $resultOriginal.hide();
                    var langRequired = (lang === "ru") ? "Заполнены не все поля" : "Барлық параметірлер еңгізілмеген";
                    $result.html(langRequired);
                    return;
                }

                var result = JSON.parse(data);

                if (result.length === 0) {
                    $resultOriginal.hide();
                    var langNotFound = (lang === "ru") ? "Нет билетов с такими параметрами" : "Осындай параметірлермен билет табылған жоқ";
                    $result.html(langNotFound);
                    return;
                }

                $result.html("");
                $resultOriginal.show();

                var langOrder = (lang === "ru") ? "Заказать" : "Тапсырыс беру";


                $.each(result, function(i, item) {
                    $resultBody.append(
                        "<tr>" +
                        "<td>" + item.location + "</td>" +
                        "<td>" + item.whereAir + " </td>" +
                        "<td> " + item.startDate + " </td>" +
                        "<td> " + item.endDate + " </td>" +
                        "<td class='summa-air-td'> " + item.summaAir + " </td>" +
                        "<td> <button type='button' class='btn btn-success btn-block' data-dismiss='modal' data-toggle='modal' data-target='#profile-modal'>"+  langOrder +"</button></td>" +
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
        var $sd = $("#start-date-hotels").val();
        var $ed = $("#end-date-hotels").val();
        var $numbersCount = $("#numbers").val();


        var $resultBody = $(".result-search tbody");
        var $result = $(".result p");
        var $resultOriginal = $(".result-search");
        var formData = {
            country: $country,
            city: $city,
            sd: $sd,
            ed: $ed,
            numbersCount: $numbersCount
        };

        console.log(formData);



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
                    var langRequired = (lang === "ru") ? "Заполнены не все поля" : "Барлық параметірлер еңгізілмеген";
                    $result.html(langRequired);
                    return;
                }

                var result = JSON.parse(data);

                if (result.length === 0) {
                    $resultOriginal.hide();
                    var langNotFound = (lang === "ru") ? "Нет билетов с такими параметрами" : "Осындай параметірлермен билет табылған жоқ";
                    $result.html(langNotFound);
                    return;
                }

                $result.html("");
                $resultOriginal.show();

                var langOrder = (lang === "ru") ? "Заказать" : "Тапсырыс беру";

                $.each(result, function(i, item) {
                    $resultBody.append(
                        "<tr>" +
                        "<td>" + item.country + "</td>" +
                        "<td>" + item.city + " </td>" +
                        "<td> " + item.startDate + " </td>" +
                        "<td> " + item.endDate + " </td>" +
                        "<td> " + item.numberCount + " </td>" +
                        "<td class='summa-hotel-td'> " + item.summaHotel + " </td>" +
                        "<td> " + item.name + " </td>" +
                        "<td> " + item.address + " </td>" +
                        "<td> <button type='button' class='btn btn-success btn-block order-hotel' data-dismiss='modal' data-toggle='modal' data-target='#profile-modal'>"+  langOrder +"</button></td>" +
                        "</tr>"
                    );
                });

            })
            .fail(function() {
                console.log("error");
            });
    };

    var serverSend = function(objArr) {
        console.log(objArr);
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
                                           .trim(),
            summaAir: localStorage.summaAir
        };

        if(objArr[12]) {
            formData.country = objArr[12].country;
            formData.city = objArr[12].city;
            formData.numbers = objArr[12].numbers;
            formData.summaHotel = localStorage.summaHotel;
            formData.name_hotel = objArr[12].name_hotel;
            formData.adress_hotel = objArr[12].adress_hotel;
        }

        console.log(formData);

        var jqxhr = $.ajax({
            url: "mail.php",
            type: 'POST',
            data: 'jsonData=' + $.toJSON(formData)
        })
            .done(function(data) {
                console.log(data);
                $('#profile-modal').modal('toggle');
                if (data === "success") {
                    $(".alert-success").show();
                    setTimeout(function() {
                        $(".alert-success").hide();
                    }, 5000);
                }
            })
            .fail(function() {
                console.log("error");
            });
    };

    var routerData = function(e) {
        e.preventDefault();
        var $hotelsVerify = $("#search-hotels-block");
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

        if ($hotelsVerify.length) {
            dataForm.push({
                country: $hotelsVerify.find("#country").val().toLocaleLowerCase(),
                city: $hotelsVerify.find("#city").val().toLocaleLowerCase(),
                numbers: $hotelsVerify.find("#numbers").val(),
                name_hotel: $(".name-hotel").html(),
                adress_hotel: $(".adress-hotel").html(),
            });
        }

        console.log(dataForm);

        serverSend(dataForm);

    };

    var orderAir = function(e) {
        var data = [];
        var dataTr = $(e.target).parents("tr").find("td");
        var $mainActive = $(".content-search-travel");
        var $startDate = $mainActive.find(".start-date").val();
        var $endDate = $mainActive.find(".end-date").val();
        var $profileData = $("#profile-data");
        var summaVerify = $(e.target).parents("tr").find(".summa-air-td").length;

        var summaHotel = $(e.target).parents("tr").find(".summa-hotel-td").html();


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

      if (summaVerify) {
          if (data.length >= 6) {
              localStorage.summaAir = data[5];
              $(".summa-air").html(localStorage.summaAir);
          } else {
              localStorage.summaAir = data[4];
              $(".summa-air").html(localStorage.summaAir);
          }
      }

        if (summaHotel) {
            localStorage.summaHotel = summaHotel;
            $(".summa-hotel").html(localStorage.summaHotel);
            $(".summa-air").html("");
            $(".name-hotel").html(data[6]);
            $(".adress-hotel").html(data[7]);
        } else {
            $(".summa-hotel").html("");
        }

      $profileData.find(".adults").val($mainActive.find("#adulds").val());
      $profileData.find(".childrens-two").val($mainActive.find("#childrens").val());
      $profileData.find(".childrens-after").val($mainActive.find("#childrens-two").val());

        if ($.trim(data[4]) === "Эконом") {
            $($("#bottom-radio").find("input")[0]).attr("checked", true);
        } else {
            $($("#bottom-radio").find("input")[1]).attr("checked", true);
        }

    };

    $(".search-routes-btn").click(searchOneTravel);
    $("#search-hotels").click(searchHotels);

    $(".result-search").click(orderAir);
    $("#order").click(routerData);

    localStorage.summaAir = "";
    localStorage.summaHotel = "";


})();