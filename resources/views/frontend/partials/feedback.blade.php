<section>

        <div id="feedback_Sidebar" class="feedbacksidebar">
            <div class="feedback_header_logo">
                <button class="close_feedback" onclick="feedbackButtonClicked()"><i class="close-btn fas fa-times"></i></button>
                <div class="modal_logo_feedback">
                    <img src="{{ asset('frontend') }}/images/ngenit.png" alt="">
                </div>
            </div>
            <div style="height: 5px; width:100%; background: linear-gradient(90deg, #ae0a46, #a80b6e 25%, #582873 75%);margin: 5px 0px;"></div>
            <div id="feedback" class="feedback_details">
                <p>Thank you for assisting us with your feedback in this quick survey. Please take a minute to answer the questions below regarding your experience.<br><br>
                    If you are experiencing an issue with your account, orders, or billing and want immediate assistance, please use our chat feature. </p>
                <div class="d-flex justify-content-end">
                    <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click">continue</button>
                </div>
            </div>

                <div id="feedback_details" class="feedback_details" style="display: none;">
                    <p>What topic(s) would you like to provide feedback on?</p>
                    <form action="{{ route('feedback.store') }}" method="post">
                        @csrf
                        <!--Check Box item-->
                        <div class="checkbox_wrapper">
                            <label class="feedback_details_checkbox">Product Details and availability
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="product_details" value="5">
                                    <p>5 (Best)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="product_details" value="4">
                                    <p>4</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="product_details" value="3">
                                    <p>3</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="product_details" value="2">
                                    <p>2</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="product_details" value="1">
                                    <p>1 (Worst)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>

                            </label>
                        </div>

                        <!--Check Box item-->
                        <div class="checkbox_wrapper">
                            <label class="feedback_details_checkbox">Articles, reports, & blog content
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="articles" value="5">
                                    <p>5 (Best)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="articles" value="4">
                                    <p>4</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="articles" value="3">
                                    <p>3</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="articles" value="2">
                                    <p>2</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="articles" value="1">
                                    <p>1 (Worst)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                            </label>
                        </div>
                        <!--Check Box item-->
                        <div class="checkbox_wrapper">
                            <label class="feedback_details_checkbox">Purchasing, checkout & cart
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="purchasing" value="5">
                                    <p>5 (Best)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="purchasing" value="4">
                                    <p>4</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="purchasing" value="3">
                                    <p>3</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="purchasing" value="2">
                                    <p>2</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="purchasing" value="1">
                                    <p>1 (Worst)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                            </label>
                        </div>
                        <!--Check Box item-->
                        <div class="checkbox_wrapper">
                            <label class="feedback_details_checkbox">Products Pricing & RFQ
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="pricing" value="5">
                                    <p>5 (Best)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="pricing" value="4">
                                    <p>4</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="pricing" value="3">
                                    <p>3</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="pricing" value="2">
                                    <p>2</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="pricing" value="1">
                                    <p>1 (Worst)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                            </label>
                        </div>
                        <!--Check Box item-->
                        <div class="checkbox_wrapper">
                            <label class="feedback_details_checkbox">Solutions & services content
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="solutions" value="5">
                                    <p>5 (Best)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="solutions" value="4">
                                    <p>4</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="solutions" value="3">
                                    <p>3</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="solutions" value="2">
                                    <p>2</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="solutions" value="1">
                                    <p>1 (Worst)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                            </label>
                        </div>
                        <!--Check Box item-->
                        <div class="checkbox_wrapper">
                            <label class="feedback_details_checkbox">Product Search & Filtering
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="search" value="5">
                                    <p>5 (Best)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="search" value="4">
                                    <p>4</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="search" value="3">
                                    <p>3</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="search" value="2">
                                    <p>2</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                                <label class="feedback_details_checkrounded">
                                    <input type="radio" name="search" value="1">
                                    <p>1 (Worst)</p>
                                    <span class="checkmark_rounded"></span>
                                </label>
                            </label>
                        </div>





                        <div class="d-flex justify-content-between m-2">
                            <a class="feedback_continue_btn" onclick="feedbackVisible();" value="Click"><i class="fa-solid fa-chevron-left"></i> previous</a>
                            <button class="feedback_continue_btn" type="submit">Submit Your FeedBack <i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>

        </div>

        <div id="feedback_btn">
            <button id="sidebarButton_fb" class="openbtnfeedback" onclick="feedbackButtonClicked()"><i class="fa-solid fa-bullhorn"></i> Feedback</button>
        </div>

</section>
