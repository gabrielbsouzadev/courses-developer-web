function desenharGraficos() {

    //Grafico de Pizza
    var tabela = new google.visualization.DataTable();
    tabela.addColumn('string', 'categorias');
    tabela.addColumn('number', 'valores');
    tabela.addRows([
        //posições no array
        ['Educação', 2000], //0
        ['Transporte', 500], /*1*/
        ['Lazer', 230],
        ['Saúde', 50],
        ['Cartão de Crédito', 900],
        ['Alimentação', 260]
    ]);

    var opcoes = {
        title: 'Tipos de Gastos',
        height: 400,
        width: 800,
        is3D: true,
        legend: 'labeled',
        pieSliceText: 'value',
        // colors: [
        //     'grey',
        //     'red',
        //     'yellow',
        //     'lightblue',
        //     'lightpink',
        //     'purple'
        // ]
        slices: {

            1: {
                color: 'grey'
            },
            2: {
                color: '#a6a6a6'
            },
            3: {
                color: 'grey'
            },
            4: {
                offset: 0.4
            },
            5: {
                color: 'grey'
            }
        }
    };

    var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
    grafico.draw(tabela, opcoes);


    //Grafico de Linha
    tabela = new google.visualization.DataTable();
    tabela.addColumn('string', 'mês');
    tabela.addColumn('number', 'gastos');

    tabela.addRows([
        ['jan', 800],
        ['fev', 400],
        ['mar', 1100],
        ['abr', 400],
        ['mai', 500],
        ['jun', 750],
        ['jul', 1500],
        ['ago', 650],
        ['set', 850],
        ['out', 400],
        ['nov', 1000],
        ['dez', 720]
    ]);


    var opcoes = {
        title: 'Gastos por mês',
        width: 650,
        height: 300,
        vAxis: {
            format: 'currency',
            gridlines: {
                count: 5,
                color: 'transparent'
            }
        },
        curveType: 'function',
        legend: 'none'
    }

    var grafico = new google.visualization.LineChart(document.getElementById('graficoLinha'));
    grafico.draw(tabela, opcoes);

    //Grafico de Colunas(Entradas e Saidas)
    tabela = new google.visualization.arrayToDataTable([

        ['Mês', 'Entrada', 'Saída'],
        ['jan', 2500, 1000],
        ['fev', 2000, 500],
        ['mar', 3000, 1300],
        ['abr', 1500, 1700],
        ['mai', 5000, 2250],
        ['jun', 3567, 3000],
        ['jul', 3452, 1468],
        ['ago', 1833, 5250],
        ['set', 3803, 5500],
        ['out', 1800, 1000],
        ['nov', 3569, 1500],
        ['dez', 3000, 1740]

    ]);

    var opcoes = {
        title: 'Gastos por mês',
        width: 800,
        height: 400,
        vAxis: {
            gridlines: {
                color: 'transparent'
            },
            format: 'currency',
            title: 'Valores'
        },
        hAxis: {
            title: 'Mês',
        }

    }

    var grafico = new google.visualization.ColumnChart(document.getElementById('graficoColuna'));
    grafico.draw(tabela, opcoes);

    //Colunas Surpresa
    var tabela = new google.visualization.DataTable();
    tabela.addColumn('string', 'categorias');
    tabela.addColumn('number', 'valores');
    tabela.addColumn({
        type: 'string',
        role: 'annotation'
    });
    tabela.addColumn({
        type: 'string',
        role: 'style'
    });
    tabela.addRows([
        //posições no array
        ['Educação', 2000, 'R$2.000,00', 'blue'], //0
        ['Transporte', 500, 'R$500,00', 'grey'], //1
        ['Lazer', 230, 'R$230,00', 'grey'], //2
        ['Saúde', 50, 'R$50,00', 'grey'], //3
        ['Cartão de Crédito', 900, 'R$900,00', '#8904b1'], //4
        ['Alimentação', 260, 'R$260,00', 'grey'], //5
    ]);

    tabela.sort([{ column: 1, desc: true}]);

    var opcoes = {
        title: 'Tipos de Gastos',
        height: 400,
        width: 800,
        vAxis: {
            gridlines: {
                count: 0
            },
            textPosition: 'none'
        },
        legend: 'none',
        hAxis: {
            gridlines: { color: 'transparent' },
            format: 'currency',
            textPosition: 'none'
        },
        annotations: {alwaysOutside: true}
    }

    var grafico = new google.visualization.BarChart(document.getElementById('graficoColunaSurpresa'));
    grafico.draw(tabela, opcoes);

}