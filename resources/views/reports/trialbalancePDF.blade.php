<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<style media="screen">

.col-lg-8{
  width: 110%;
  min-height: 400px;
  border:black 1px solid;
  border-radius: 10px 10px 10px 10px;
  background-color: #B5D9FD;
}

.information{
  margin-top: 30px;
  text-align: center;
  font-size: 18px;
}

.margin{
  width: 90%;
}

.table{
  width: 100%;
  margin-top: 20px;
}

th{
   text-align: center;
}

.cols{
  text-align: center;
  height: auto;
  width: auto;
}

.rows{
  line-height: 70px;
}
.total{
  text-align: right;
}

</style>
  </head>
  <body>
    <div class="row margin">
      <div class="col-lg-8 col-xl-12">
        <div class="container information">

            <label></label><br/>

          <label>Balanza de comprobación al </label>
          <label id="date"></label>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" rowspan="2" class="cols rows">ID</th>
              <th scope="col" rowspan="2" class="cols rows">Cuentas</th>
              <th scope="col" colspan="2" class="cols">Movimientos</th>
              <th scope="col" colspan="2" class="cols">Saldos</th>
            </tr>
            <tr>
              <th scope="col" class="cols">Deudor</th>
              <th scope="col" class="cols">Acredor</th>
              <th scope="col" class="cols">Deudor</th>
              <th scope="col" class="cols">Acredor</th>
            </tr>
          </thead>
          <tbody>

              <tr>
                <th scope="row" class="cols"></th>
                <td class="colsname"></td>
                <td class="cols">

                </td>
                <td class="cols">

                </td>
                <td class="cols">

                </td>
                <td class="cols">

                </td>
              </tr>

            <tr>
              <td></td>
              <td class="total">Total</td>
              <td class="cols"></td>
              <td class="cols"></td>
              <td class="cols"></td>
              <td class="cols"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
