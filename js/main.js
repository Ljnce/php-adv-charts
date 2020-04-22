//Metodo con richiamo tramite Ajax [grafico 1]:
var urlBase = 'server.php';
stampa();


function stampa(){
    $.ajax({
        url: urlBase,
        method:'GET',
        success:function(data){
            graficoAjax(data);
        },
        error: function(){
            alert('errore');
        }
    });
};


function graficoAjax(data){
    var mesi = ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'];
    var ctx = $('#grafico-ajax');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: mesi,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: data
            }]
        },

        // Configuration options go here
        options: {}
    });
};


// -------> Metodo con js richiamando il data o attr [grafico 2]: <---------

var months = ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'];
var datas = $('#grafico-js').data('chart');
var ctx = $('#grafico-js');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: months,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: datas
            }]
        },

        // Configuration options go here
        options: {}
    });
