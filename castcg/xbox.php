<head>
    <link rel="stylesheet" media="screen" href="xbox.css" />
    <link rel="stylesheet" media="screen" href="https://twitch.xboxapi.com/xbox-font/style.css" />

</head>
<body>

<div class="container">
    <div class="achievement-banner animated">
        <div class="achievement-loader"></div>
        <div class="achievement-loader"></div>
        <div class="achievement-loader"></div>
        <div class="achievement-loader"></div>
        <div class="achievement-loader"></div>
        <div class="achievement-trophy xbox-icon xbox-logo"></div>

        <div class="achievement-text">
            <p class="achievement-notification"><?php echo $_REQUEST['input1']; ?></p>
            <p class="achievement-name"><i class="xbox-icon xbox-gamerscore"></i> 1,000 &ndash; <?php echo $_REQUEST['input2']; ?></p>
        </div>
    </div>
</div>
</body>
