<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>leodidier.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('https://images.pexels.com/photos/1031641/pexels-photo-1031641.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                margin:0; }
                #photo
{
  margin-left: 80px;
  margin-top: 50px;
  width: 20%;
  border-left: 10px solid white;
  border-right: 10px solid white;
  border-top: 10px solid white;
  border-bottom: 10px solid white;
  box-shadow: 5px 5px 12px black;

  -webkit-transform: rotate(10deg) scale(0.75);
  transform: rotate(10deg) scale(0.75);
  -webkit-transition: 0.2s ease-in-out;
}

#photo:hover
{
  -webkit-transform: rotate(0) scale(1);
  transform: rotate(0) scale(1);
  box-shadow: 10px 10px 30px black;
}

                </style>
    </head>
   
    <body>
   
    <img id="photo" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/51552747_625468324559635_7348703023574548480_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=8e7f26f7b5ead44f6c96a1e357ff6e6b&oe=5CF85CB9">
</body>
</html>