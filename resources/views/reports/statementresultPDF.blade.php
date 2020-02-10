<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{
      margin: 0px;
      padding: 0px;
    }

    .col-lg-8{
      width: 100%;
      min-height: 400px;
      border:black 1px solid;
      border-radius: 10px 10px 10px 10px;
    }

    .margin{
      width: 90%;
    }

    .information{
      margin-top: 30px;
      text-align: center;
      font-size: 18px;
    }

    .title{
      text-align: center;
    }

    .rows{
      text-indent: 4em;
    }

    .item{
      text-indent: 7em;
    }

    .import{
      text-align: center;
    }

    </style>
  </head>
  <body>
    <div class="row margin">
      <div class="col-lg-8 col-xl-12">
        <div class="container information">

          <label>Estado de resultados al</label>
          <label id="date"></label>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" rowspan="2" class="title">Rubro</th>
              <th scope="col" rowspan="2" class="title">Importe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="rows">Ventas</th>
            </tr>
            <tr>
              <td scope="row" class="item">La</th>
                <td class="cols import">$4424</td>
            </tr>
            <tr>
              <th scope="row" class="rows">Costo de ventas</th>
              <td class="cols"></td>
            </tr>
            <tr>
              <td scope="row" class="item">La</th>
                <td class="cols import">$4424</td>
            </tr>
            <tr>
              <th scope="row" class="rows">Gastos</th>
              <td class="cols"></td>
            </tr>
            <tr>
              <td scope="row" class="item">La</th>
                <td class="cols import">$4424</td>
            </tr>
            <tr>
              <th scope="row" class="rows">Impuestos</th>
            </tr>
            <tr>
              <td scope="row" class="item">La</th>
              <td class="cols import">$4424</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
