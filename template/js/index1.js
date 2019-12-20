
  var ctx = document.getElementById( "singelBarChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
      
        type: 'bar',
        data: {
            labels: [  <?php 
                                         $a = 1;
                                        foreach($table_produit as $ligne) {
                                         ?> "<?php echo $ligne->getFournisseur(); ?>" , <?php  } ?>  ],

            datasets: [
                {

                                  
                    label: "My First dataset",
                    data: [56,72,44,10,55,0,0],
                    borderColor: "rgba(0, 194, 146, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 194, 146, 0.5)"
                    
                            }
                        ]
                        
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
        
    } );
}