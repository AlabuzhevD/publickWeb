





                var ctx = document.getElementById("chart").getContext('2d');
                var mylat = $('div.hidden3').data('lat');
                var mylong = $('div.hidden3').data('lng');





                var myChart = new Chart(ctx, {
                    
                    
    type: 'bar',
    data: {
        datasets: [{
            
            
                        label: 'Скорость',                        
                        data: mylat,
                        backgroundColor: 'rgba(255,99,132)',                        
                        borderColor:'rgba(255,99,132)',
                        borderWidth: 3,

            // This binds the dataset to the left y axis
            yAxisID: 'left-y-axis'
        }, {
                        label: 'Кол-во',                       
                        data: mylong,
                        backgroundColor: 'white',                        
                        borderColor:'white',
                        borderWidth: 3, 

            // This binds the dataset to the right y axis
            yAxisID: 'right-y-axis'
        }],
                    labels: ['00','01','02','03','04','05','06','07','08','09',10,11,12,13,14,15,16,17,18,19,20,21,22,23]
    },
    options: {
        scales: {
            yAxes: [{
                id: 'left-y-axis',
                type: 'linear',
                position: 'left'
            }, {
                id: 'right-y-axis',
                type: 'linear',
                position: 'right'
            }]
        }
    }
});

