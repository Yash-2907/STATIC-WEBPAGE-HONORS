<html>
    <head>
        <title>Hajime Isayama</title>
        <style>
        .image-container {
            display: flex;
            align-items: center;
        }

        .image-container img {
            margin-right: 15px; 
        }
        body {
            font-size: 22px;
        }

        .button-container {
            position: fixed;
            bottom: 30px; /* Adjust the top distance as needed */
            right: 20px; /* Adjust the right distance as needed */
            z-index: 1000; /* Set a high z-index to ensure the button is above other elements */
        }
        .my-button {
            padding: 10px;
            background-color: #b2d3c2; /* Set your desired background color */
            color: #3d3d3d; /* Set your desired text color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    </head>
    <body>
    @include('layout.header')
            @yield('appContents')
    @include('layout.footer')
    </body>
</html>