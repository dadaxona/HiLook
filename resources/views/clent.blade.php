@extends('welcome')
@section('content')
<style>
  #tavar2{
    display: none;
    background-color: rgb(0 0 0 / 75%);
    padding: 32px;
    border-radius: 12px;
    width: 99%;
    margin: auto;
    position: absolute;
    border-radius: 3px solid black; 
    color: white;
  }

  #country_list{
    position: absolute;
  }
</style>
<div class="card p-0">
        <div class="card-header">
              <button type="button" class="btn btn-primary" onclick="addPost()">Товар кошиш</button>
              {{-- <button type="button" class="btn btn-info" onclick="addPostcret()">Товар кошиш +</button>
              <button id="import" class="btn btn-success">Import</button> --}}     
              <div class="row">
                 <table class="tab table-hover" id="laravel_crud">
                    <thead>
                    <tr>
                        <th>Товар номи</th>
                        <th>Товар хажми</th>
                        <th>Товар сони</th>
                        <th>Олиниш нархи</th>
                        <th>Сотилиш нархи</th>
                        <th>Штрих код</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody id="clent">

                    </tbody>               
                </table>
              </div>
            </div>
        </div>

        <div id="tavar2">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Товарни кошиш</h5>
              <svg xmlns="http://www.w3.org/2000/svg" id="nazadclicke" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg>
          </div>
            <form id="TavarFormTable" action="{{ route('store3') }}" method="POST">
              @csrf
              <table class="col-12" id="dynamicTable">
                <thead>
                  <tr>
                    <th>Товар номи</th>
                    <th>Товар хажми</th>
                    <th>Товар сони</th>
                    <th>Олиниш нархи</th>
                    <th>Сотилиш нархи</th>
                    <th>Штрих код</th>
                    <th>Удалить</th>
                </tr>
                </thead>
              <tbody>
    
              </tbody>
    
              </table>   
              <div class="modal-footer">
                <a href="javascript:void(0)" id="add" class="btn btn-success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
                  Добавыт
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="nazadclick">Назад</button>
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>        
        </form>
      </div>
    
      <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Товар кошиш</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="userForm" action="{{ route('store') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id" id="id">
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Товар нони</label>
                  <input type="text" class="form-control" name="name"  id="name">
                  <span class="text-danger error-text name_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Сон</label>
                  <input type="text" class="form-control" name="son"  id="son">
                  <span class="text-danger error-text son_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Дона</label>
                  <input type="text" class="form-control" name="dona"  id="dona">
                  <span class="text-danger error-text dona_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Олиниш нархи</label>
                  <input type="text" class="form-control" name="summa"  id="summa">
                  <span class="text-danger error-text summa_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Сотилиш нархи</label>
                  <input type="text" class="form-control" name="summa2" id="summa2">
                  <span class="text-danger error-text summa_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Штрих код</label>
                  <input type="text" class="form-control" name="kod" id="kod">
                  <span class="text-danger error-text kod_error"></span>
                </div>             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
          </div>
        </div>
      </div>

      {{-- <div class="modal fade" id="post-modalcret" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Товар кошиш</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="userFormcreate" action="{{ route('astore3') }}" method="POST">
                  @csrf
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Товар нони</label>
                  <input type="text" class="form-control" id="country">
                  {{-- <div id="country_list"></div>
                  <span class="text-danger error-text name_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Сон</label>
                  <input type="text" class="form-control" id="ason">
                  <span class="text-danger error-text son_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Дона</label>
                  <input type="text" class="form-control" id="adona">
                  <span class="text-danger error-text dona_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Олиниш нархи</label>
                  <input type="text" class="form-control" id="asumma">
                  <span class="text-danger error-text summa_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Сотилиш нархи</label>
                  <input type="text" class="form-control" id="asumma2">
                  <span class="text-danger error-text summa_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Штрих код</label>
                  <input type="text" class="form-control" id="akod">
                  <span class="text-danger error-text kod_error"></span>
                </div>             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
          </div>
        </div>
      </div> --}}

      <div class="modal fade" id="post-modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Товарни очириш</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id5" id="id5">
              </div>
              <div class="text-center pb-4">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Нет</button>
                  <button type="submit" onclick="dele2()" class="btn btn-success">Да</button>
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="tavar2delete2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="{{ route('imports') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  <input type="file" name="import" class="form-control" id="import">
                </div>
                <div class="text-center pb-4">
                    <button type="submit" class="btn btn-success">Import</button>
                </div>
              </form>
          </div>
        </div>
      </div>
<script>
  $( function() {
    $( "#clent" ).selectable();
  } );

    // $('#country').on('keyup',function() {
    //     var query = $(this).val(); 
    //     $.ajax({            
    //         url:"{{ route('searchcountry') }}",      
    //         type:"GET",            
    //         data:{'country':query},            
    //         success:function (data) {              
    //             $('#country_list').html(data);
    //         }
    //     })
    // });
    
    // $(document).on('click', 'li', function(){
    //     var value = $(this).text();
    //     $('#country').val(value);
    //     $('#country_list').html("");
    // });

  $(document).on('click', '#import', function(){
    $('#tavar2delete2').modal('show');
  });

    var i = 0;
    $("#add").click(function(){
            ++i;
        $("#dynamicTable tbody").append('<tr><td><input type="text" name="addmore['+i+'][name]" id="" class="form-control mx-2" placeholder="Тавар имя"></td><td><input type="text" name="addmore['+i+'][son]" id="" class="form-control mx-2" placeholder="Тавар хажми"></td><td><input type="text" name="addmore['+i+'][dona]" id="" class="form-control mx-2" placeholder="Тавар сон"></td><td><input type="text" name="addmore['+i+'][summa]" id="" class="form-control mx-2" placeholder="Товар суммаси"></td><td><input type="text" name="addmore['+i+'][summa2]" id="" class="form-control mx-2" placeholder="Сотилиш суммаси"></td><td><input type="text" name="addmore['+i+'][kod]" id="" class="form-control mx-2" placeholder="Штрих код"></td><td><button type="button" class="btn btn-danger remove-tr">Удалить</button></td></tr>');
    }); 
  
    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
        --i;               
    });
    
    $( "#nazadclick" ).on( "click", function() {
      $('#tavar2').toggle('fold', 1000);
    });

    $( "#nazadclicke" ).on( "click", function() {
      $('#tavar2').toggle('fold', 1000);
    });

  function addPost() {
    $('#tavar2').show('fold', 1000);
  }

  function addPostcret() {    
    $("#userFormcreate")[0].reset();
    $("#post-modalcret").modal('show');
  }

  function editPost(id) {
    let _url = `show/${id}`;
    $('#id').val('');
    $('#name').val('');
    $('#son').val('');
    $('#dona').val('');
    $('#summa').val('');
    $('#summa2').val('');
    $('#kod').val('');
    
    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
          if(response) {
            $("#id").val(response.id);
            $("#name").val(response.name);
            $("#son").val(response.son);
            $("#dona").val(response.dona);
            $("#summa").val(response.summa);
            $("#summa2").val(response.summa2);
            $("#kod").val(response.kod);
            $('#post-modal').modal('show');
          }
      }
    });
  }

  $(document).ready(function(){
    fetch_customer_data();
    function fetch_customer_data(query = '')
    {
        $.ajax({
            url:"{{ route('live_clent') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
              let rows =  '';
              data.data.forEach(room => {
                rows += `
                <tr id="row_${room.id}">
                <td class="ui-widget-content">${room.name}</td>
                <td class="ui-widget-content">${room.son}</td>
                <td class="ui-widget-content">${room.dona}</td>
                <td class="ui-widget-content">${room.summa}</td>
                <td class="ui-widget-content">${room.summa2}</td>
                <td class="ui-widget-content">${room.kod}</td>
            
                <td class="ui-widget-content">
                  <a href="javascript:void(0)" onclick="editPost(${room.id})" style="color: green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                    </svg>
                  </a>                            
                  <a href="javascript:void(0)" onclick="deletePost(${room.id})" class="mx-3" style="color: red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                  </a>
                </td>
              </tr>`;
              });
              $('#clent').html(rows);            
            }
        })
    }

    $('#TavarFormTable').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
          url:$(form).attr('action'),
          method:$(form).attr('method'),
          data:new FormData(form),
          processData:false,
          dataType:'json',
          contentType:false,
          beforeSend:function(){
            $(form).find('span.error-text').text('');
          },
          success:function(data){
            if(data.code == 200){
              toastr.success(data.msg);
              location.reload(true);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              toastr.success(data.msg);
              location.reload(true);
            }           
          }
        });
      });
  
      $('#userFormcreate').on('submit', function(e) {
        e.preventDefault();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        var form = this;
        var country = $("#country").val();
        var son = $("#ason").val();
        var dona = $("#adona").val();
        var summa = $("#asumma").val();
        var summa2 = $("#asumma2").val();
        var kod = $("#akod").val();
        $.ajax({
          url:$(form).attr('action'),
          method:$(form).attr('method'),
          data:{
            name:country,
            son:son,
            dona:dona,
            summa:summa,
            summa2:summa2,
            kod:kod,
            _token:_token
          },
          dataType:'json',
          beforeSend:function(){
            $(form).find('span.error-text').text('');
          },
          success:function(data){
            if(data.code == 200){
              $(form)[0].reset();
              fetch_customer_data();            
              $('#post-modalcret').modal('hide');
              toastr.success(data.msg);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              $(form)[0].reset();
              fetch_customer_data();
              $('#post-modalcret').modal('hide');
              toastr.success(data.msg);
            }           
          }
        });
      });

    $('#userForm').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
          url:$(form).attr('action'),
          method:$(form).attr('method'),
          data:new FormData(form),
          processData:false,
          dataType:'json',
          contentType:false,
          beforeSend:function(){
            $(form).find('span.error-text').text('');
          },
          success:function(data){
            if(data.code == 200){
              $(form)[0].reset();
              fetch_customer_data();
              $('#id').val('');         
              $('#post-modal').modal('hide');
              toastr.success(data.msg);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              fetch_customer_data();
              $(form)[0].reset();
              $('#id').val('');
              $('#post-modal').modal('hide');
              toastr.success(data.msg);
            }           
          }
        });
      });
  });

  function deletePost(id) {
    $("#id5").val(id);
    $('#post-modal5').modal('show');
  }

  function dele2() {
    var id = $("#id5").val();
    let _url = `delete/${id}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: 'POST',
        data: {
          _token: _token
        },
        success: function(data) {
          $("#row_"+id).remove();
          $('#post-modal5').modal('hide');
          toastr.success(data.msg);
        }
      });
  }

</script>

@endsection