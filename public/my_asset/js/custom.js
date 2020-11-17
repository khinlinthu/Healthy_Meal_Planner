  $(document).ready(function(){

             showdata();
          

                $(".addtocart").click(function(){
                    var foodpackagesb = $("#foodpackagesb").text();
                    var priceb = parseInt($("#priceb").text());
                    var typeb = $("#typeb").text();
                    var idb = parseInt($("#idb").text());

                    var foodpackagesl = $("#foodpackagesl").text();
                    var pricel = parseInt($("#pricel").text());
                    var typel = $("#typel").text();
                    var idl = parseInt($("#idl").text());

                    var foodpackagesd = $("#foodpackagesd").text();
                    var priced = parseInt($("#priced").text());
                    var typed = $("#typed").text();
                    var idd = parseInt($("#idd").text());

                    var ftotal = priceb + pricel + priced ;

                    alert(foodpackagesd);
                    // alert(priced);
                    // alert(typed);

                    var qty =1;


                   alert(typed);

                   
                                      
    
                    var item = {

                            foodpackagesb : foodpackagesb ,
                            priceb : priceb ,
                            typeb : typeb , 
                            idb : idb , 
                            foodpackagesl : foodpackagesl ,
                            pricel : pricel ,   
                            typel : typel ,
                            idl : idl ,
                            foodpackagesd : foodpackagesd ,
                            priced : priced ,   
                            typed : typed ,
                            idd : idd ,
                            ftotal : ftotal ,
                            qty : qty 
                            
                      
                    };

                    console.log(item);

                    // var itemlists = localStorage.getItem("item");
                    // console.log(itemlists);

                    // console.log(item);

                    var itemlists = localStorage.getItem("foodpackage");
                    // console.log(itemlists);

                        var itemarray;
                        if (itemlists == null) {
                            itemarray = [];
                        }
                        else {
                            itemarray = JSON.parse(itemlists);
                        }
                        var status = false;
                        $.each(itemarray,function(i,v){
                            if(v.id ==id){
                                v.qty++;
                                status = true;
                            }
                        })
                        if(!status){
                            itemarray.push(item);
                        }
                        var string = JSON.stringify(itemarray);
                        localStorage.setItem("foodpackage", string);
                        
                        showdata();

                })
          
                        function showdata(){
                        var itemlists = localStorage.getItem("foodpackage");
                        var itemarray = JSON.parse(itemlists);
                        // console.log(itemarray);

                            var html="";
                           
                            var total =0;
                            var ftotal=0;
                            $.each(itemarray,function(i,v){

                                    ftotal = v.qty*(v.priceb+v.pricel+v.priced);
                               
                                
                                total+=ftotal;
                                html+=`
                                <tr>
                                    <td><button class="btn btn-outline-danger remove"
                                     data-id="${i}"><i class="fas fa-times"></i></button></td>
                                    <td>
                                        <p>${v.foodpackagesb}</p><p>(${v.typeb})</p>
                                        <p>${v.foodpackagesl}</p><p>(${v.typel})</p>
                                        <p>${v.foodpackagesd}</p><p>(${v.typed})</p>
                                    </td>

                                    <td><button class ="btn btn-outline-secondary plus-btn" 
                                    data-id="${i}"><i class="fas fa-plus"></i></button></td> 
                                    
                                    <td><p>${v.qty}</p></td>

                                    <td><button class ="btn btn-outline-secondary minus-btn" 
                                    data-id="${i}"><i class="fas fa-minus"></i></button></td>
                                    

                                    <td>
                                        <p>${v.priceb}</p>
                                        <p>${v.pricel}</p>
                                        <p>${v.priced}</p>
                                    </td>

                                    <td>${ftotal}</td>
                                    
                                </tr>`;
                            });

                            html+=`<tr><td colspan = "5">Total</td>
                                        <td>${total}Ks</td></tr>`
                                $("tbody").html(html);  
                         }
                    
                  
            $("tbody").on("click",".remove",function(){
                var id = $(this).data('id');
                var itemlists = localStorage.getItem("foodpackage");
                var itemarray = JSON.parse(itemlists);

                itemarray.splice(id,1);
                var string = JSON.stringify(itemarray);
                localStorage.setItem("foodpackage",string);
                showdata();

            })
            
            $("tbody").on("click", ".plus-btn",function(){
                var id = $(this).data('id');
                // console.log(id);
                var itemlists = localStorage.getItem("foodpackage");
                var itemarray = JSON.parse(itemlists);
                    $.each(itemarray,function(i,v){
                        if(i ==id){
                            v.qty++;
                        }
                        var string = JSON.stringify(itemarray);
                        localStorage.setItem("foodpackage", string);
                        showdata();

             
                                
            })
        })
            $("tbody").on("click", ".minus-btn",function(){
               
                var id = $(this).data('id');
                // console.log(id);
                var itemlists = localStorage.getItem("foodpackage");
                var itemarray = JSON.parse(itemlists);
                    $.each(itemarray,function(i,v){
                        if(i ==id){
                            v.qty--;
                            if(v.qty<0){
                                itemarray.splice(id,1);
                            }
                        }
                        var string = JSON.stringify(itemarray);
                        localStorage.setItem("foodpackage", string);
                        showdata();

                    });
      
            });
        });
