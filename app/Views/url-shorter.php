<html>
    <head>
        <title>URL Shortener</title>
    </head>
    <body>

        <div class="main-container">
            <h1>URL SHORTENER</h1>
            <form action="#" id="frm_url">
                <label for="long_url">Enter Your Long URL</label>
                <input type="text" name="long_url" id="long_url" placeholder="Enter long URL" required>
                <button id="shorten-btn">Shorten</button>
            </form>
        </div>
        <div id="short-url-container">
            <p>Here's your shorten URL:</p>
            <div id="short-url">
                <a href="javascript:void(0)" target="_blank">Short URL</a>
                <button type="button" id="copy-btn"></button>
            </div>
        </div>

    </body>
</html>