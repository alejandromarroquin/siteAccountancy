<div id="section1" style="  border: 1px solid black;width:50%;min-height:200px;float:left;">

                <div id="brand" draggable="true" style="  width:100%;">
                      <img id="brand" draggable="true" class="img-fluid brandtemplate" src="{{'storage/Company/'.session('rfc').'/Brand/'.'brand'.session('rfc').'.png'}}" width="200" style="margin-left: auto;margin-right: auto;display: block;margin-top:1em;">
                    </div></div>
                <div id="section2" style="  border: 1px solid black;width:50%;min-height:200px;float:right;">

                <div class="senderinfo" id="senderinfo" draggable="true" style="  width:100%;">
                      <label class="lbusinessname">{{$businessname}}</label>                        
                      <label class="lrfc"><strong>R.F.C:</strong>{{$rfc_emisor}}</label><br> 
                      <label class="address lstreet">{{$street}}</label>
                      <label class="address lconony">No.{{$numext}} {{$colony}}</label>
                      <label class="address lcity">{{$city}}, {{$state}}. {{$cp}}</label>

                    </div></div>
                <div id="section3" style="  border: 1px solid black;width:100%;min-height:200px;margin-top:14em;">

                <div class="table" id="table" draggable="true" style="  width:100%;">
                      <table class="tab" style="margin-left:auto;margin-right:auto;">
                        <tbody><tr>
                          <th class="cod">Cve Prod Serv</th>
                          <th class="cant">Cant.</th>
                          <th class="unit">Unidad</th>
                          <th class="descript">Descripción</th>
                          <th class="price">Precio Unitario</th>
                          <th class="imp">Importe</th>
                        </tr>
                        
                      <tr><td>@for($cont;$cont&lt;$cantproducts;$cont++)</td></tr><tr><td class="cod">{{$codeproduct[$cont]}}</td><td class="cant">{{$quantity[$cont]}}</td><td class="unit">{{$unit[$cont]}}</td><td class="descript">{{$concept[$cont]}}</td><td class="price">{{$unitprice[$cont]}}</td><td class="imp">{{$import[$cont]}}</td></tr><tr><td>@endfor</td></tr></tbody></table>
                    </div></div>
                <div id="section4" style="  border: 1px solid black;width:100%;min-height:200px;">

                <div class="commercial" id="commercial" draggable="true" style="width: 800px;height: 150px;border: 1px solid black;text-align: center;font-family: Arial;font-size: 40px;color: gray;">
                      <img class="img-fluid commercialtemplate" id="commercial" draggable="true" src="{{'storage/Company/'.session('rfc').'/Commercial/commercial'.session('rfc').'.png'}}">
                    </div></div>