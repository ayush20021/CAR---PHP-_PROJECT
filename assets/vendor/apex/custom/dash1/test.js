var options = {
    chart: {
        height: 380,
        type: "area",
        toolbar: {
            show: false,
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "smooth",
        width: 3,
    },
    series: [],
    grid: {
        borderColor: "#dfd6ff",
        strokeDashArray: 5,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
    xaxis: {
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
    },
    yaxis: {
        labels: {
            show: false,
        },
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + "k";
            },
        },
    },
    colors: ["#1a73e8", "#72a3e4"],
};

var chart = new ApexCharts(document.querySelector("#yearlySales"), options);

// Make an AJAX request to fetch data from the server
$.ajax({
    url: 'sales.php', // Replace with the actual path to your PHP script
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        // Assuming the PHP script returns an array
        options.series = [{
            name: "Sold",
            data: response,
        }];
        console.log('Updated Options:', options);
        
        // Render the chart with the updated data
        chart.render();
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
});
