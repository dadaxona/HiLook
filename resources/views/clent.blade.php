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
</style>
<div class="card p-0">
        <div class="card-header">
              <button type="button" class="btn btn-primary" onclick="addPost()">Товар кошиш</button>          
              <button id="import" class="btn btn-success">Import</button>              
              {{-- <input type="text" name="country" id="country" placeholder="Enter country name">        
              <div id="country_list"></div>     --}}
              
              <div class="row">
                {{-- <div class="col-12"> --}}
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

    $('#country').on('keyup',function() {
        var query = $(this).val(); 
        $.ajax({            
            url:"{{ route('searchcountry') }}",      
            type:"GET",            
            data:{'country':query},            
            success:function (data) {              
                $('#country_list').html(data);
            }
        })
    });
    
    $(document).on('click', 'li', function(){
        var value = $(this).text();
        $('#country').val(value);
        $('#country_list').html("");
    });

  $(document).on('click', '#import', function(){
    $('#tavar2delete2').modal('show');
  });
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
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
                $('#clent').html(data.table_data);
            }
        })
    }

    // name

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
              $('#name').val('');
              $('#son').val('');              
              $('#dona').val('');
              $('#summa').val('');
              $('#summa2').val('');
              $('#kod').val('');
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
              $('#name').val('');
              $('#son').val('');              
              $('#dona').val('');
              $('#summa').val('');
              $('#summa2').val('');
              $('#kod').val('');
              toastr.success(data.msg);
              location.reload(true);
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
              $('#name').val('');
              $('#son').val('');              
              $('#dona').val('');
              $('#summa').val('');
              $('#summa2').val('');
              $('#kod').val('');
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
              $('#id').val('');
              $('#name').val('');
              $('#son').val('');              
              $('#dona').val('');
              $('#summa').val('');
              $('#summa2').val('');
              $('#kod').val('');
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