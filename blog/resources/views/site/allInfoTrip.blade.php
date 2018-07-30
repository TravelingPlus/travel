<script>
    window.allmass=[];
</script>

@foreach(  $exemlarDateTrips as $element)
    window.allmass.push($element->email);
    {{--<h1>{{  $element->email }}</h1>--}}
    {{--<h1>{{  $element->city_of_departure }}</h1>--}}
    {{--<h1>{{  $element->city_of_arrival }}</h1>--}}
    {{--<h1>{{  $element->hotel }}</h1>--}}
    {{--<h1>{{  $element->transfer }}</h1>--}}
@endforeach




<head>
    <style type="text/css">
        *
        {
            margin:0px;
            padding:0px;
        }
        body
        {
            height:100%;
            width:100%;
            background:#fcdd76;
        }
        #main
        {
            padding-bottom:60px;
            width: 100%;
            margin: 0 auto;
            min-height: 100%;
            height: auto !important;
            height: 100%;
        }
        #content
        {
            margin:auto;
            background:#bef574;
            width:80%;
        }
    </style>
    <?php
    $php_array = array('abc','def','ghi');
    $js_array = json_encode($php_array);
    //echo "var javascript_array = ". $js_array . ";\n";
    ?>

</head>
<body>


<div id="from_script">

</div>





<script type="text/javascript">
//    alert('1111111');
    debugger;
    var data = JSON.parse('<?php echo $exemlarDateTrips; ?>');
    var array_table = [];
    for (var i = 0; i < 5; i++)
    {
        array_table[i] = [];
        //for (var j = 0; j < 5; j++)
        //{


            var res_departure = data[i]['city_of_departure'];
            array_table[i][0] = res_departure;
            var res_arrival = data[i]['city_of_arrival'];
            array_table[i][1]=res_arrival;
            var res_hotel = data[i]['hotel'];
             array_table[i][2]=res_hotel;
            var res_transfer = data[i]['transfer'];
            array_table[i][3]=res_transfer;

        //}
    }


    var code = '<table align="center" border="2" width="65%" height="45%" bordercolor="#000000" cellspacing="10" cellpadding="10" bgcolor="#fde910">';
    for (var i = 0; i < array_table.length; i++)
    {
        code += '<tr>';
        for (var j = 0; j < array_table[i].length; j++)
        {
            code +=  '<td>'+ array_table[i][j] + '</td>';
        }
        code += '</tr>';
    }
    code += '</table>';
    var elem = document.getElementById("from_script");
    elem.innerHTML =  code;
    alert('333333333');

</script>

</body>
