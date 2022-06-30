@section('container')
   <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            @if (isset($listProduct))
                                    @foreach ($listProduct as $key =>$product )
                                        @if ($product->new =='1')
                                            <div class="col-sm-3">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="product.html"><img src="/source/image/product/{{$product->image}}" alt="Lỗi hiển thi"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->name}}</p>
                                                        <p class="single-item-price">
                                                            <span>{{$product->unit_price}}</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary" href="detail/{{$product->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                            </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            <div class="row">
                                <h2>Top Product</h2>
                                @if (isset($listProduct))
                                    @foreach ($listProduct as $key =>$product )
                                        @if ($product->new ==0)
                                            <div class="col-sm-3">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="product.html"><img src="/source/image/product/{{$product->image}}" alt="Lỗi hiển thi"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->name}}</p>
                                                        <p class="single-item-price">
                                                            <span>{{$product->unit_price}}</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                            </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>