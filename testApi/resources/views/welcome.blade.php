<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <div>
        <h1>Home</h1>
        <form >
            <input type="hidden" class="ids" name="id" value="1">
            <input type="submit" value="Login As: Coustomer">
        </form>
        <form>
            <input type="hidden" name="id" class="ids" value="2">
            <input type="submit" value="Login As: Public Bank">
        </form>
        <form>
            <input type="hidden" name="id" class="ids" value="3">
            <input type="submit" value="Login As: United Oversise Bank">
        </form>
        <form>
            <input type="hidden" name="id" class="ids" value="4">
            <input type="submit" value="Login As: MayBank">
        </form>
        <form>
            <input type="hidden" name="id" class="ids" value="5">
            <input type="submit" value="Login As:CitiBank">
        </form>
        <form>
            <input type="hidden" name="id" class="ids" value="6">
            <input type="submit" value="Login As: HSBC Bank">
        </form>
        <form>
            <input type="hidden" name="id" class="ids" value="7">
            <input type="submit" value="Login As:Admin">
        </form>
    </div>

    <script>
        const token = localStorage.getItem('token');
        if(token) {
            let main_url = window.location.origin;
            window.location.href = main_url +"/claim";
        }
        
        $('form').submit(function (e) { 
            e.preventDefault();
            let id = $(this).serialize().replace('id=','');
            let main_url = window.location.origin;
            $.ajax({
                type: "POST",
                url: main_url + "/api/login",
                data: {
                    'id' : id
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.success){
                        localStorage.setItem('token',response.token);
                        window.location.href = main_url +"/claim";
                    } else {
                        alert(response.message);
                    }
              }
            });
            
        });

        
    </script>
</body>

</html>
