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
      min-height: 100px;
    }

    .pasivo{
      min-height: 100px;
    }

    .capital{
      min-height: 100px;
    }

    .title{
      font-size: 17px;
    }

    .information{
      margin-top: 30px;
      text-align: center;
      font-size: 18px;
    }

    .accountname{
      width: 80%;
    }

    .amount{
      text-align: right;
    }

    table{
      margin-left: 1em;
      margin-right: 1em;
      width: 100%;
    }
    </style>
  </head>
  <body>
    <div class="row margin">
      <div class="col-lg-8 col-xl-12">
        <div class="container information">
          @foreach($company as $information)
            <label>{{$information->businessName}}</label><br/>
          @endforeach
          <label>Balance General al {{$datetoday}}</label>
          <label id="date"></label>
        </div>
        <div class="row content">
          <div class="col activo">
            <label class="title">
              Activo
            </label>
            <table>
              <tbody>
                @foreach($activos as $activo)
                  <tr>
                    <td class="accountname">{{$activo->accountName}}</td>
                    <td class="amount">{{$activo->sumcred}}</td>
                  </tr>
                @endforeach
                <tr>
                  <td class="accountname"></td>
                  <td class="amount"><hr>{{$sumact}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br><br>
          <div class="col pasivo-capital">
            <div class="row pasivo">
              <label class="title">
                Pasivo
              </label>
              <table>
                <tbody>
                  @foreach($pasivos as $pasivo)
                    <tr>
                      <td class="accountname">{{$pasivo->accountName}}</td>
                      <td class="amount">{{$pasivo->sumamount}}</td>
                    </tr>
                  @endforeach
                  <tr>
                    <td class="accountname"></td>
                    <td class="amount"><hr>{{$sumpas}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br><br>
            <div class="row capital">
              <label class="title">
                Capital
              </label>
              <table>
                <tbody>
                  @foreach($capital as $cap)
                  <tr>
                    <td class="accountname">{{$cap->accountName}}</td>
                    <td class="amount">{{$cap->sumamount}}</td>
                  </tr>
                  @endforeach
                  <tr>
                    <td class="accountname"></td>
                    <td class="amount"><hr>{{$sumcap}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
