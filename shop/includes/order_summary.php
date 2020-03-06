<?php

$ip_add = getRealIpUser();

$select_cart ="select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con, $select_cart);

$count =mysqli_num_rows($run_cart);

?>

                   
						<div class="order-card">
							<div class="order-details">
								<div class="od-warp">
									<h4 class="checkout-title">Your order</h4>
									<table class="order-table">
										<thead>
											<tr>
												<th>Product</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
                            $total =0;

                    while($row_cart = mysqli_fetch_array($run_cart)){

                    $pro_id = $row_cart['p_id'];

                    $pro_size = $row_cart['size'];

                    $pro_qty = $row_cart['quantity'];

                    $get_products = "select * from products where product_id='$pro_id'";

                    $run_products = mysqli_query($con, $get_products);

                    while($row_products=mysqli_fetch_array($run_products)){

                        $product_title = $row_products['product_title'];

                        $product_img1 = $row_products['product_img1'];

                        $product_price = $row_products['product_price'];

                        $sub_total = $row_products['product_price']*$pro_qty;

                        $total += $sub_total;
                    
                    ?>
                  
											<tr>
												<td><?php echo $product_title; ?></td>
												<td>&#8358;<?php echo $sub_total; ?></td>
                                            </tr>
                                            <?php } }?>
											<tr>
												<td>SubTotal</td>
												<td>&#8358;<?php echo $total; ?></td>
											</tr>
											<tr class="cart-subtotal">
												<td>Shipping</td>
												<td>Free</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="order-total">
												<th>Total</th>
												<th>&#8358;<?php echo $total; ?></th>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="payment-method">
									<div class="pm-item">
										<input type="radio" name="pm" id="four" checked>
										<label for="four">Direct bank transfer</label>
									</div>
								</div>
							</div>
							<button name="save" class="site-btn btn-full">Place Order</button>
						</div>
					</div>
				</div>
