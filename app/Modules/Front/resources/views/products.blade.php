@extends('Front::sidebar')
@section('shoppage')
    <div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color">
        <div class="page-title category-title">
            <h1>Bikes</h1>
        </div>
        <p class="category-image"><img src="#" alt="Men" title="Men"></p>
        <div class="category-products">
            <div class="toolbar">
                <div class="sorter">
                    <p class="view-mode"> <label>View as:</label> <a id="ga" title="Grid" class="grid active"> <i
                                class="icon-grid icons"></i> </a> <a id="la" title="List" class="redirectjs list"> <i
                                class="icon-list icons"></i> </a></p>
                    <div class="sort-by">
                        <label>Sort By</label>
                        <select id="sort_by">
                            <option value="name"> Name</option>
                            <option value="price" selected> Price</option>
                        </select>
                        <a href="#" title="Set Descending Direction"><img src="assets/images/i_asc_arrow.gif"
                                alt="Set Descending Direction" class="v-middle"></a>
                    </div>
                    <div class="limiter">
                        <label>Order By</label>
                        <select id="order_by">
                            <option value="asc" selected> Ascending</option>
                            <option value="desc"> descending</option>
                        </select>
                    </div>
                    {{-- <div class="pager">
                        <div class="pages">
                            <strong>Page:</strong>
                            <ol>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li class="bor-none"> <a class="next i-next" href="#" title="Next"> <i
                                            class="fa fa-angle-right">&nbsp;</i> </a></li>
                            </ol>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!--- .toolbar-->
            <div id="content">
            </div>

            <!--- .products-grid-->
            {{-- <div class="page-nav-bottom">
                <div class="left">Items 13 to 24 of 38 total</div>
                <div class="rightlink">
                    {!! $product->render() !!}
                </div>
            </div> --}}
            <!--- .page-nav-bottom-->
        </div>
        <!--- .category-products-->
    </div>
    <!--- .col-main-->
@endsection
@section('userscripts')
    <script>
        function filter() {
            var minimum = $('#minimum').val();
            var maximum = $('#maximum').val();
            var sortby = $('#sort_by').val();
            var orderby = $('#order_by').val();

            var category = [];
            $("input[name='category_checkbox']:checked").each(function() {
                category.push($(this).val());
            });

            var color = [];
            $("input[name='color_checkbox']:checked").each(function() {
                color.push($(this).val());
            });

            $.ajax({
                url: "{{ url('/product-filter') }}",
                type: "get",
                datatype: 'html',
                data: {
                    view: jQuery('#ga').hasClass('active'),
                    minimum: minimum,
                    maximum: maximum,
                    category: category,
                    color: color,
                    sortby: sortby,
                    orderby: orderby,
                },
                success: function(data) {
                    $("#content").html(data);
                }
            });
        }

        $(document).ready(function() {
            filter();
        });

        $('#ga').on("click", function() {
            $("#ga").removeClass('redirectjs list').addClass('grid active');
            $("#la").removeClass('grid active').addClass('redirectjs list');
            filter();
        });

        $('#la').on("click", function() {
            $("#la").removeClass('redirectjs list').addClass('grid active');
            $("#ga").removeClass('grid active').addClass('redirectjs list');
            filter();
        });

        $(".categorybox").change(function() {
            filter();
        });

        $(".colorbox").change(function() {
            filter();
        });

        $("#onsubmit").click(function(e) {
            e.preventDefault();
            filter();
        });

        $("#sort_by").change(function() {
            filter();
        });

        $("#order_by").change(function() {
            filter();
        });
        $(document).on("click", ".atcgbtn, .atclbtn", function() {

            var html = (`<a href="{{ url('/cart') }}"><button type="button" title="Go to Cart"
                                            class="button btn-cart pull-center"><span><i
                                                    class="icon-handbag icons"></i><span>Go to
                                                    Cart</span></span></button></a>`);
            $(this).parent().html(html);

            // $("#content").load(location.href + " #content");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = $(this).attr('id');

            $.ajax({
                url: "/add-to-cart",
                method: "POST",
                data: {
                    id: id,
                    qty: 1,
                },
                success: function(response) {
                    if (response.minicart) {
                        $('.mini-contentCart').html(response.minicart);
                    }
                }
            });
        });
    </script>
@endsection
