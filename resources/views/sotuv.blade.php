@extends('welcome')
@section('content')
<style>
    #itog{
        background: #ffffff;
        border: none;
        font-size: 25px;
        border-bottom: 2px solid;
    }
    #itog2{
        background: #ffffff;
        border: none;
        font-size: 25px;
        border-bottom: 2px solid;
    }
    #kurs{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #kurs2{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #belgi{
    
        border-bottom: 2px solid;
    }
    .fff{
        background: #ffffff;
        border: none;
        font-size: 20px;
    }
    .itogsw{
        background-color: white;
        color: black;
        font-size: 20px;
    }
    .form-con {
        font-size: 25px;
        border-radius: 9px;
        border: 1px solid #877d7d;
        background-color: white;
        color: #000;
    }

    #zaqazmodal{
        display: none;
        background-color: rgb(0 0 0/0.8);
        padding: 32px;
        width: 99%;
        margin: auto;
        position: absolute;
        border-radius: 9px;
        color: white;
    }
    .tab0{
        border-right: 1px solid;
        color: #ffffff;
    }
    .tab01{
        color: #ffffff;
    }
  
</style>
<div class="page-body button-page">
        <div class="col-sm-12 card">
            <div class="card-header">
                <div class="card-header-left">
                    <h4>Торговля</h4>
                </div>
                <button onclick="yangilash()" class="btn btn-warning m-0 p-2" style="color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                      </svg>
                </button> 
                <button onclick="udalit()" id="udalit" class="btn btn-danger m-0 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                      </svg>
                </button>
                <button id="tayyor" class="btn btn-success m-0 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                      </svg>
                </button>
            </div>
      
            <div class="row">
            <div class="card col-10">
                <div class="extr22 scrolll2">
                    <div class="rty2">
                        <table class="tab table-hover">
                            <thead>
                                <tr>
                                    <th>Номи</th>
                                    <th>Сотилиш нарх</th>
                                    <th>Сони</th>
                                    <th>Дона</th>
                                    <th>Итого</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card col-2">
            @if ($itogs)
                <label for="message-text" class="col-form-label m-0 text-right">Итого</label>
                <input type="text" name="id" id="itog" class="form-control text-right" disabled value="{{ $itogs->itogo }}">
            @else
                <label for="message-text" class="col-form-label m-0 text-right">Итого</label>
                <input type="text" id="itog2" class="form-control text-right" disabled value="0">
           
                @endif
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h4 id="belgi" class="text-right"></h4>
            <input type="hidden" name="id" id="belgi2">
        </div>
    </div>
 <div class="row">
    <div class="card col-12">
        <div class="card-header">
            <div class="card-header-left">
                <input type="text" name="search" id="search" class="form-control" placeholder="Поиск" />
            </div>
        </div>
            <div class="table-responsive mailbox-messages">
                <div class="extr22 scrolll2">
                    <div class="rty2">
                        <table class="tab table-hover">
                            <thead>
                                <tr>
                                <th>Номи</th>
                                <th>Хажм</th>
                                <th>Сумма</th>
                                </tr>
                            </thead>
                            <tbody id="tbody2">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>        
</div>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><input type="text" class="form-control fff" id="name2" disabled></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <input type="hidden" name="" id="t_id">
                <div class="col-6 mb-3">
                    <label for="message-text" class="col-form-label">Тавар хажми</label>
                    <input type="number" class="form-control form-con" name="son" id="son" disabled>
                </div>
                <div class="col-6 mb-3">
                    <label for="message-text" class="col-form-label">Тавар сони</label>
                    <input type="number" class="form-control form-con" name="dona" id="dona" disabled>
                </div>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Тавар суммаси</label>
                <input type="number" class="form-control form-con" name="summa2" id="summa2" disabled>
                <input type="hidden" id="sum2">
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="message-text" class="col-form-label">Тавар хажми боича <span id="soon"></span> та гача</label>
                    <input type="number" class="form-control form-con" name="sonkal" id="sonkal">
                </div>
                <div class="col-6 mb-3">
                    <label for="message-text" class="col-form-label">Тавар сони боича <span id="doona"></span> та гача</label>
                    <input type="number" class="form-control form-con" name="donakal" id="donakal">
                </div>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Сотув суммаси</label>
                <input type="number" class="form-control form-con" name="sot" id="sot" disabled>
                <input type="hidden" id="sot2">
            </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="nazad">Назад</button>
          <button type="submit" class="btn btn-primary" id="saqlash">Сохранить</button>
        </div>
   
      </div>
    </div>
  </div>

  
  <div class="modal fade" id="jonatish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="mb-3 d-flex">
                   <div class="col-4">
                        <h5 class="mt-2 mx-2">Итого:</h5>
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control text-right itogsw" name="itogs" id="itogs" disabled>
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <div class="col-4">
                        <h5 class="mt-2 mx-2">Наличные:</h5>
                    </div>                    
                   <div class="col-8">
                    <input type="number" class="form-control text-right itogsw" name="naqt" id="naqt">
                   </div>
                </div>
                <div class="mb-3 d-flex">
                    <div class="col-4">
                        <h5 class="mt-2 mx-2">Карта:</h5> 
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control text-right itogsw" name="plastik" id="plastik">
                    </div>
                </div>  
                <div class="mb-3 d-flex">
                    <div class="col-4">
                        <h5 class="mt-2 mx-2">Безнал:</h5>    
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control text-right itogsw" name="bank" id="bank">
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <div class="col-4">
                        <h5 class="mt-2 mx-2">Долг:</h5>    
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control text-right itogsw" name="karzs" id="karzs" disabled>
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <div class="col-4">
                        <h5 class="mt-2 mx-2">Клент имя</h5>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control text-right itogsw" name="clentname" id="clentname">
                    </div>
                </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="nazad">Назад</button>
          <button type="submit" class="btn btn-success" id="oplata">Оплаты</button>
        </div>
   
      </div>
    </div>
  </div>
<div class="modal fade" id="post-modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Товарни очириш</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="text-center pb-4">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Нет</button>
              <button type="submit" id="dele2" class="btn btn-success">Да</button>
          </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $( function() {
    $( "#tbody" ).selectable();
  } );

  $( function() {
    $( "#tbody2" ).selectable();
  } );
  
  $( function() {
    $( "#zaqazz123" ).selectable();
  } );

  function plus(id) {
        $.ajax({
            url: "{{ route('tashlash') }}",
            type: 'GET',
            data: {
                id: id,
            },
            success: function(data) {                
                $("#t_id").val(data.id);
                $("#name2").val(data.name);
                $("#son").val(data.son);
                $("#soon").html(data.son);
                $("#dona").val(data.dona);
                $("#sonkal").val('');
                $("#donakal").val('');
                $("#doona").html(data.dona);
                $("#summa2").val(data.summa2);
                $('#edit').modal('show');
            }
        });
    }

function yangilash() {
    var id = $("#belgi2").val();
    if(id){
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('belgi2') }}",
            type: 'GET',
            data: {
                id: id,
                _token: _token
            },
            success: function(data) {
                $("#name2").val(data.name);
                $("#son").val(data.soni);
                $("#summ").val(data.itog);
                $("#summo").val(data.summa2);
                $("#summ2").val(data.summa2);                    
                $("#sum2").val(data.itog);
                $("#cheg").val('');
                $('#edit').modal('show');
            }
        });
    }else{ 
        toastr.error("Малумот танланмаган");
    }
}

function belgilash(id){
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "{{ route('belgila') }}",
        type: 'POST',
        data: {
            id: id,
            _token: _token
        },
        success: function(data) {
            $("#belgi").html(data.name);
            $("#belgi2").val(data.id);
            toastr.success("Танланди").fadeOut(1500);
        }
    });
}

function udalit() {
    $("#post-modal5").modal('show');
}

$(document).ready(function(){
    $(document).on('keyup', '#sonkal', function(){
        var sonkal = $("#sonkal").val();
        var summa2 = $("#summa2").val();
        var dona = $("#dona").val();
        var donakal = $("#donakal").val();  
        var j = summa2 * sonkal;
        var j2 = donakal * summa2 / dona;
        var a = j + j2;
        $("#sot").val(a);
        $("#sot2").val(a);
    });
    
    $(document).on('keyup', '#donakal', function(){
        var donakal = $("#donakal").val();
        var summa2 = $("#summa2").val();
        var dona = $("#dona").val();
        var sonkal = $("#sonkal").val();     
        var j2 = donakal * summa2 / dona;
        var j = summa2 * sonkal;
        var a =  j2 + j;
        $("#sot").val(a);
        $("#sot2").val(a);        
    });

    $(document).on('keyup', '#naqt', function(){
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var sss = itogs - naqt - plastik - bank;
        $("#karzs").val(sss);
    });

    $(document).on('keyup', '#plastik', function(){
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var sss = itogs - naqt - plastik - bank;
        $("#karzs").val(sss);
    });

    $(document).on('keyup', '#bank', function(){
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var sss = itogs - naqt - plastik - bank;
        $("#karzs").val(sss);
    });

    fetch_customer_data();
    function fetch_customer_data(query = '')
    {
        $.ajax({
            url:"{{ route('sotuv') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tbody').html(data.table_data);
            }
        });
    }
    fetch_customer_data2();
    function fetch_customer_data2(query = '')
    {
        $.ajax({
            url:"{{ route('live_search') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tbody2').html(data.table_data);                    
            }
        })
    }
    $("#saqlash").on('click', function(){
        var id = $("#t_id").val();            
        var sonkal = $("#sonkal").val();
        var donakal = $("#donakal").val();
        var sot = $("#sot2").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');              
        $.ajax({
            url: "{{ route('sazdat') }}",
            type: 'POST',
            data: {
                id: id,
                sonkal: sonkal,
                donakal: donakal,
                sot: sot,
                _token: _token
            },
            success: function(data) {
            if(data.code == 0){
                toastr.error(data.msg);
            }else{
                $('#tbody').prepend('<tr onclick="belgilash('+data.data.id+')"><td>'+data.data.name+'</td><td>'+data.data.summa2+'</td><td>'+data.data.soni+'</td><td>'+data.data.dona+'</td><td>'+data.data.itog+'</td></tr>');
                $("#itog").val(data.data2.itogo);
                $("#itog2").val(data.data2.itogo);
                $("#t_id").val('');
                $("#name2").val('');
                $("#son").val('');
                $("#dona").val('');
                $("#summa2").val('');
                $("#sonkal").val('');
                $("#donakal").val('');
                $("#sot").val('');
                $("#sot2").val('');
                $('#edit').modal('hide');
                toastr.success(data.msg).fadeOut(1500);
            }                  
        }
    }); 
});

    $("#usdkurd2").on('click', function(){
        var usdkurd = $("#usdkurd").val();
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('usdkurd2') }}",
            type: 'GET',
            data: {
                kurs: usdkurd,
                _token: _token
            },
            success: function(data) {
                $("#itog2").val(data.data.itogo);
                $("#itog").val(data.data.itogo);
                $("#kurs").val(data.data.kurs);
                $("#kurs2").val(data.data.kurs);
                $('#kurrrr').modal('hide');
                fetch_customer_data();
                fetch_customer_data2();
                toastr.success(data.msg).fadeOut(1500);
            }
        });
    });

    $(document).on('click', '#SubmitCkicked' ,function(){
        var id = $("#user_zaq").val();
        var doimiy = $("#diomiy").val();
        let _token = $('meta[name="csrf-token"]').attr('content');
        if(id){
            $.ajax({
                url:"{{ route('submitckicked') }}",
                method:'POST',
                data:{
                    id: id,
                    doimiy: doimiy,
                    _token: _token
                },
                dataType:'json',
                success:function(data)
                {
                    fetch_customer_data();
                    $("#itog2").val(data.data.itogo);
                    $("#itog").val(data.data.itogo);
                    $("#kurs").val(data.data.kurs);
                    $("#kurs2").val(data.data.kurs);
                    $("#user_zaq").val('');
                    $('#zaqazmodal').toggle('fold');
                    toastr.success(data.msg).fadeOut(1500);
                }
            });
        }else{
            toastr.error("Клентни белгиланг").fadeOut(1500);
        }
    });

    $("#tayyor").on('click', function(){
        var itog = $("#itog").val();
        var itog2 = $("#itog2").val();
        if(itog < 1 || itog2 < 1){
            toastr.error("Итог 0").fadeOut(1500);
        }else{
            $.ajax({
                url: "{{ route('rachot') }}",
                type: 'GET',
                success: function(data) {
                    $("#itogs").val(data.itogo);
                    $("#jonatish").modal("show");                        
                }
            });
        }
    });

    $("#oplata").on('click', function(){
        let _token = $('meta[name="csrf-token"]').attr('content');
        var clentra = $("#clentname").val();
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var karzs = $("#karzs").val();
        if(karzs == 0){
            $.ajax({
                url: "{{ route('oplata') }}",
                type: 'POST',
                data:{
                    name: clentra,
                    itogs: itogs,
                    naqt: naqt,
                    plastik: plastik,
                    bank: bank,
                    karzs: karzs,
                    _token: _token
                },
                success: function(data) {
                    if(data.code == 0){
                        toastr.error(data.msg).fadeOut(2000);
                    }else{
                        fetch_customer_data();
                        fetch_customer_data2();
                        $("#itog2").val(data.itogo);
                        $("#itog").val(data.itogo);
                        $("#belgi").html('');
                        $("#belgi2").val('');
                        $("#itogs").val("");
                        $("#naqt").val("");
                        $("#plastik").val("");
                        $("#bank").val("");
                        $("#karzs").val("");
                        toastr.success("Малумотлар сакланди").fadeOut(2000);
                        $("#jonatish").modal("hide");
                    }
                }
            });
        }else{
            toastr.error("Тулов толик амалга оширилмади");
        }
    });
                
    $("#dele2").on('click', function(){
        var id = $("#belgi2").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        if(id){
            $.ajax({
                url: "{{ route('udalit') }}",
                type: 'POST',
                data: {
                    id: id,
                    _token: _token
                },
                success: function(data) {
                    fetch_customer_data();
                    fetch_customer_data();
                    $("#belgi").html('');
                    $("#belgi2").val('');
                    $("#itog2").val(data.data2.itogo);
                    $("#itog").val(data.data2.itogo);
                    $("#post-modal5").modal('hide');
                    toastr.error(data.msg).fadeOut(1500);
                }            
            });
        }else{
            toastr.error("Белгиланг").fadeOut(1500);
        }
    });

    $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_customer_data2(query);
        });
});

</script>

@endsection