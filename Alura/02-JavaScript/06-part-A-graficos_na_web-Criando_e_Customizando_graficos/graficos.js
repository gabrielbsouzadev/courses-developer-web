function desenharGraficos() {

    //Grafico de Pizza
    var tabela = new google.visualization.DataTable();
    //Colunas
    tabela.addColumn('string', 'categorias');
    tabela.addColumn('number', 'valores');
    //linhas
    tabela.addRows([
        //posições no array
        ['Educação', 2000], //0
        ['Transporte', 500], /*1*/
        ['Lazer', 230],
        ['Saúde', 50],
        ['Cartão de Crédito', 900],
        ['Alimentação', 260]
    ]);
    //opções que customizam o grafico
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
    //desenhando grafico
    var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
    grafico.draw(tabela, opcoes);


    //Grafico de Linha
    tabela = new google.visualization.DataTable();
    //Colunas
    tabela.addColumn('string', 'mês');
    tabela.addColumn('number', 'gastos');
    //linhas
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

    //opções
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
    //desenhando grafico
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
    //opções que customizam o grafico
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
    //Desenhando o grafico
    var grafico = new google.visualization.ColumnChart(document.getElementById('graficoColuna'));
    grafico.draw(tabela, opcoes);

    var dadosJson = $.ajax({
        // url: 'dados.json',
        //url: 'https://gist.githubusercontent.com/gabrielbsouzadev/dc63547be0fbc83173346d9aaeca9fad/raw/8f0e3fb30ccc5869cca9fa4b48b81d3739850649/dados.json',
        url: 'http://localhost:3000/grafico/',
        dataType: 'json',
        async: false
    }).responseText;

    
 
    //Colunas surpresa
    var tabela = new google.visualization.DataTable(dadosJson);

    console.log(tabela[0]);
    
    //Antes os dados eram pegos da tabela abaixo
    // //Colunas
    // tabela.addColumn('string', 'categorias');
    // tabela.addColumn('number', 'valores');
    // tabela.addColumn({ type: 'string', role: 'annotation' });
    // tabela.addColumn({ type: 'string', role: 'style' });
    // //linhas
    // tabela.addRows([
    //     //posições no array
    //     ['Educação', 2000, 'R$2.000,00', 'blue'], //0
    //     ['Transporte', 500, 'R$500,00', 'grey'], //1
    //     ['Lazer', 230, 'R$230,00', 'grey'], //2
    //     ['Saúde', 50, 'R$50,00', 'grey'], //3
    //     ['Cartão de Crédito', 900, 'R$900,00', '#8904b1'], //4
    //     ['Alimentação', 260, 'R$260,00', 'grey'], //5
    // ]);

    //Ordenando por ordem decrescente pelo indice 1
    tabela[0].sort([{ column: 1, desc: true }]);

    // //Pegando o Jason Através da função .toJason() pelo Consoloe
    // var conversao = tabela.toJSON();
    // console.log(conversao);

    //Opções que customizam o gráfico
    var opcoes = {
        title: 'Tipos de Gastos',
        height: 400,
        width: 800,
        vAxis: {
            gridlines: {
                count: 0, color: 'transparent'
            },
        },
        legend: 'none',
        hAxis: {
            gridlines: { color: 'transparent' },
            format: 'currency',
            textPosition: 'none'
        },
        annotations: { alwaysOutside: true }
    }
    //Desenhando Gráfico
    var grafico = new google.visualization.BarChart(document.getElementById('graficoBarras')); grafico.draw(tabela, opcoes);


    //grafico de barras com arquivo json
    var dadosJson = $.ajax({
        // url: 'dados.json',
        url: 'https://gist.githubusercontent.com/gabrielbsouzadev/e03bb703b3787268a6738701ba798098/raw/cb072dae350fb92b5ffc77712a1f443f23569533/dados.json',
        dataType: 'json',
        async: false
    }).responseText;

    var tabela = new google.visualization.DataTable(dadosJson);

    //Ordenando por ordem decrescente pelo indice 1
    tabela.sort([{ column: 1, desc: true }]);

    var opcoes = {
        title: 'Usuários e Poupanças',
        height: 800,
        width: 800,
        legend: 'none',
        hAxis: {
            gridlines: {
                color: 'transparent'
            },
            textPosition: 'none'
        },
        annotations: { alwaysOutside: true }

    }

    var grafico = new google.visualization.BarChart(
        document.getElementById('graficoBarrasJson'));

    grafico.draw(tabela, opcoes);

}