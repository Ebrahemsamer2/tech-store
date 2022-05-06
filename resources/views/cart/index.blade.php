@extends('layout.main')

@section('title', 'Cart')

@section('custom_styles')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endsection

@section('content')
	<main class="page">
	 	<section class="shopping-cart dark">
	 		<div class="container">
		        <div class="block-heading">
		          <h3>Shopping Cart <small> {{ count($cart) }} Items </small></h3>
		        </div>
		        <div class="content">
	 				<div class="row">
	 					<div class="col-md-12">
	 						<div class="items p-4">
								@forelse($cart as $item)
				 				<div class="product">
				 					<div class="row">
					 					<div class="col-md-2">
					 						<img 
                                             class="img-fluid mx-auto d-block image" 
                                             src="{{ asset('storage/images/product-placeholder.png') }}">
					 					</div>
					 					<div class="col-md-10">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
								 							<a href="{{ route('products.show', $item->model->slug) }}">{{ $item->name }}</a>
								 							<div class="product-info">
									 							<div class='text-secondary'>
																	{{ $item->model->features }}
																 </div>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">Quantity:</label>
							 							<input min='1' id="quantity" type="number" value ="{{ $item->qty }}" class="form-control quantity-input">
							 						</div>
							 						<div class="col-md-3 price">
							 							<span>${{ $item->model->getPrice() }}</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
                                        <div class="col-md-12">
                                            <div class="info">
												<a 
                                                onclick="event.preventDefault();document.querySelector('#remove_{{$item->id}}_from_cart').submit()"
                                                href="#">
													Remove
                                                </a> |

												<a 
                                                onclick="event.preventDefault();document.querySelector('#save_{{$item->id}}_for_later').submit()"
                                                href="#">
													Save For Later
                                                </a> |

												<a 
                                                onclick="event.preventDefault();document.querySelector('#add_{{$item->id}}_to_wishlist').submit()"
                                                href="#">
													Add to wishlist
                                                </a>

                                            </div>
											<form id='add_{{$item->id}}_to_wishlist' method='POST' action="{{ route('cart.saveincart', ['cartinstanse'=>'wishlist', 'id' => $item->id]) }}">
												@csrf
											</form>

											<form id='save_{{$item->id}}_for_later' method='POST' action="{{ route('cart.saveincart', ['cartinstanse'=>'later', 'id' => $item->id]) }}">
												@csrf
											</form>

											<form id='remove_{{$item->id}}_from_cart' method='POST' action="{{ route('cart.destroy', $item->rowId) }}">
												@csrf
												@method('DELETE')
											</form>
                                        </div>
					 				</div>
				 				</div>

								<hr>

								@empty 
								<p class='lead'>Your cart is empty</p>
								<a href="{{ route('products.index') }}" class="btn btn-primary">Continue Shopping</a>
								@endforelse
				 			</div>
			 			</div>
						@if(count( $cart ))
			 			<div class="col-md-12 offset-lg-8 col-lg-4">
			 				<div class="summary">
			 					<h3>Summary</h3>
			 					<div class="summary-item"><span class="text">Subtotal</span><span class="price">${{ getPrice(\Cart::instance('default')->subtotal()) }}</span></div>
			 					<div class="summary-item"><span class="text">Tax</span><span class="price">${{ getPrice(\Cart::instance('default')->tax()) }}</span></div>
			 					<div class="summary-item"><span class="text">Total</span><span class="price">${{ getPrice(\Cart::instance('default')->total()) }}</span></div>
			 					<button type="button" class="btn btn-danger btn-lg btn-block">Checkout</button>
				 			</div>
			 			</div>
						@endif
		 			</div> 
		 		</div>
				 
			</div>
			</section>

			<section class="shopping-cart dark">

			<div class="container">
				<div class="block-heading">
					<h3>Saved For later <small> {{ count($saveforlater) }} Items </small></h3>
				</div>	
				<div class='saveforlatercontent'>
					<div class="row">
						<div class="col-md-12">
							<div class="items p-4">
								@forelse($saveforlater as $item)
								<div class="product">
									<div class="row">
										<div class="col-md-2">
											<img 
											class="img-fluid mx-auto d-block image" 
											src="{{ asset('storage/images/product-placeholder.png') }}">
										</div>
										<div class="col-md-10">
											<div class="info">
												<div class="row">
													<div class="col-md-8 product-name">
														<div class="product-name">
															<a href="{{ route('products.show', $item->model->slug) }}">{{ $item->name }}</a>
															<div class="product-info">
																<div class='text-secondary'>
																	{{ $item->model->features }}
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 price">
														<span>${{ $item->model->getPrice() }}</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="info">
												<a 
												onclick="event.preventDefault();document.querySelector('#remove_{{$item->id}}_from_cart').submit()"
												href="#">
													Remove
												</a> |

												<a 
												onclick="event.preventDefault();document.querySelector('#switch_{{$item->id}}_to_cart').submit()"
												href="#">
													Switch to cart
												</a> |

												<a 
												onclick="event.preventDefault();document.querySelector('#add_{{$item->id}}_to_wishlist').submit()"
												href="#">
													Add to wishlist
												</a>

											</div>
											<form id='add_{{$item->id}}_to_wishlist' method='POST' action="{{ route('cart.saveincart', ['cartinstanse'=>'wishlist', 'id' => $item->rowId]) }}">
												@csrf
											</form>

											<form id='switch_{{$item->id}}_to_cart' method='POST' action="{{ route('cart.store') }}">
												<input type='hidden' name='id' value="{{ $item->id }}">
												<input type='hidden' name='name' value='{{ $item->name }}'>
												<input type='hidden' name='price' value='{{ $item->price }}'>
												@csrf
											</form>

											<form id='remove_{{$item->id}}_from_cart' method='POST' action="{{ route('cart.removefromcart', ['cartinstanse' => 'later', 'rowId' => $item->rowId]) }}">
												@csrf
											</form>
										</div>
									</div>
								</div>

								<hr>

								@empty 
								<p class='lead'>You do not have saved items</p>
								@endforelse
							</div>
						</div>
					</div> 
				</div>
			</div>
		</section>
	</main>
@endsection