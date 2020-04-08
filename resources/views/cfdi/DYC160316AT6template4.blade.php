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
                      <div style="width:100%; display:flex;justify-content: space-between;">
                        <div style="width:16.6%;">
                          <div style="width:100%; display:flex;justify-content: center;">Cve Prod Serv</div>
                        </div>
                        <div style="width:16.6%;">
                          <div style="width:100%; display:flex;justify-content: center;">Cant.</div>
                        </div>
                        <div style="width:16.6%;">
                          <div style="width:100%; display:flex;justify-content: center;">Unidad</div>
                        </div>
                        <div style="width:16.6%;">
                          <div style="width:100%; display:flex;justify-content: center;">Descripción</div>
                        </div>
                        <div style="width:16.6%;">
                          <div style="width:100%; display:flex;justify-content: center;">Precio Unitario</div>
                        </div>
                        <div style="width:16.6%;">
                          <div style="width:100%; display:flex;justify-content: center;">Importe</div>
                        </div>
                      </div>
                    @for($cont;$cont<$cantproducts;$cont++)<div style="width:100%; display:flex;justify-content: space-between;"><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$codeproduct[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$quantity[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$unit[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$concept[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$unitprice[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$import[$cont]}}</div></div></div>@endfor</div></div>
                <div id="section4" style="  border: 1px solid black;width:100%;min-height:200px;">

                <div class="commercial" id="commercial" draggable="true" style="width: 700px;height: 130px;border: 1px solid black;text-align: center;font-family: Arial;font-size: 40px;color: gray;">
                      <img class="img-fluid commercialtemplate" id="commercial" draggable="true" src="{{'storage/Company/'.session('rfc').'/Commercial/commercial'.session('rfc').'.png'}}">
                    </div></div>