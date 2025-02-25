@extends('client.layout')

@section('title', 'Product Comparison')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Product Comparison</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('productComparison') }}">Product Comparison</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-about  -->

<!-- Main-Product Comparison  -->
<main>
    <div id="product-compare" class="container">

        <div class="row">
            <div id="content" class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td colspan="3"><strong>Product Details</strong></td>
                        </tr>
                    </thead>

                    <tr>
                        <td>Product</td>
                        <td><a href="#"><strong>Caulking gun</strong></a></td>
                        <td><a href="#"><strong>Backsaw tool</strong></a></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td class="text-center"> <img src="{{ asset('assets/client/images/products/11.jpg') }}" width="90" alt="Caulking gun" title="Caulking gun" class="img-thumbnail"> </td>
                        <td class="text-center"> <img src="{{ asset('assets/client/images/products/9.jpg') }}" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail"> </td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td> $122.00
                        </td>
                        <td> $20.00
                        </td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Product 21</td>
                        <td>test1</td>

                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Hewlett-Packard</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>Availability</td>
                        <td>In Stock</td>
                        <td>2-3 Days</td>

                    </tr>
                    <tr>
                        <td>Summary</td>
                        <td class="description">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge w..</td>
                        <td class="description">test..</td>

                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>1.00kg</td>
                        <td>0.00kg</td>

                    </tr>
                    <tr>
                        <td>Dimensions (L x W x H)</td>
                        <td>0.00cm x 0.00cm x 0.00cm</td>
                        <td>0.00cm x 0.00cm x 0.00cm</td>

                    </tr>

                    <tr>
                        <td colspan="3"><strong>Memory</strong></td>
                    </tr>

                    <tr>
                        <td>test 1</td>
                        <td>16GB</td>
                        <td></td>

                    </tr>

                    <tr>
                        <td colspan="3"><strong>Processor</strong></td>
                    </tr>


                    <tr>
                        <td>No. of Cores</td>
                        <td>4</td>
                        <td></td>
                    </tr>

                    <tbody>
                        <tr>
                            <td></td>
                            <td class="text-center">
                                <form method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#cart">
                                    <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                                    <input type="hidden" name="product_id" value="47"> <input type="hidden" name="quantity" value="1">
                                    <a href="#" class="btn-danger btn-block">Remove</a>
                                </form>
                            </td>
                            <td class="text-center">
                                <form method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#cart">
                                    <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                                    <input type="hidden" name="product_id" value="50"> <input type="hidden" name="quantity" value="1">
                                    <a href="#" class="btn-danger btn-block">Remove</a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!--End Main-Product Comparison  -->


@endsection
