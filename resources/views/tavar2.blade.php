@extends('welcome')
@section('content')
<style>
  .borders{
    border-top: 2px solid;
  }
  .bor{
    border-right: 2px solid;
    padding: 0;
  }

  #nazadclicke{
    cursor: pointer;
  }

  .extr22{
    height: 400px;
  }

  .sifra{
    border: none;
    border-bottom: 2px solid;
    font-size: 20px;
    text-align: right;
    padding-bottom: 0px;
  }
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
<div id="AAAAAAAA" class="card ui-widget-content">
    <div class="card-block tab-icon">
            <div class="col-12">
                <ul class="nav nav-tabs md-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-expanded="true"><i class="icofont icofont-home"></i>Товар</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-expanded="false"><i class="icofont icofont-ui-user "></i>Cписок товаров</a>
                        <div class="slide"></div>
                    </li>
                </ul>
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="home7" role="tabpanel" aria-expanded="true">
                        <div class="card-header-left">
                        <div class="row">
                          <div class="col-9 mt-0">
                          </div>
                          <div class="col-5 mt-0">                          
                                <div class="d-flex">
                                  <input class="form-control mx-2" style="width: 37%" type="text" id="nameserch" placeholder="Search">
                                  <input class="form-control" style="width: 37%" type="date" id="dateserch">
                                  <input class="form-control" style="width: 37%" type="date" id="date2serch">
                                </div>
                          </div>
                        </div>
                        </div>
                        <div class="table-responsive">
                            <table class="tab table-hover" id="laravel_crud">
                                <thead>
                                    <tr>
                                      <th>Товар номи</th>
                                      <th>Товар хажми</th>
                                      <th>Товар сони</th>
                                      <th>Олиниш нархи</th>
                                      <th>Сотилиш нархи</th>
                                      <th>Штрих код</th>
                                      <th>Последняя дата</th>
                                      {{-- <th>Управлена</th> --}}
                                    </tr>
                                </thead>
                                <tbody id="ichkitavar">
                             
                                </tbody>
                            </table>
                          </div> 
                          
                    </div>
                    <div class="tab-pane" id="profile7" role="tabpanel" aria-expanded="false">
                      <div class="row">
                        <div class="col-2 bor">
                          <div class="table-responsive">
                            <div class="extr22 scrolll2">
                              <div class="rty2">
                                <table class="tab table-hover" id="">
                                    <thead>
                                      <th>
                                        <button id="vse" class="btn btn-success">
                                          Все
                                        </button>
                                      </th>
                                    </thead>
                                    <tbody id="tavar_tip">

                                    </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-10">
                          <div class="table-responsive">
                            <div class="extr22 scrolll2">
                              <div class="rty2">
                                <table class="tab table-hover">
                                  <thead>
                                    <tr>
                                      <th>Товар номи</th>
                                      <th>Товар хажми</th>
                                      <th>Товар сони</th>
                                      <th>Олиниш нархи</th>
                                      <th>Сотилиш нархи</th>
                                      <th>Штрих код</th>
                                      <th>Последняя дата</th>
                                    </tr>
                                </thead>
                                    <tbody id="tavarlar">

                                    </tbody>
                                </table>
                              </div> 
                            </div>
                          </div> 
                        </div>
                        <div class="col-12 m-0 p-0 borders">
                          <div class="row">
                            <div class="col-2">
                              <input type="text" id="tavarshtuk" class="form-control sifra" placeholder="Товар шт">
                              <input type="text" id="shtuk" class="form-control sifra" placeholder="Шт">  
                            </div>
                            <div class="col-2">
                              <input type="text" id="foiz" class="form-control sifra" placeholder="Товар протсент">
                              <input type="text" id="dateitog" class="form-control sifra" placeholder="Итого">  
                            </div>
                            <div class="col-5">
                            </div>
                            <div class="col-3 mt-4">
                              <form>
                                @csrf
                                <div class="d-flex">
                                  <input class="form-control mx-2" style="width: 37%" type="date" id="date" name="date">
                                  <input class="form-control" style="width: 37%" type="date" id="date2" name="date2">
                                    {{-- <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary buts" id="submithendel">
                                        Поиск
                                    </button>
                                  </div> --}}
                                </div>
                              </form>
                          </div>
                          </div>
                        </div>
                      </div>                     
                    </div>
                    <div class="tab-pane" id="messages7" role="tabpanel" aria-expanded="false">
                      <div class="table-responsive">
                        <table class="tab table-hover" id="">
                            <thead>
                                  <th>Шт</th>
                                  <th>Расходы</th>
                                  <th>Переход</th>
                                  <th>Доход</th>
                                  <th>Последнее свидание</th>
                            </thead>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="settings7" role="tabpanel" aria-expanded="false">
                      <div class="card-header-left">
                        <div class="row">
                          <div class="col-3 mt-0">
                            <div class="card-tools">
                              <form action="" method="GET">
                                @csrf
                                <div class="input-group input-group-sm">
                                  <input class="form-control" type="date" name="date">
                                  <input class="form-control" type="date" name="date2">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary buts">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                    </button>
                                  </div>            
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        </div>
                        <p class="m-0 text-center">Пусто</p>
                    </div>
                </div>
            </div>
    </div>
</div>

<script>
$( function() {
  $( "#tavarlar" ).selectable();
} );
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    $(document).ready(function(){         
      let _token   = $('meta[name="csrf-token"]').attr('content');

      fetch_customer();
      function fetch_customer(query = '')
      {
          $.ajax({
              url:"{{ route('tavarichki') }}",
              method:'GET',
              data:{query:query},
              dataType:'json',
              success:function(data)
              {
                $('#ichkitavar').html(data.table_data);
              }
          })
      }

      $(document).on("keyup", "#nameserch", function(){
        var query = $(this).val();
        fetch_customer(query);
      });

      $(document).on("change", "#dateserch", function(){
        var date = $("#dateserch").val();
          var date2 = $("#date2serch").val();
            $.ajax({
              url: "{{ route('dateserch') }}",
              method: "GET",
              data:{
                date: date,
                date2: date2,
              },
              dataType:'json',
              success:function(data){
                $('#ichkitavar').html(data.table_data);
              }
            });
      });

      $(document).on("change", "#date2serch", function(){
        var date = $("#dateserch").val();
          var date2 = $("#date2serch").val();
            $.ajax({
              url: "{{ route('dateserch') }}",
              method: "GET",
              data:{
                date: date,
                date2: date2,
              },
              dataType:'json',
              success:function(data){
                $('#ichkitavar').html(data.table_data);
              }
            });
      });

      fetch_customer_data();
      function fetch_customer_data(query = '')
      {
          $.ajax({
              url:"{{ route('tavar_tip') }}",
              method:'GET',
              data:{query:query},
              dataType:'json',
              success:function(data)
              {
                $('#tavar_tip').html(data.table_data);
              }
          })
      }

      fetch_customer_data2();
      function fetch_customer_data2(query = '')
      {
          $.ajax({
              url:"{{ route('tavar') }}",
              method:'GET',
              data:{query:query},
              dataType:'json',
              success:function(data)
              {
                $('#tavarlar').html(data.table_data);
              }
          })
      }

      $(document).on('click', "#vse", function(){
        let _token  = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
              url:"{{ route('tavarvse') }}",
              method:'GET',
              data:{
                _token: _token
              },
              dataType:'json',
              success:function(data)
              {
                $('#tavarlar').html(data.output);
                fetch_customer_data();
                fetch_customer_data2(data);
                var foo =100 * data.foo2.dateitog / data.foo2.opshi;
                $("#tavarshtuk").val(data.foo2.tavarshtuk);
                $("#shtuk").val(data.foo2.shtuk);
                $("#foiz").val(foo);
                $("#dateitog").val(data.foo2.dateitog);
              }
          })
        });

      $(document).on('click', "#data", function(){
        var id = $(this).data("id");
        $.ajax({
              url:"{{ route('tavar') }}",
              method:'GET',
              data:{
                id: id
              },
              dataType:'json',
              success:function(data)
              {
                $('#tavarlar').html(data.output);
                fetch_customer_data();
                fetch_customer_data2(data);
                var foo =100 * data.foo2.dateitog / data.foo2.opshi;
                $("#tavarshtuk").val(data.foo2.tavarshtuk);
                $("#shtuk").val(data.foo2.shtuk);
                $("#foiz").val(foo);
                $("#dateitog").val(data.foo2.dateitog);
              }
          })
        });

        $(document).on('change', "#date", function(e) {
          e.preventDefault();
          let _token  = $('meta[name="csrf-token"]').attr('content');
          var date = $("#date").val();
          var date2 = $("#date2").val();
            $.ajax({
              url: "{{ route('search') }}",
              method: "POST",
              data:{
                date: date,
                date2: date2,              
                _token: _token
              },
              dataType:'json',
              success:function(data){
                $('#tavarlar').html(data.output);
                fetch_customer_data();
                var foo =100 * data.foo2.dateitog / data.foo2.opshi;
                $("#tavarshtuk").val(data.foo2.tavarshtuk);
                $("#shtuk").val(data.foo2.shtuk);
                $("#foiz").val(foo);
                $("#dateitog").val(data.foo2.dateitog);
              }
            });
        });

        $(document).on('change', "#date2", function(e) {
          e.preventDefault();
          let _token  = $('meta[name="csrf-token"]').attr('content');
          var date = $("#date").val();
          var date2 = $("#date2").val();
            $.ajax({
              url: "{{ route('search') }}",
              method: "POST",
              data:{
                date: date,
                date2: date2,              
                _token: _token
              },
              dataType:'json',
              success:function(data){
                $('#tavarlar').html(data.output);
                fetch_customer_data();
                var foo =100 * data.foo2.dateitog / data.foo2.opshi;
                $("#tavarshtuk").val(data.foo2.tavarshtuk);
                $("#shtuk").val(data.foo2.shtuk);
                $("#foiz").val(foo);
                $("#dateitog").val(data.foo2.dateitog);
              }
            });
        });
    });


  </script>

@endsection