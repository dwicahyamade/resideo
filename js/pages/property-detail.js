$(document).ready(function () {
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Principal and Interest", "Property Taxes", "HOA Dues"],
      datasets: [{
        label: "My First dataset",
        backgroundColor: ['#0070C9', '#4B9AD9', '#99C6E9'],
        data: [23565, 1068, 2036],
      }]
    },
    options: {
      aspectRatio: 1,
      legend: {
        display: false
      },
      responsive: true,
      cutoutPercentage: 90
    }
  });
});