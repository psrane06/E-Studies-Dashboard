/* ====== Index ======

1. SCROLLBAR CONTENT
2. TOOLTIPS AND POPOVER
3. JVECTORMAP HOME WORLD
4. JVECTORMAP USA REGIONS VECTOR MAP
5. COUNTRY SALES RANGS
6. JVECTORMAP HOME WORLD
7. CODE EDITOR
8. QUILL TEXT EDITOR
9. MULTIPLE SELECT
10. LOADING BUTTON
11. TOASTER
12. INFO BAR
13. PROGRESS BAR
14. DATA TABLE
15. OWL CAROUSEL

====== End ======*/

$(document).ready(function () {
    "use strict";

    /*======== 1. SCROLLBAR CONTENT ========*/

    /*======== 2. TOOLTIPS AND POPOVER ========*/
    $('[data-toggle="tooltip"]').tooltip({
        container: "body",
        template:
            '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    });
    $('[data-toggle="popover"]').popover();


    /*======== 5. COUNTRY SALES RANGS ========*/
    var countrySalesRange = $("#country-sales-range");
    if (countrySalesRange.length != 0) {
        var start = moment().subtract(29, "days");
        var end = moment();

        function cb(start, end) {
            $("#country-sales-range .date-holder").html(
                start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
            );
        }

        countrySalesRange.daterangepicker(
            {
                startDate: start,
                endDate: end,
                opens: "left",
                ranges: {
                    Today: [moment(), moment()],
                    Yesterday: [
                        moment().subtract(1, "days"),
                        moment().subtract(1, "days"),
                    ],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                    "Last Month": [
                        moment().subtract(1, "month").startOf("month"),
                        moment().subtract(1, "month").endOf("month"),
                    ],
                },
            },
            cb
        );

        cb(start, end);
    }
    var miniStatusRanges = $("#mini-status-range");

    if (miniStatusRanges.length != 0) {
        var start = moment().subtract(29, "days");
        var end = moment();

        function cb(start, end) {
            $("#mini-status-range .date-holder").html(
                start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
            );
        }

        miniStatusRanges.daterangepicker(
            {
                startDate: start,
                endDate: end,
                opens: "left",
                ranges: {
                    Today: [moment(), moment()],
                    Yesterday: [
                        moment().subtract(1, "days"),
                        moment().subtract(1, "days"),
                    ],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                    "Last Month": [
                        moment().subtract(1, "month").startOf("month"),
                        moment().subtract(1, "month").endOf("month"),
                    ],
                },
            },
            cb
        );

        cb(start, end);
    }

    /*======== 6. JVECTORMAP HOME WORLD ========*/
    var countryWithMarker = $("#world-country-with-marker");
    if (countryWithMarker.length != 0) {
        var colorData = {
            CA: 106,
            US: 166,
            RU: 166,
            AR: 166,
            AU: 120,
            IN: 106,
        };
        countryWithMarker.vectorMap({
            map: "world_mill",
            backgroundColor: "#fff",
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: "#cbccd4",
                },
            },
            series: {
                regions: [
                    {
                        values: colorData,
                        scale: ["#9e6cdf", "#dfe0e4", "#f9aec9"],
                    },
                ],
            },
            markers: [
                { latLng: [56.13, -106.34], name: "Vatican City" },
                { latLng: [37.09, -95.71], name: "Washington" },
                { latLng: [-14.23, -51.92], name: "Brazil" },
                { latLng: [17.6078, 8.0817], name: "Tuvalu" },
                { latLng: [47.14, 9.52], name: "Liechtenstein" },
                { latLng: [20.59, 78.96], name: "India" },
                { latLng: [61.52, 105.31], name: "Russia" },
            ],
        });
    }

    var usVectorMapWithoutMarker = $("#us-vector-map-without-marker");
    if (usVectorMapWithoutMarker.length != 0) {
        usVectorMapWithoutMarker.vectorMap({
            map: "us_aea",
            backgroundColor: "#transparent",
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: "#eff0f5",
                },
            },
            markerStyle: {
                hover: {
                    stroke: "transparent",
                },
            },
        });
    }

    /*======== 7. CODE EDITOR ========*/
    var codeEditor = document.getElementById("code-editor");
    if (codeEditor) {
        var htmlCode = `<html style="color: green">
  <!-- this is a comment -->
  <head>"
    <title>HTML Example</title>
  </head>
  <body>
    The indentation tries to be <em>somewhat &quot;do what
    I mean&quot;</em>... but might not match your style.
  </body>
</html>`;

        var myCodeMirror = CodeMirror(codeEditor, {
            value: htmlCode,
            mode: "xml",
            extraKeys: { "Ctrl-Space": "autocomplete" },
            lineNumbers: true,
            indentWithTabs: true,
            lineWrapping: true,
        });
    }

    /*======== 10. LOADING BUTTON ========*/
    var laddaButton = $(".ladda-button");
    if (laddaButton.length != 0) {
        Ladda.bind(".ladda-button", {
            timeout: 1000,
        });
    }

    /*======== 11. TOASTER ========*/
    var toaster = $("#toaster");
    function callToaster(positionClass) {
        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: positionClass,
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        };
        toastr.success("Welcome to Mono Dashboard", "Howdy!");
    }

    if (toaster.length != 0) {
        if (document.dir != "rtl") {
            callToaster("toast-top-right");
        } else {
            callToaster("toast-top-left");
        }
    }

    /*======== 12. INFO BAR ========*/
    var infoTeoaset = $(
        "#toaster-info, #toaster-success, #toaster-warning, #toaster-danger"
    );
    if (infoTeoaset !== null) {
        infoTeoaset.on("click", function () {
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: false,
                progressBar: false,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "3000",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
            var thisId = $(this).attr("id");
            if (thisId === "toaster-info") {
                toastr.info("Welcome to Mono", " Info message");
            } else if (thisId === "toaster-success") {
                toastr.success("Welcome to Mono", "Success message");
            } else if (thisId === "toaster-warning") {
                toastr.warning("Welcome to Mono", "Warning message");
            } else if (thisId === "toaster-danger") {
                toastr.error("Welcome to Mono", "Danger message");
            }
        });
    }

    /*======== 13. PROGRESS BAR ========*/
    //   NProgress.done();

    /*======== 14. DATA TABLE ========*/
    var productsTable = $("#productsTable");
    if (productsTable.length != 0) {
        productsTable.DataTable({
            autowidth: true,
            info: false,
            lengthChange: false,
            lengthMenu: [
                [5, 10, 15, -1],
                [5, 10, 15, "All"],
            ],
            scrollX: true,
            order: [[2, "asc"]],
            columnDefs: [
                {
                    orderable: false,
                    targets: [, 0, 6, -1],
                },
                {
                    className: "description-cell",
                    targets: [4]
                },
                {
                    'targets': [0],
                    'searchable': false,
                    'orderable':false,
                    'render': function (data, type, full, meta) {
                    return '<img src="'+data+'" />';
                                      }
                },
            ],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search...",
            },
        });
    }

    /*======== 7. CIRCLE PROGRESS ========*/
    var circle = $(".circle");
    var gray = "#f5f6fa";

    if (circle.length != 0) {
        circle.circleProgress({
            lineCap: "round",
            startAngle: 4.8,
            emptyFill: [gray],
        });
    }
});
