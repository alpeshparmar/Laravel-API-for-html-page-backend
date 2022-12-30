<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <br/>
    <div> 
        <div>
            <input type="hidden" value="" id="type">
            <button type="button" onclick="getmain(1)" value="0">Recently getmained</button>
            <button type="button" onclick="getmain(0)" value="1">Following</button>
        </div>
        <div id="main_div">
        </div>
    </div>


    <script>
        function getmain(type){

            let main_url = window.location.origin;
            let url = main_url + "/api/shops/"+type;
            let token = localStorage.getItem('token');
            $.ajax({
                type: "GET",
                url: url,
                // data: "",
                headers: {
                    "Authorization": localStorage.getItem('token')
                },
                dataType: "JSON",
                success: function (response) {
                    // console.log(response);

                    $('#type').val(type);
                    var html = '';

                    html += `<input type="search" name="search" data-type="${type}" onkeyup="search(this)" id="testets" placeholder="Search.....">`;
                    html += `<div class="second_div" >`;
                        $.each(response.shop, function(inx, value) {
                        html += `<div class="card" style="width: 18rem;">`;
                        html += `<img class="card-img-top" src="..." alt="${value.image}">`;
                        html += `<div class="card-body">`;
                        html += `<h5 class="card-title">${value.shop_name}</h5>`;
                        html += `<h5 class="card-title">${value.product}</h5>`;
                        html += `<h5 class="card-title">${value.description}</h5>`;
                        html += `<h5 class="card-title">${value.quantity}</h5>`;
                        html += `<h5 class="card-title">${value.location}</h5>`;
                        html +=
                            `<a href="#" class="btn btn-primary">${value.follow == 0 ? 'Following':'Not Following'}</a>`;
                        html += `</div>`;
                        html += `</div>`;
                    });
                    html += '</div>';

                    $('#main_div').html('');
                    $('#main_div').append(html);            
                }
            });
        }

        function search(data){                    
            var type = $('#type').val();
            var search_params =$(data).val();
            console.log(search_params);
            let main_url = window.location.origin;
            let url = main_url + "/api/shops/";
            let token = localStorage.getItem('token');

            $.ajax({
                type: "GET",
                url: url,
                data: {
                    'search_params' : search_params,
                    'type' : type
                },
                dataType: "JSON",
                success: function (response) {
                        console.log(response);
                        $('#type').val(type);
                        var html = '';
                        html += `<div class="second_div" >`;
                        $.each(response.shop, function(inx, value) {
                            html += `<div class="card" style="width: 18rem;">`;
                        html += `<img class="card-img-top" src="..." alt="${value.image}">`;
                        html += `<div class="card-body">`;
                        html += `<h5 class="card-title">${value.shop_name}</h5>`;
                        html += `<h5 class="card-title">${value.product}</h5>`;
                        html += `<h5 class="card-title">${value.description}</h5>`;
                        html += `<h5 class="card-title">${value.quantity}</h5>`;
                        html += `<h5 class="card-title">${value.location}</h5>`;
                        html +=
                            `<a href="#" class="btn btn-primary">${value.follow == 0 ? 'Following':'Not Following'}</a>`;
                        html += `</div>`;
                        html += `</div>`;
                    });
                    html += `</div>`;

                    $('.second_div').html('');
                    $('.second_div').html(html);
                }
            });
        }
    </script>
</body>

</html>
