<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <h1>Home Page</h1>

    <div>
        <form action="/transactions" method="post"
              enctype="multipart/form-data">
            <label>
                Upload CSV-file:
                <input type="file" name="file" accept="text/csv">
            </label>
            <input type="submit" value="Send">

        </form>

    </div>
    </body>
</html>