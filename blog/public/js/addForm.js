function add_input(){

    var new_id;
    var inputs = $('.row_forms input[type="text"]');
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
    var div = document.getElementById('all_inputs');

    div.innerHTML += '<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]"placeholder="from"/> ';
    div.innerHTML += '<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]" placeholder="to"/>';
    div.innerHTML += '<input type="date" name="depart" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" max="2020-12-01" min="now">';
    div.innerHTML += '<input type="date" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="return" max="2020-12-01" min="now">';
    div.innerHTML +=' <br /> <br />';
        //var div = document.createElement('all_inputs');
    //div.className = "alert alert-success";
    //div.innerHTML = "<strong>Ура!</strong> Вы прочитали это важное сообщение.";
    //var sp = document.createElement("div");
    //sp.innerHTML = "<input type='button' title='Bold' value='spoiler' onclick=\"simpletag('spoiler','','','message','')\" class='codeButtons' id='b' style='width:20px;font-weight:bold'>";
    //sp.style.paddingRight = "1px";
    //sp.id = "bc2"; //ID должен быть уникален!

    //document.querySelector(".frm.rightr").appendChild(sp);
    var text = document.getElementsByTagName("input");
    console.log('13456');
    for (var i = 0; i < text.length; i++)
    {
        console.log(text[i].value);
    }
    //len_all=text.length;
    //var area=document.getElementsByTagName("input")[len_all-5];
    //area.value=text[text.length-6].value;
    //var area=document.getElementsByTagName("input")[3];
}