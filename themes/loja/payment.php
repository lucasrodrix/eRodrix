<article class="open_modal paymentData" style="display: none;">
    <div class="open_container">
        <div class="modal_container_close">
            <p class="text-right close">
                <a href="#" class="btn_delete redius modal-close" title="Fechar">
                    <i class="fa fa-times-circle"></i>
                </a>
            </p>
        </div>
        <div class="payment">
            <h2 class="textleft m-text-center font-text-min title_checklist">Efetue o pagamento do seu Pedido:</h2>
            <div class="container_action">
                <form action="#" method="post" id="form_payment">
                    <input type="hidden" name="input_id" id="input_id" value="">
                    <input type="hidden" name="input_pay" id="input_pay" value="">
                    <img src="<?= $configBase ?>images/general/mercadopago.png" title="Imagem do Pagamento" alt="Imagem do Pagamento" id="img_pay">
                    <div class="clear"></div>
                    <div class="divisor2">
                        <label for="fullname">Titular do Cartão: <input type="text" class="" name="fullname" id="fullname"></label>
                    </div>
                    <div class="divisor2">
                        <label for="cardNumber">Número do Cartão: <input type="text" class="" name="cardNumber" id="cardNumber"></label>
                    </div>
                    <div class="divisor2">
                        <label for="cardDate">Validade: <input type="text" class="" name="cardDate" id="cardDate"></label>
                    </div>
                    <div class="divisor2">
                        <label for="cardCvv">CVV: <input type="text" class="" name="cardCvv" id="cardCvv"></label>
                    </div>                    
                    <div class="divisor2">
                        <label for="cardShipping">Parcela: </label>
                        <select class="cardShipping" name="cardShipping" id="cardShipping">
                            <option value="1">1x - R$1.280,00</option>
                            <option value="2">2x - R$645,00</option>
                            <option value="3">3x - R$433,00</option>
                            <option value="4">4x - R$330,00</option>
                            <option value="5">5x - R$270,00</option>
                            <option value="6">6x - R$230,00</option>
                            <option value="7">7x - R$200,00</option>
                            <option value="8">8x - R$179,00</option>
                            <option value="9">9x - R$165,00</option>
                            <option value="10">10x - R$150,00</option>
                            <option value="11">11x - R$140,00</option>
                            <option value="12">12x - R$133,00</option>
                        </select>
                    </div>
                    <div class="divisor2">
                        <label for="proprietyCpf">CPF: <input type="text" class="proprietyCpf" name="proprietyCpf" id="proprietyCpf" required></label>
                    </div>
                    <div class="divisor2">
                        <label for="proprietyEmail">E-mail: <input type="text" class="proprietyEmail" name="proprietyEmail" id="proprietyEmail"></label>
                    </div>
                    <div class="divisor2">
                        <label for="proprietyPhone">Telefone: <input type="text" class="proprietyPhone" name="proprietyPhone" id="proprietyPhone"></label>
                    </div>
                    <div class="divisor2">
                        <br>
                        <button class="btn_new radius" id="btn_payment" name="btn_payment">
                            <i class="fa fa-street-view"></i>Pagar
                        </button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</article>