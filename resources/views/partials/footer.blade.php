<div class="footer">
    <!-- container -->
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h3>Details</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>Contact</h3>
                <ul>
                    <li>756 gt globel Place,</li>
                    <li>CD-Road,M 07 435.</li>
                    <li>Telephone: +1 234 567 9871</li>
                    <li>FAX: +1 234 567 9871</li>
                    <li>Email : <a href="mailto:example@email.com">Example@mail.com</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>Social</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Rss</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>Newsletter</h3>
                {!! Form::open(['id' => 'subscribe-form']) !!}
                    {{ Form::email('sub_email', null,  ['id'=> 'sub_email','placeholder'=> 'Email address','required' => '', 'maxlength' => '50']) }}
                    {{ Form::submit('Submit', ['id'=>'btn-submit', 'class'=>'btn1 btn-1 btn-1b']) }}
                    <span class="output_mess"></span>
                {!! Form::close() !!}
                {{--<form>
                    <input type="text" placeholder="Email address" required="">
                    <input type="submit" value="Subscribe">
                </form>--}}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- //footer -->
<!-- footer-bottom -->
<div class="footer-bottom">
    <!-- container -->
    <div class="container">
        <p> © 2017 - {{ date('Y') }} Red Wine . All rights reserved.</p>
    </div>
    <!-- //container -->
</div>
<!-- footer-bottom -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
