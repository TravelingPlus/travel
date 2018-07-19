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
            $('.inputs').append('<input id=idnew   class="input form-control"  name="name[]" placeholder="to"/>');
        }else {
            $('.inputs').append('<input id=idnew  class="input form-control"  name="name[]" placeholder="from"/>');
        }
    }

    var text = document.getElementsByTagName("input");
    console.log('AAAAAAAAAAAA');
    /*for (var i = 0; i < text.length; i++)
    {
        console.log(text[i].value);
    }*/
    len_all=text.length;
    var area=document.getElementsByTagName("input")[len_all-7];
    area.value=text[text.length-8].value;
    //var area=document.getElementsByTagName("input")[3];
}