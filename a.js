document.addEventListener("DOMContentLoaded", function() {
    // Your JavaScript code here
    // Initial chart options
var options = {
    chart: {
        height: 380,
        type: "line",
    },
    series: [{
        name: "Items Sold",
        data: [],
    }],
    xaxis: {
        categories: [],
    },
};

$(document).ready(function() {
    var chart = new ApexCharts(document.querySelector("#sales"), options);
chart.render();
    // Your ApexCharts initialization code here
});

// Initialize the chart


// Function to fetch data from the server
function fetchData() {
    $.ajax({
        url: 'sales_data.php', // Replace with the actual path to your PHP script
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            // Assuming the PHP script returns an array of data
            options.series[0].data = response.data;
            options.xaxis.categories = response.categories;

            // Update the chart with the new data and re-render
            chart.updateSeries(options.series);
            chart.updateOptions(options.xaxis);
            chart.render();

            // Fetch data again after a delay (for demonstration purposes)
            setTimeout(fetchData, 5000); // Fetch data every 5 seconds
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error fetching data:');
            console.log('jqXHR:', jqXHR);
            console.log('textStatus:', textStatus);
            console.log('errorThrown:', errorThrown);

            // Retry fetching data after an error
            setTimeout(fetchData, 5000); // Retry after 5 seconds
        }
    });
}

// Initial data fetch
fetchData();

});