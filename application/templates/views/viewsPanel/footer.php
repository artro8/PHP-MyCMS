



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="style/javascript/jquery.colorbox.js"></script>
<script src='style/javascript/panel.js'></script>
<script src='style/javascript/moment.min.js'></script>
<script src='style/javascript/fullcalendar.min.js'></script>
<script src='style/javascript/locale-all.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/list.pagination.js/0.1.1/list.pagination.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js'></script>
<script src="style/javascript/script.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="style/javascript/panel.js" type="text/javascript"></script>






<script>

    $(document).ready(function(e) {
        $('#setting').colorbox({
                 
            href: '<?php echo SITE_PATH ?>/application/settings.php' 
        });
    });
    $(document).ready(function() {
                
                
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            defaultDate: '2017-03-12',
            locale: 'pl' ,
            navLinks: true, // can click day/week names to navigate views
            businessHours: true,
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                       <?php global $CMS; $CMS->Content->displayEvent(); ?>
                                   ]
                               });
		
                           });
</script>
<script>
var CHART = document.getElementById("barChart");

var lineChart = new Chart(CHART, {
    type: 'bar', 
    data:  {
        labels: [<?php global $CMS; $CMS->Content->displayDateViewsInJson(); ?>],
        datasets: [
            {
                label: "Ilość odwiedzin",
                fill: false,
                lineTension: 0.2,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [<?php global $CMS; $CMS->Content->displayQuantityViewsJson(); ?>],
                spanGaps: false
            },
                    {
                label: "Realna ilość odwiedzin",
                fill: false,
                lineTension: 0.2,
                backgroundColor: "rgba(243,45,45,0.4)",
                borderColor: "rgba(243,45,45,0.4)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(243,45,45,0.4)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(243,45,45,0.4)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [<?php global $CMS; $CMS->Content->displayQuantityViewsRealInJson(); ?>],
                spanGaps: false
            }
        ]
        
    }
});
</script>
<script>
var CHART2 = document.getElementById("barChartReal");

var lineChart = new Chart(CHART2, {
    type: 'bar', 
    data:  {
        labels: [<?php global $CMS; $CMS->Content->displayDateViewsRealInJson(); ?>],
        datasets: [
            {
                label: "Realna ilość odwiedzin",
                fill: false,
                lineTension: 0.2,
                backgroundColor: "rgba(243,45,45,0.4)",
                borderColor: "rgba(243,45,45,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(243,45,45,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(243,45,45,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [<?php global $CMS; $CMS->Content->displayQuantityViewsRealInJson(); ?>],
                spanGaps: false
            }
        ]
    }
});
</script>
</body>
</html>

