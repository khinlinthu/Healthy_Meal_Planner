  $(document).ready(function(){

             showdata();
          

                $(".addtocart").click(function(){
                    var foodpackagesb = $("#foodpackagesb").text();
                    var priceb = parseInt($("#priceb").text());
                    var typeb = $("#typeb").text();

                    var foodpackagesl = $("#foodpackagesl").text();
                    var pricel = parseInt($("#pricel").text());
                    var typel = $("#typel").text();

                    var foodpackagesd = $("#foodpackagesd").text();
                    var priced = parseInt($("#priced").text());
                    var typed = $("#typed").text();

                    var ftotal = priceb + pricel + priced ;

                    alert(foodpackagesd);
                    // alert(priced);
                    // alert(typed);
                   
                                      
    
                    var item = {
                        foodpackagesb:foodpackagesb,
                        priceb:priceb,
                        typeb:typeb,

                        foodpackagesl:foodpackagesl,
                        pricel:pricel,
                        typel:typel,

                        foodpackagesd:foodpackagesd,
                        priced:priced,
                        typed:typed,

                        ftotal:total,
                        qty:1
                      
                    }

                    console.log(item);

                    var itemlists = localStorage.getItem("item");
                    console.log(itemlists);
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
                        localStorage.setItem("item", string);
                       
                    
    
                })
          
            function showdata(){
            var itemlists = localStorage.getItem("item");
            var itemarray = JSON.parse(itemlists);
            console.log(itemarray);

                var html="";
               
                var total =0;
                var subtotal=0;
                $.each(itemarray,function(i,v){

                    if(v.discount>0)
                    {
                        subtotal = v.qty*v.discount;
                    }
                    else {
                        subtotal = v.qty*v.price;
                    }
                    
                    total+=subtotal;
                    html+=`
                    <tr>
                        <td><button class="btn btn-outline-danger remove"
                         data-id="${i}"><i class="fas fa-times"></i></button></td>
                        <td><img src="${v.photo}" width="150px" height="120px"></td>
                        <td><p>${v.name}</p><p>${v.codeno}</p></td>

                        <td><button class ="btn btn-outline-secondary plus-btn" 
                        data-id="${i}"><i class="fas fa-plus"></i></button></td> 
                        
                        <td><p>${v.qty}</p></td>

                        <td><button class ="btn btn-outline-secondary minus-btn" 
                        data-id="${i}"><i class="fas fa-minus"></i></button></td>
                        

                        <td>`; 
                            if(v.discount>0){
                                html += `<strike> ${v.price}KS </strike>
                                <p>${v.discount}KS</p>`;
                            }
                            else{
                                html += `<p>${v.price}KS</p>`;
                            }

                            html += `</td>

                        <td>${subtotal}  </td>
                        
                    </tr>`;
                });

                html+=`<tr><td colspan = "5">Total</td>
                            <td>${total}Ks</td></tr>`
                    $("tbody").html(html);  
             }
        
      
            $("tbody").on("click",".remove",function(){
                var id = $(this).data('id');
                var itemlists = localStorage.getItem("item");
                var itemarray = JSON.parse(itemlists);

                itemarray.splice(id,1);
                var string = JSON.stringify(itemarray);
                localStorage.setItem("item",string);
                showdata();
           
            })
            
            $("tbody").on("click", ".plus-btn",function(){
                var id = $(this).data('id');
                // console.log(id);
                var itemlists = localStorage.getItem("item");
                var itemarray = JSON.parse(itemlists);
                    $.each(itemarray,function(i,v){
                        if(i ==id){
                            v.qty++;
                        }
                        var string = JSON.stringify(itemarray);
                        localStorage.setItem("item", string);
                        showdata();
                     
                    })
                                
            })
            $("tbody").on("click", ".minus-btn",function(){
               
                var id = $(this).data('id');
                // console.log(id);
                var itemlists = localStorage.getItem("item");
                var itemarray = JSON.parse(itemlists);
                    $.each(itemarray,function(i,v){
                        if(i ==id){
                            v.qty--;
                            if(v.qty<0){
                                itemarray.splice(id,1);
                            }
                        }
                        var string = JSON.stringify(itemarray);
                        localStorage.setItem("item", string);
                        showdata();
                      
                    });

                
                
            });
        });
