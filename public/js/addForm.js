var count = 0;
function add_input(m){

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
            $('.inputs').append('<input id=idnew   class="input form-control"  name="name[]" placeholder="to"/>');
        }else {
            $('.inputs').append('<input id=idnew  class="input form-control"  name="name[]" placeholder="from"/>');
        }
    }
    count+=m;
    $('#ajax_form').append('<form class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="form" id="ajax_form'+m+'" action="" method="post" style="margin: 0;"><input type="hidden" name="_token" value="e0uNlbkj8Yb4OCwCFb1WgD7HJ531wLhLxdPAiDoP"><hr style="color: #fff; height: 1px;"><div class="row forms"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group"><label>Валюта:</label><select name="currency" class="form-control"><option value="usd">USD</option><option value="rub">RUB</option><option value="eur">EUR</option></select></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group"><label>Откуда:</label><input type="search" class="input form-control text-muted" name="name[]" placeholder="from"/></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group"><label>Куда:</label><input type="search" class="input form-control" name="name[]" placeholder="to"/></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group"><label>Отправление:</label><input type="date" name="depart" class="input form-control text-muted" max="2020-12-01" min="now"></div><div><label>Возвращение:</label><input type="date" class="input form-control text-muted" name="return" max="2020-12-01" min="now"></div><div class="try d-flex justify-content-center"><div class="true"><input type="button" class="form-text btn btn-success add" data-action="add" value="Добавить перелет"/></div><div class="true"><input type="button" class="form-text btn btn-success add" data-action="addhotel" value="Добавить отель"/></div><div class="true"><div class="sfr"><input class="btn btn-primary send form-text" type="submit" value="Отправить"id="btn"></div></div></div></div><hr></form>');
    var text = document.getElementsByTagName("input");
    console.log('AAAAAAAAAAAA');
    /*for (var i = 0; i < text.length; i++)
    {
        console.log(text[i].value);
    }*/
    len_all=text.length;
    var area=document.getElementsByTagName("input")[len_all-5];
    area.value=text[text.length-6].value;
    //var area=document.getElementsByTagName("input")[3];
}