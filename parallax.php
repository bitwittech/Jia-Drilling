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
        transition: all 500ms;
        position: sticky;
        padding: 10px;
        width: 100%;
        height: 100vh;
        top: 0;
        background-size: 100% 100%;
        box-sizing: border-box;
        background-repeat: no-repeat;
      }

      .part:nth-of-type(1) {
        background-image: url("./assets/images/background/bg-1.jpg");
      }
      .part:nth-of-type(2) {
        background-image: url("./assets/images/background/bg-2.jpg");
        background-repeat: no-repeat;
      }
      .part:nth-of-type(3) {
        background-image: url("./assets/images/background/bg-3.jpg");
        background-repeat: no-repeat;
      }
      .part:nth-of-type(4) {
        background-image: url("./assets/images/background/bg-4.jpg");
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
    <section class="part">
      <h1 style="color: white; font-size: 50px">background 1</h1>
    </section>
    <section class="part">
      <h1 style="color: white; font-size: 50px">background 2</h1>
    </section>
    <section class="part">
      <h1 style="color: white; font-size: 50px">background 3</h1>
    </section>
    <section class="part">
      <h1 style="color: white; font-size: 50px">background 4</h1>
    </section>
  </body>
</html>