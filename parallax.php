<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
    * {
        margin: 0%;
        padding: 0%;
    }

    .part {
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 500ms;
        position: sticky;
        padding: 10px;
        width: 100%;
        height: 120vh;
        top: 0;
        background-size: 100% 100%;
        box-sizing: border-box;
        background-repeat: no-repeat;
    }

    .part::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.642);
        opacity: 0.4;
        /* Adjust the opacity value (0.0 to 1.0) */
        z-index: 1;
    }

    .part:nth-of-type(1) {
        background-image: url("./assets/images/background/newBG-1.jpg");
    }

    .part:nth-of-type(2) {
        background-image: url("./assets/images/background/newBG-2.jpg");
        background-repeat: no-repeat;
    }

    .part:nth-of-type(3) {
        background-image: url("./assets/images/background/newBG-3.jpg");
        background-repeat: no-repeat;
    }

    .part:nth-of-type(4) {
        background-image: url("./assets/images/background/newBG-4.jpg");
        background-repeat: no-repeat;
    }
    </style>
</head>

<body>
    <section class="part">
        <h1 style="color: white; z-index: 2; font-size: 50px">Adaptable Organizational Model</h1>
    </section>
    <section class="part">
        <h1 style="color: white; z-index: 2; font-size: 50px">Commitment to Sustainability</h1>
    </section>
    <section class="part">
        <h1 style="color: white; z-index: 2; font-size: 50px">Global Reach and Expansion</h1>
    </section>
    <section class="part">
        <h1 style="color: white;z-index: 2; font-size: 50px">Customer-Centric Approach</h1>
    </section>
</body>

</html>