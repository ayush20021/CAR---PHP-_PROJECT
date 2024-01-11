$.ajax({
	url: 'd.php', // Change this to the path of your PHP file
	method: 'GET',
	dataType: 'json',
	success: function (data) {
		// Update chart options with dynamic data
		var options = {
			chart: {
				height: 380,
				type: 'area',
				toolbar: {
					show: false,
				},
			},
			dataLabels: {
				enabled: false,
			},
			stroke: {
				curve: 'smooth',
				width: 3,
			},
			series: [
				{
					name: 'Sold',
					data: data.sold,
				},
				{
					name: 'Pre Booked',
					data: data.preBooked,
				},
			],
			grid: {
				borderColor: '#dfd6ff',
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
					'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
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
						return val + 'k';
					},
				},
			},
			colors: ['#1a73e8', '#72a3e4'],
		};

		// Create a new chart with updated options
		var chart = new ApexCharts(document.querySelector('#sales'), options);

		// Render the chart
		chart.render();
	},
	error: function (xhr, status, error) {
		console.error('Error fetching data:', error);
	}
});