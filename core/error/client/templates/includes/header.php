<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> Page</title>

    <style>
        /* Global */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            background-color: #F0F0F0;
            color: #3C486B;
            font-family: sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            width: 100%;
        }

        .container>h1>span {
            color: rgba(60, 72, 107, 0.5);
        }

        .container>h1>strong {
            color: #FF1E00;
        }

        .error-info {
            margin-top: 100px;
        }

        .error-info>h3 {
            text-align: center;
            color: #FF1E00;
        }

        .error-info>h3>span {
            color: rgba(60, 72, 107, 0.5);
        }

        .error-snapshot {
            padding-bottom: 16px;
            width: 900px;
            margin-top: 32px;
            background-color: white;
            border-radius: 12px;
            overflow: auto;
            min-height: 100px;
            min-height: 100px;
            max-height: 500px;
        }

        .error-file {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 8px;
            position: sticky;
            top: 0;
            padding: 24px;
            background-color: white;
            box-shadow: 0 8px 10px #0000001f;
        }

        .error-snapshot code>* {
            padding: 0 24px;
        }
    </style>
</head>

<body>