function add_input(){


    //var flight = {}
    // $($(".dir .flight")[0]).find('input').each((i, input) => flight[input.name] = input.value)
    //var all_input = document.getElementById('all_inputs');
    var str= '<hr style="color: #fff; height: 1px;">\n' +
    '                    <div class="row forms" id="all_inputs">\n' +
    '                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">\n' +
    '                            <label>Валюта:</label>\n' +
    '                            <select name="currency" class="form-control">\n' +
    '                                <option value="usd">USD</option>\n' +
    '                                <option value="rub">RUB</option>\n' +
    '                                <option value="eur">EUR</option>\n' +
    '                            </select>\n' +
    '                        </div>\n' +
    '                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">\n' +
    '                            <label>Откуда:</label>\n' +
    '                            <input type="search" class="input form-control text-muted" name="name[]"\n' +
    '                                       placeholder="from"/>\n' +
    '                        </div>    \n' +
    '                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">\n' +
    '                            <label>Куда:</label>\n' +
    '                            <input type="search" class="input form-control" name="name[]" placeholder="to"/>\n' +
    '                        </div>\n' +
    '                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">\n' +
    '                            <label>Отправление:</label>\n' +
    '                            <input type="date" name="depart" class="input form-control text-muted" max="2020-12-01" min="now">\n' +
    '                        </div>\n' +
    '                        <div>\n' +
    '                            <label>Возвращение:</label>\n' +
    '                            <input type="date" class="input form-control text-muted" name="return" max="2020-12-01" min="now">\n' +
    '                        </div>\n' +
    '\n' +
    '\n' +
    '                    </div>\n' +
    '                    <hr>';
    var all_str_input='<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]"placeholder="from"/>';
    $('#ajax_form').append(str);
    // $("all_input").append("<li>Appended item</li>");

    //div.innerHTML +='<hr>';
    // div.innerHTML +=' <br /> <br />';
    //div.innerHTML += '<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]"placeholder="from"/> ';
    //all_input.appendChild("<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]"placeholder="from"/> ');
    //div.innerHTML += '<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]" placeholder="to"/>';
    //div.innerHTML += '<input type="date" name="depart" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" max="2020-12-01" min="now">';
    //div.innerHTML += '<input type="date" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="return" max="2020-12-01" min="now">';


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
    /*for (var i = 0; i < text.length; i++)
    {
        console.log(text[i].value);
    }*/
    //len_all=text.length;
    //10

    //var area=document.getElementsByTagName("input")[len_all-6];

    //console.log(area);
    //var area1=document.getElementsByTagName("input")[len_all-9];
    //console.log(area1);

    //area.value=text[text.length-9].value;
    //var area=document.getElementsByTagName("input")[3];
}