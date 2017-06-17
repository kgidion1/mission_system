//select all
$(".input-select-all").change(function () {

    var target = $(this).attr("data-target");
    // alert(target)

    var checked = $(this).is(":checked");
    $(target + " input[type=checkbox]").attr("checked", checked);

});


$(function () {

    //////////////check group checkboxes/////////
    $("body .input-select-all").each(function () {

        var target = $(".input-select-all").attr("data-target");
        // alert(target)

        var checked = $(".input-select-all").is(":checked");
        $(target + " input[type=checkbox]").attr("checked", checked);

    });
    //////////////////////


    $(document).on("click", ".step-control .item", function (e) {
        e.preventDefault;
        var t = $(this).attr("href");
        var current = $(".step-control .item.active");

        var curr = $(this).attr("href");
        curr = curr.substring(1);
        tnum = t.substring(1);
        if (!inputsEmpty(".item.active") || curr > tnum) {
            //code

            $(this).parent().find(".item").removeClass("active");
            $(this).addClass("active");

            //switch tab

            $(".steps .item").removeClass("active");
            $(".steps .item" + t).addClass("active");


            if ($(".steps .item.active").next().length != 0) {

                $(".step-ride .next").removeClass("hide");
                $(".step-ride .save").addClass("hide");

            } else {

                $(".step-ride .next").addClass("hide");
                $(".step-ride .save").removeClass("hide");
            }

        }






    });




    $(".square").each(function () {

        var t = $(this).width();
        $(this).css({
            "height": t + "px",
            "opacity": 1
        });

    });


    ///position drop menus
    // $(".overflow-menu").each(function () {
    //        var menubox = $(this);
    //        var h = menubox.height;
    //        var hb = menubox.offset().bottom - $("tbody").height();
    //        var ph = 32;





    // });



    //scale table
    $(".tableSection").each(function (i, table) {
        var theight = $(document).height() - $(table).find("tbody").offset().top;
        theight = theight - 20;
        $(table).find("tbody").css("height", theight + "px");
    });

    //scale fill heigh
    //scale table
    $(".fill-height").each(function (i, fh) {
        var fillheight = $(document).height() - $(fh).offset().top;
        fillheight = fillheight - 20;
        $(fh).css("height", fillheight + "px");
        //alert(fillheight)
        //alert(theight);
    });



});

$(document).on("click", ".select-box", function (e) {
    //alert(00)

    //$(this).parent().find("input[type=file]").val("");
    //$(this).find("select").click();

});

$(document).on("click", ".browse-file", function (e) {


    //$(this).parent().find("input[type=file]").val("");
    $(this).parent().find("input[type=file]").click();

});

var menu = 0;
$(document).on("click", ".overflow .overflow-toggle", function (e) {
    //alert(3)
    e.stopImmediatePropagation();

    var menubox = $(this).parent().find(".overflow-menu");

    if (menu == 0) {
        menubox.fadeIn(100);
        menu = 1;
    } else {
        $(".overflow-menu").fadeOut(100);
        menubox.fadeIn(100);
        menu = 1;
    }

    //    var h = menubox.height;
    //    var hb = menubox.offset().bottom - $("tbody").height();
    //    var ph = 32;
    //
    //    if (elementInViewport(menubox).find("li:last-child").is("visible")) {
    //        alert(2)
    //        menubox.css("botton", "-" + ph + "px");
    //    } else {
    //
    //        menubox.css("top", ph + "px");
    //    }

});

$(".overflow-menu").click(function (e) {

})

$(document, ".overflow-menu a").on("click", function () {
    $(".overflow-menu").fadeOut(10);
    menu = 0;
})

$("tbody").on("scroll", function () {
    $(".overflow-menu").fadeOut(10);
    menu = 0;



})





function elementInViewport(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;

    while (el.offsetParent) {
        el = el.offsetParent;
        top += el.offsetTop;
        left += el.offsetLeft;
    }

    return (
        top >= window.pageYOffset &&
        left >= window.pageXOffset &&
        (top + height) <= (window.pageYOffset + window.innerHeight) &&
        (left + width) <= (window.pageXOffset + window.innerWidth)
    );
}


function notify(type, msg, duration) {
    var id = new Date().getMilliseconds();
    var icon = "fa fa-close";
    var htm = "<div class='e-notify " + type +
        "' id='" + htm + "'><p><i class='fa " + icon +
        "'></i> " + msg +
        "</p><a class='close' onclick='close(this)'><i class='fa fa-close-circle'></i></a></div>";

    $(document).append(thm);
    setTimeout(function () {
        $($("#" + id)).remove()
    }, duration);
}


function nextStep(element, e) {
    //code
    e.preventDefault;
    //var t = $(el).attr("href");
    var current = $(".step-control .item.active"),
        nextStep = current.next();
    nextStep.click();


}

function prevStep(element, e) {
    //code
    e.preventDefault;
    //var t = $(el).attr("href");
    var current = $(".step-control .item.active"),
        prevStep = current.prev();
    prevStep.click();


}

function gotoStep(position) {
    //code
    e.preventDefault;
    //var t = $(el).attr("href");
    var step = $(".step-control .item:eq(" + position + ")");
    step.click();


}



function progressDialog(message) {

    swal({
        title: "",
        text: "<br/><i class='fa fa-spin fa-spinner'></i> <strong>" + message + "</strong>",
        html: true,
        showConfirmButton: false
    });

}


function loader(selector, message) {
    if ($(selector).hasClass("btn")) {
        $(selector).html("<i class='fa fa-spin fa-spinner'></i> <strong> " + message + "</strong>");


    } else {
        $(selector).html("<br/><i class='fa fa-spin fa-spinner'></i> <strong> " + message + "</strong>");
    }
}

function successDialog(title, message) {
    //code

    swal({
        title: title,
        text: message,
        html: true,
        showConfirmButton: true,
        type: "success"
    });
}

function infoDialog(message) {
    //code

    swal({
        title: "",
        text: "<i class='text-blue fa fa-exclamation-circle'></i> " + message,
        html: true,
        showConfirmButton: true,
        type: ""
    });
}

//Date
if ($('.date-picker')[0]) {
    $('.date-picker').datetimepicker({
        format: 'DD/MM/YYYY'
    });
}
