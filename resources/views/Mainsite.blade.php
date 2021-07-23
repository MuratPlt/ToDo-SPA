<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MainSite</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
        <meta id="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div id="app" class="d-flex justify-content-center">
            <site-body></site-body>
        </div>
    </body>

    <script type="module" src="/js/app.js"></script>

</html>
