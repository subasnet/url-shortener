<html>
    <head>
        <title>URL Shortener</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    </head>
    <body>

        <div class="main-container">
            <h1>URL SHORTENER</h1>

            <form action="#" id="frm_url">
                <label for="long_url">Enter Your Long URL</label>
                <input type="text" name="long_url" id="long_url" placeholder="Enter long URL" required>
                <button id="shorten-btn">Shorten</button>
            </form>

            <div id="short-url-container">
                <p>Here's your shorten URL:</p>

                <div id="short-url">
                    <a href="javascript:void(0)" target="_blank">Short URL</a>
                    <button type="button" id="copy-btn"></button>
                </div>

            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    </body>
</html>