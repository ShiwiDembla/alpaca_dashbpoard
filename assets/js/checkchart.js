    // <script>

        {/* <?php  $arr = [41,55,31,25,65,25,42];?>  */}
    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly of Sales',
        // data: [18, 12, 6, 9, 12, 3, 9],
        // data: <?php echo json_encode($arr); ?>,
        backgroundColor:  'rgba(0, 0, 0, 0.2)',
        borderColor: 'rgba(255, 26, 104, 1)',
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    {/* </script> */}