function myFunction(){
    var from_element = document.getElementById("from").value;
    var to_element = document.getElementById("to").value;
    console.log(from_element);
    console.log(to_element);
    alert(from_element);
    alert(to_element);
    var dataString = 'from=' + from_element + '&to=' + to_element ;
    console.log(dataString);

    $.ajax({
        type: "POST",
        //url: "http://localhost:8888/l5/send.php",
        data: dataString,
        cache: false,
        success: function(html) {
            alert(html);
        }
    });
}