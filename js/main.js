//  ------> MILESTONE 1 <--------

//Metodo con richiamo tramite Ajax [grafico 1]:
var urlBase = 'server.php';
stampoMilestone1();


function stampoMilestone1(){
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
        type: 'line',
        data: {
            labels: mesi,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: data //inserisco i valori trovati;
            }]
        },
    });
};


// -------> Metodo con js richiamando il data o attr [grafico 2]: <---------

var months = ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'];
var datas = $('#grafico-js').data('chart');
var ctx = $('#grafico-js');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: datas //inserisco i valori trovati;
            }]
        },
    });



// -------> MILESTONE 2 <--------
var urlBase2 = 'server2.php';
stampoMilestone2();

function stampoMilestone2(){
    $.ajax({
        url:urlBase2,
        method:'GET',
        success: function(data){
            lineChart(data);
            pieChart(data);
        }
    })
};

    // ------> Grafico chart <------

//Mi trovo i valori che servono per compilare il grafico: type e fatturato:
function lineChart(chart){
    var type = chart.fatturato.type; //trovo il tipo di grafico
    var data = chart.fatturato.data; //trovo i dati che mi servono
    stampaGraficoChart(type, data);
};

//Riporto i valori trovati direttamente dentro il grafico:
function stampaGraficoChart(type, data){
    var mesi = ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'];
    var ctx = $('#grafico-anni');
    var chart = new Chart(ctx, {
        type: type,
            data: {
            labels: mesi,
            datasets: [{
            label: 'Fatturato per mesi',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: data //inserisco i valori trovati;
            }]
        },
    });
};


// -----> GRAFICO PIE <-------

function pieChart(pie){
    var chartType = pie.fatturato_by_agent.type;
    var agentData = pie.fatturato_by_agent.data;
    ricavaDatiPie(agentData, chartType)
};

function ricavaDatiPie(dati, type) {
    var venditori = [];
    var vendite = [];

    for (var key in dati) {
        venditori.push(key);
        vendite.push(dati[key]);
    }
    stampaGraficoPie (venditori, vendite, type);
};

function stampaGraficoPie(labels, data, type) {
    var ctx = $('#grafico-venditori');
    var chart = new Chart(ctx, {
        type: type, //inserisco i valori trovati;
        data: {
            datasets: [{
            data: data, //inserisco i valori trovati;
            backgroundColor: ['lightgreen', 'lightred', 'lightpink', 'lightblue'],
            }],
            labels: labels //inserisco i valori trovati;
            },
        options: {
            title: {
            display: true,
            text: 'Guadagni singoli venditori'
            }
        }
    })
};
