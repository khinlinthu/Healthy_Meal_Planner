
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    $(document).ready(function () {
        $('.checkout').submit(function(e){
          let notes = $('.notes').val();
          if (notes === "") {
            return true;
          }else{
            let order = localStorage.getItem('foodpackage'); // JSON String
            console.log(order);
            $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
              alert(response.msg);
              localStorage.clear();
              location.href="/";
            })
            e.preventDefault();
          }
        })
      })
