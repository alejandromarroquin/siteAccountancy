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
    <div id="page-wrapper" class="p-4">
      <div class="row mt-4">
        <div class="card-body">
          <div class="row margin">
            <div class="col-lg-8 col-xl-12">
              <div class="container information">
                @foreach($company as $information)
                  <label>{{$information->businessName}}</label><br/>
                @endforeach
                <label>Balanza de comprobación al {{$datetoday}}</label>
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
                  @foreach($accountsname as $dta)
                    <tr>
                      <th scope="row" class="cols">{{$cont=$cont+1}}</th>
                      <td class="colsname">{{$dta->accountName}}</td>
                      <td class="cols">
                        @if(array_key_exists($dta->accountName,$arrayaccountd))
                          {{$arrayaccountd[$dta->accountName]}}

                        @endif
                      </td>
                      <td class="cols">
                        @if(array_key_exists($dta->accountName,$arrayaccountc))
                          {{$arrayaccountc[$dta->accountName]}}

                        @endif
                      </td>
                      <td class="cols">
                        @if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc))
                          @if($arrayaccountd[$dta->accountName]>$arrayaccountc[$dta->accountName])
                            {{$arrayaccountd[$dta->accountName]-$arrayaccountc[$dta->accountName]}}

                          @endif
                        @else
                          @if(!array_key_exists($dta->accountName,$arrayaccountc) && array_key_exists($dta->accountName,$arrayaccountd))
                            {{$arrayaccountd[$dta->accountName]}}

                          @endif
                        @endif
                      </td>
                      <td class="cols">
                        @if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc))
                          @if($arrayaccountd[$dta->accountName]<$arrayaccountc[$dta->accountName])
                            {{$arrayaccountc[$dta->accountName]-$arrayaccountd[$dta->accountName]}}
                          @endif
                        @else
                          @if(!array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc))
                            {{$arrayaccountc[$dta->accountName]}}
                          @endif
                        @endif
                      </td>
                    </tr>
                  @endforeach

                  <tr>
                    <td></td>
                    <td class="total">Total</td>
                    <td class="cols">{{$summd}}</td>
                    <td class="cols">{{$summa}}</td>
                    <td class="cols">{{$sumsd}}</td>
                    <td class="cols">{{$sumsa}}</td>
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
