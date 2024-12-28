@extends('layoutfb.frontend')
@section('content')
<div class="container">
    <div class="row">
        <div class="md-12">
            @if(session('success'))
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Primary!</strong> {{ session('success') }}
                </div>
            @endif
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                   
                    @if(session('cart')==null)
                    <br>
                    <h5>Ops! Your cart is Emty.
                    Please goto <a href="{{route('home.shop')}}">Shop</a> or your <a href="{{route('wishlist.view')}}">Wishlist</a> to add more products.</h5> <br>
                    @else
                    <h2>Your cart</h2><br>
                    @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{ $id }}">
                        <td data-th="Product">
                            <div class="row">
                            <img src="/img/{{$details['image']}}" alt="" style="width: 120px;">
                                <div class="col-sm-9">
                                    <p class="nomargin">{{ $details['name'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$ {{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn  btn-sm remove-from-cart btn_wishlist " style="color: red;"><i class="fa-solid fa-trash fa-fw"></i></button>
                        </td>
                    
                    </tr>
                    @endforeach
                    @endif
              
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-right">
                            <h2>Total:  ${{ $total }}</h2>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">
                            <div class="">
                               <a href="{{ route('home.shop') }}" class="btn btn-warning "><i class="fa fa-angle-left"></i> Shopping</a>
                               </div>
                           <br>
                           
                            <a href="{{ route('stripe')}}" style="text-decoration: none;"  > <div class="contain shadow bg-body-tertiary rounded">
                                <div class="left-side">
                                    <div class="card">
                                    <div class="cards-line"></div>
                                    <div class="buttons"></div>
                                    </div>
                                    <div class="post">
                                    <div class="post-line"></div>
                                    <div class="screen">
                                        <div class="dollar">$</div>
                                    </div>
                                    <div class="numbers"></div>
                                    <div class="numbers-line2"></div>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <div class="new">Process Checkout</div>
                                </div>
                            </div></a>

                            



                        <br><br>

                        <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <a style="text-decoration: none;font-size:1rem" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     Details 
                                    </a>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col-6 ">
                                                <div class="row">
                                                    <div class="col-1 icon_finder">
                                                    <i class="fa-solid fa-clock"></i>
                                                    </div>
                                                    <div class="col-4">
                                                    Fast Delivery <br>
                                                    From 1 - 2 days
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                                            <div class="col-6 ">
                                                <div class="row">
                                                    <div class="col-1 icon_finder">
                                                        <i class="fa-solid fa-truck"></i>
                                                    </div>
                                                    <div class="col-4">
                                                        Free delivery
                                                        <br>
                                                        Order from $40
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6 ">
                                                <div class="row">
                                                    <div class="col-1 icon_finder">
                                                        <i class="fa-solid fa-headset"></i>
                                                    </div>
                                                    <div class="col-4">
                                                        Support hotline <br>
                                                        (+855) 088 42 10 655
                                                    </div>
                                                </div>
                                            
                                                
                                            </div>
                                            <div class="col-6 ">
                                                <div class="row">
                                                    <div class="col-1 icon_finder">
                                                        <i class="fa-solid fa-money-check-dollar"></i>            
                                                    </div>
                                                    <div class="col-4">
                                                        Easy payment
                                                        <br>
                                                        Many forms             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                     <div class="accordion-item">
                <h2 class="accordion-header">
                <a href="{{route('home.faqs')}}" style="text-decoration: none;" class="accordion-button collapsed"  aria-expanded="false" aria-controls="collapseTwo">
                   Online exchange policy
                </a>
                </h2>
              
            </div>
          

              </div>
                <br>
                <div style="background: powderblue;padding: 1.2rem;border-radius: 12px;"><b> Note:  </b> Befor you decide to buy a product please read the <span class="text-danger">Policy Exchange</span> first !!</div>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".update-cart").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route("update.cart") }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function(e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route("remove.from.cart") }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });
</script>

		
@endsection


