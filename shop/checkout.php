<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Endereço Cobrança</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="first-name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="last-name" placeholder="Sobrenome">
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="address" placeholder="Endereço">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="city" placeholder="Cidade">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="country" placeholder="País">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="zip-code" placeholder="CEP">
                    </div>
                    <div class="form-group">
                        <input class="input" type="tel" name="tel" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <div class="input-checkbox">
                            <input type="checkbox" id="create-account">
                            <label for="create-account">
                                <span></span>
                                Criar conta?
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <input class="input" type="password" name="password" placeholder="Enter Your Password">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Billing Details -->

                <!-- Shiping Details -->
                <div class="shiping-details">
                    <div class="section-title">
                        <h3 class="title">Endereço de Entrega</h3>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="shiping-address">
                        <label for="shiping-address">
                            <span></span>
                            Entrega em endereço diferente?
                        </label>
                        <div class="caption">
                            <div class="form-group">
                                <input class="input" type="text" name="first-name" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="last-name" placeholder="Sobrenome">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Endereço">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="city" placeholder="Curitiba">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="country" placeholder="País">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="zip-code" placeholder="CEP">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="tel" placeholder="Telefone">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Shiping Details -->

                <!-- Order notes -->
                <div class="order-notes">
                    <textarea class="input" placeholder="Anotações Pedido"></textarea>
                </div>
                <!-- /Order notes -->
            </div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Seu Pedido</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUTO</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    <div class="order-products">
                        <div class="order-col">
                            <div>1 x August Smart Lock</div>
                            <div>$980.00</div>
                        </div>
                        <div class="order-col">
                            <div>2 x Philips Hue White A19 Single Bulb</div>
                            <div>$980.00</div>
                        </div>
                    </div>
                    <div class="order-col">
                        <div>ENTREGA</div>
                        <div><strong>GRATUITA</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">$2940.00</strong></div>
                    </div>
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-1">
                        <label for="payment-1">
                            <span></span>
                            Transferência
                        </label>
                        <div class="caption">
                            <p>Obs.</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2">
                        <label for="payment-2">
                            <span></span>
                            Cartão de crédito
                        </label>
                        <div class="caption">
                            <p>Obs.</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-3">
                        <label for="payment-3">
                            <span></span>
                            Paypal
                        </label>
                        <div class="caption">
                            <p>Obs.</p>
                        </div>
                    </div>
                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms">
                    <label for="terms">
                        <span></span>
                        Eu li e aceito os <a href="#">termos & condições</a>
                    </label>
                </div>
                <a href="#" class="primary-btn order-submit">Finalizar Pedido</a>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<?php include(FOOTER_TEMPLATE); ?>