<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    .col-lg-8{
      border:black 1px solid;
      border-radius: 10px 10px 10px 10px;
      background-color: #AFF08E;
    }

    .margin{
      width: 100%;
    }

    .content{
      margin-top: 50px;
    }

    .activo{
      height: 400px;
    }

    .pasivo{
      height: 200px;
    }

    .capital{
      height: 200px;
    }

    .title{
      font-size: 17px;
    }

    .information{
      margin-top: 30px;
      text-align: center;
      font-size: 18px;
    }

    </style>
  </head>
  <body>
    <div class="row margin">
      <div class="col-lg-8 col-xl-12">
        <div class="container information">
          <label>Balance General al </label>
          <label id="date"></label>
        </div>
        <div class="row content">
          <div class="col activo">
            <label class="title">
              Activo
            </label>
          </div>
          <div class="col pasivo-capital">
            <div class="row pasivo">
              <label class="title">
                Pasivo
              </label>
            </div>
            <div class="row capital">
              <label class="title">
                Capital
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
