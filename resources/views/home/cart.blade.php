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
                            <button class="btn btn-danger btn-sm remove-from-cart btn_wishlist"><i class="fa-solid fa-trash fa-fw"></i></button>
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
                            <a href="{{ route('home.shop') }}" class="btn btn-warning btn_wishlist"><i class="fa fa-angle-left"></i> Shopping</a>
                            <a href="{{ route('stripe')}}" class="btn btn-success btn_wishlist"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paypal" viewBox="0 0 16 16">
                        <path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.35.35 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91q.57-.403.993-1.005a4.94 4.94 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.7 2.7 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.7.7 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016q.326.186.548.438c.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.87.87 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.35.35 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32z"/>
                        </svg>  Checkout Now</a>

                      
                        <br><br>

                        <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
        <a style="text-decoration: none;font-size:1rem" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Product Details 
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
            <div class="accordion-item">
            <h2 class="accordion-header">
        <a style="text-decoration: none;font-size:1rem" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Sample Payment  
        </a>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 ">
                    <div class="row">
                      
                        Name: Test <br>
                        Number: 4242 4242 4242 4242<br> CSV: 123<br>
Expiration Month: 12<br>
Expiration Year: 2024
                    </div>
                
                   
                </div>
              
            </div>
            <br>
          
            </div>
        </div>
        </div>
              
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


