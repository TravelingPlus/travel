
function add_input(){
    var new_id;
    var inputs = $('.inputs input[type="text"]');
    var id_element = (inputs.length);
    //alert (id_element);
    //var text_from_element = document.getElementById(str);
    //var val = text_from_element.value;
    //alert(val);
    for(var i=1; i < 3; i++){
        //var inputs = $('.inputs input[type="text"]');
        new_id = inputs.length+1;
        //alert (new_id);
        //var area=document.getElementById(2);
        //area.value='333';

        if(i%2 == 0){
            //$('.inputs').append('<input id="id-' + new_id + '" name="name[]" placeholder="to"/>');
            $('.inputs').append('<input id=new_id  name="name[]" placeholder="to"/>');
            //$('.inputs').val('Some text');
            //document.getElementById("id-3").value ='77777';
        }else {
            //$('.inputs').append('<input id="id-'+new_id+'" name="name[]" placeholder="from"/>');
            $('.inputs').append('<input id=new_id name="name[]" placeholder="from"/>');
        }
    }
    //var area=document.getElementById(id_element);
    //area.value='25555';
}