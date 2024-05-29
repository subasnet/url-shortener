<html>
    <head>
        <title>URL Shortener</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
        <?php echo link_tag(base_url("style.css")); ?> <!-- using html helper  -->
    </head>
    <body>

        <div class="main-container">
            <h1>URL SHORTENER</h1>

            <form action="<?php echo base_url('url-shortener') ?>" method="post" id="frm_url">
                <label for="long_url">Enter Your Long URL</label>
                <input type="text" name="long_url" id="long_url" placeholder="Enter long URL" required>
                <button id="shorten-btn">Shorten</button>
            </form>

            <div id="short-url-container" style="<?php echo $displayShorURL; ?>">
                <p>Here's your shorten URL:</p>

                <div id="short-url">
                    <a href="javascript:void(0)" target="_blank"><?php echo base_url($shortcode); ?></a>
                    <button type="button" id="copy-btn"> <i class="fa fa-copy"></i></button>
                </div>

            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            $(function(){
                $("#copy-btn").on("click", function(){
                    navigator.clipboard.writeText($("#short-url a").text()).then(() => {
                        toastr.success("Successfully copied the URL");
                    });
                });

                //validation
                $("#frm_url").validate();
            });
        </script>

    </body>
</html>