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
    <div>
        <h1>Free Promotion Claimed & shop page</h1>
        <br>
        <div>
            <button type="button" >
                 <a href='{{ route("shopRoute") }}'>Shop Page </a>
            </button>
            <button type="button" onclick="claim(1)" value="1">Available</button>
            <button type="button" onclick="claim(0)" value="0">Claims</button>
        </div>
        <div id="main_div">
        </div>
    </div>


    <script>
        function claim(type) {
            var id = $(".id").val();
            let main_url = window.location.origin;
            let url = main_url + "/api/claims"+type;
            let token = localStorage.getItem('token');
            console.log(url);
            $.ajax({
                type: "POST",
                url: main_url + "/api/claims",
                headers: {
                    "Authorization": localStorage.getItem('token')
                },
                data: {
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    var html = '';
                    $.each(response.claim, function(inx, value) {
                        html += `<div class="card" style="width: 18rem;">`;
                        html += `<img class="card-img-top" src="..." alt="${value.image}">`;
                        html += `<div class="card-body">`;
                        html += `<h5 class="card-title">${value.discount}</h5>`;
                        html +=
                            `<a href="#" class="btn btn-primary">${value.follow == 0 ? 'Following':'Not Following'}</a>`;
                        html += `</div>`;
                        html += `</div>`;
                    });

                    $('#main_div').html('');
                    $('#main_div').append(html);
                }
            });
        }
    </script>
</body>

</html>
