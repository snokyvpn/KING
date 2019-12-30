var ctx = document.getElementById("uptime");
var config = new Chart(ctx,{
    type: 'pie',
    data: {
        datasets: [{
            data: [<?= $data; ?>],
            backgroundColor: [<?= $background_colour; ?>],
            borderColor: [<?= $border_colour; ?>]
        }],
        labels: [<?= $labels; ?>],
    },
options: {
responsive: true,
animation: {
  animateScale: true,
  animateRotate: true
}
}
});
