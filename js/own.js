function clear()
{
    $('#chart').empty();
}

function send()
{
    //Получаю параметры
    var func = $("#inputFunction").val();
    var inputIntStart = $("#inputIntStart").val();
    var inputIntEnd = $("#inputIntEnd").val();

    if(Number(inputIntStart)>Number(inputIntEnd)){
          $('#err_interval').html('Промежуток введен некорректно ');
          return;
    }
    else $('#err_interval').empty();
    // и отправляю
    $.ajax({
    url: "form.php",
    method:"POST",           
    data: {"inputFunction": func, "inputIntStart": inputIntStart, "inputIntEnd": inputIntEnd},                   
    success: function (tdata) { // вешаем свой обработчик на функцию success
      clear();
      var valid_data=JSON.parse(tdata);
      for (var i = 0; i < valid_data.length; i++) 
        valid_data[i] = parseFloat(valid_data[i], 10);

      var arrays = [], size = 2;
      while (valid_data.length > 0)
      arrays.push(valid_data.splice(0, size));

      var plot2 = $.jqplot ('chart', [arrays], {
      grid: {
            drawBorder: false,
            shadow: false,
            background: 'rgba(0,0,0,0)'
        },
        highlighter: { show: true },
        seriesDefaults: { 
            shadowAlpha: 0.1,
            shadowDepth: 2,
            fillToZero: true
        },
        seriesDefaults: {
            rendererOptions: {
                smooth: true,
                animation: {
                    show: true
                }
            },
            showMarker: false
        },
      series: [
            {
                color: 'rgba(198,88,88,.6)',
                negativeColor: 'rgba(100,50,50,.6)',
                showMarker: true,
                showLine: true,
                fill: false,
                fillAndStroke: true,
                markerOptions: {
                    style: 'filledCircle',
                    size: 8
                },
                rendererOptions: {
                    smooth: true
                }
            },
            {
                color: 'rgba(44, 190, 160, 0.7)',
                showMarker: false,
                rendererOptions: {
                    smooth: true,
                },
                markerOptions: {
                    style: 'filledSquare',
                    size: 8
                },
            },
        ],

      axesDefaults: {
            rendererOptions: {
                baselineWidth: 1.5,
                baselineColor: '#444444',
                drawBaseline: true
            }
        }

    });
    },
    error: function(){
        alert('error');
    }
});

}




