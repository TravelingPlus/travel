function myFunction(){
    var from_element = document.getElementById("from").value;
    var to_element = document.getElementById("to").value;
    alert(from_element);
    alert(to_element);
    var dataString = 'from=' + from_element + '&to=' + to_element ;
    console.log(dataString);

    $.ajax({
        type: "POST",
        url: "http://localhost:8888/blog/public/home/json",
        datatype: "html"
        data: dataString,
        cache: false,
        success: function(data) {
            alert(data.a);
            alert(data.b);
        }
    });
}