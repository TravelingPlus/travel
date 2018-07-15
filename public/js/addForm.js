function add_input(){

    var new_id;
    var inputs = $('.inputs input[type="text"]');
    var id_element = (inputs.length);
    //alert(id_element);
    //var target = document.getElementsByTagName();
    //target.insertAdjacentHTML('afterEnd', '<br>');

    //var text_from_element = document.getElementById('2');
    //var val = text_from_element.value;
    //alert(val);
    for(var i=1; i < 3; i++){
        //var inputs = $('.inputs input[type="text"]');
        //new_id = inputs.length+1;

        //var area=document.getElementById(2);
        //area.value='333';

        if(i%2 == 0){
            $('.inputs').append('<input id=idnew  name="name[]" placeholder="to"/><br/><span style="color:white;" id="btn2">Забронировать</span>');
        }else {
            $('.inputs').append('<input id=idnew name="name[]" placeholder="from"/>');
        }
    }

    var text = document.getElementsByTagName("input");
    console.log('7897');
    //console.log(text[text.length-2].value);
    //console.log(text[text.length-3].value);
    //console.log(text[text.length-4].value);
    //console.log(text[text.length-5].value);
    //console.log(text[text.length-6].value);
    //console.log(text[text.length-7].value);
    len_all=text.length;
    //4 5
    var area=document.getElementsByTagName("input")[len_all-6];
    area.value=text[text.length-7].value;
    //var area=document.getElementsByTagName("input")[3];

    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'http://localhost/lara2/blog/public/home/json');
            return false;
        }
    );

    function sendAjaxForm(result_form, ajax_form, url) {
        jQuery.ajax({
            url:  url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#"+ajax_form).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                //console.log(response);
                result = jQuery.parseJSON(response);
                information = jQuery.parseJSON(result[0]);
                console.log(information);

                //informationToSaveInDB=information['data'];
                //console.log(informationToSaveInDB);
                //console.log(result[2]);
                //console.log(informationToSaveInDB[result[2]]['origin']);

                if(window.informationToSaveInDB == undefined)
                {
                    window.informationToSaveInDB=[];
                }
                window.informationToSaveInDB.push(information['data'][result[2]]);
                console.log(window.informationToSaveInDB);


                coordinatesInform = result[1];
                if(window.coord == undefined)
                {
                    window.coord=[];
                }
                for (var i = 0; i < coordinatesInform.length; i++)
                {
                    window.coord.push(coordinatesInform[i]);
                }
                document.getElementById("min").innerHTML = JSON.stringify(information);
                //initMap(coordinatesInform);
                initMap(window.coord);
                //jQuery('#result_form').html('ОТ: '+result.a+'<br>До: '+result.b);
            },
            error: function(response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
}